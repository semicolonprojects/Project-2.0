<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'customer_id',
        'kode_barang',
        'user_id',
        'status_pembayaran',
        'tipe_pesanan',
        'total_pembelian',
        'total_order',
        'diskon',
        'ongkir',
        'status_barang',
        'note',
        'komisi',
    ];

    public function show()
    {
        return DB::table('produk_jadis')
            ->join('orders', 'produk_jadis.id', '=', 'orders.kode_barang')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select('produk_jadis.nama_barang', 'orders.order_id', 'users.username', 'customers.nama_lengkap', 'orders.status_pembayaran', 'orders.tipe_pesanan', 'orders.total_pembelian', DB::raw('(SUM(orders.total_order)*1/100) as total_order'), 'orders.diskon', 'orders.status_barang', 'orders.note', 'orders.customer_id', 'orders.created_at')
            ->groupBy('orders.order_id', 'produk_jadis.nama_barang', 'customers.nama_lengkap', 'users.username', 'orders.status_pembayaran', 'orders.tipe_pesanan', 'orders.total_pembelian', 'orders.diskon', 'orders.status_barang', 'orders.note', 'orders.customer_id', 'orders.created_at')
            ->get();
    }

    public function topProducts($topProducts)
    {
        $query = $this->newQuery();

        if ($topProducts === 'Daily') {
            $query->select('produk_jadis.nama_barang', 'produk_jadis.size', DB::raw('SUM(orders.total_order) as total_order'))
                ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
                ->whereDate('orders.created_at', Carbon::today())
                ->groupBy('produk_jadis.nama_barang', 'produk_jadis.size')
                ->orderBy('total_order', 'desc')
                ->take(5);
        } elseif ($topProducts === 'Monthly') {
            $query->select('produk_jadis.nama_barang', 'produk_jadis.size', DB::raw('SUM(orders.total_order) as total_order'))
                ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
                ->whereYear('orders.created_at', Carbon::now()->year)
                ->whereMonth('orders.created_at', Carbon::now()->month)
                ->groupBy('produk_jadis.nama_barang', 'produk_jadis.size')
                ->orderBy('total_order', 'desc')
                ->take(5);
        } elseif ($topProducts === 'Yearly') {
            $query->select('produk_jadis.nama_barang', 'produk_jadis.size', DB::raw('SUM(orders.total_order) as total_order'))
                ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
                ->whereYear('orders.created_at', Carbon::now()->year)
                ->groupBy('produk_jadis.nama_barang', 'produk_jadis.size')
                ->orderBy('total_order', 'desc')
                ->take(5);
        }
        return $query->get();
    }

    public function topCustomer($topCustomer)
    {
        if (!is_array($topCustomer)) {
            $topCustomer = [];
        }

        $sortBy = $topCustomer['sortBy'] ?? 'Daily';

        $query = DB::table('orders')
            ->join('customers', 'orders.customer_id', '=', 'customers.id')
            ->select('customers.nama_lengkap', 'orders.customer_id', DB::raw('SUM(orders.total_pembelian) as revenue'), DB::raw('SUM(orders.total_order) as total_pembelian'))
            ->groupBy('customers.nama_lengkap', 'orders.customer_id')
            ->orderBy('revenue', 'desc');

        if ($sortBy === 'Daily') {
            $query->whereDate('orders.created_at', Carbon::today());
        } elseif ($sortBy === 'Monthly') {
            $query->whereMonth('orders.created_at', Carbon::now()->month);
        } elseif ($sortBy === 'Yearly') {
            $query->whereYear('orders.created_at', Carbon::now()->year);
        }

        $topCustomers = $query->get();

        $result = [];

        foreach ($topCustomers as $customer) {
            $customerData = [
                'customer_id' => $customer->customer_id,
                'nama_lengkap' => $customer->nama_lengkap,
                'revenue' => $customer->revenue,
                'total_pembelian' => $customer->total_pembelian,
                'favorite_products' => []
            ];

            $favoriteProducts = DB::table('orders')
                ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
                ->select('produk_jadis.nama_barang')
                ->where('orders.customer_id', $customer->customer_id)
                ->groupBy('produk_jadis.nama_barang')
                ->orderByRaw('SUM(orders.total_pembelian) DESC')
                ->limit(3)
                ->get();

            foreach ($favoriteProducts as $product) {
                $customerData['favorite_products'][] = $product->nama_barang;
            }

            $result[] = $customerData;
        }

        return $result;
    }

    public function marketingOverview($marketingOverview)
    {
        if ($marketingOverview === 'Daily') {
            return DB::table('orders')
                ->select(
                    DB::raw('SUM(total_pembelian) as total_pembelian'),
                    DB::raw('SUM(total_order) as total_order'),
                    DB::raw('SUM(customer_id) as total_customer'),
                    DB::raw('COUNT(CASE WHEN status_pembayaran = "Dibayar" THEN 1 END) as total_dibayar'),
                    DB::raw('(COUNT(CASE WHEN status_pembayaran = "Dibayar" THEN 1 END) / COUNT(*)) * 100 as persentase_dibayar')
                )
                ->where('created_at', Carbon::now())
                ->get();
        } elseif ($marketingOverview === 'Monthly') {
            return DB::table('orders')
                ->select(
                    DB::raw('SUM(total_pembelian) as total_pembelian'),
                    DB::raw('SUM(total_order) as total_order'),
                    DB::raw('SUM(customer_id) as total_customer'),
                    DB::raw('COUNT(CASE WHEN status_pembayaran = "Dibayar" THEN 1 END) as total_dibayar'),
                    DB::raw('(COUNT(CASE WHEN status_pembayaran = "Dibayar" THEN 1 END) / COUNT(*)) * 100 as persentase_dibayar')
                )
                ->whereMonth('created_at', Carbon::now()->month)
                ->get();
        } elseif ($marketingOverview === 'Yearly') {
            return DB::table('orders')
                ->select(
                    DB::raw('SUM(total_pembelian) as total_pembelian'),
                    DB::raw('SUM(total_order) as total_order'),
                    DB::raw('SUM(customer_id) as total_customer'),
                    DB::raw('COUNT(CASE WHEN status_pembayaran = "Dibayar" THEN 1 END) as total_dibayar'),
                    DB::raw('(COUNT(CASE WHEN status_pembayaran = "Dibayar" THEN 1 END) / COUNT(*)) * 100 as persentase_dibayar')
                )
                ->whereYear('created_at', Carbon::now()->year)
                ->get();
        }
    }


    public function totalPembelian()
    {
        return DB::table('orders')
            ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
            ->join('channels', 'orders.tipe_pesanan', '=', 'channels.id')
            ->select('produk_jadis.nama_barang', DB::raw('SUM(orders.total_order) AS total_order'), 'channels.nama_channel')
            ->groupBy('produk_jadis.nama_barang', 'channels.nama_channel')
            ->get();
    }

    public function totalPembelianPerMinggu()
    {
        $startDate = Carbon::now()->startOfWeek(); // Mengambil tanggal awal minggu ini
        $endDate = Carbon::now()->endOfWeek(); // Mengambil tanggal akhir minggu ini

        $now =  DB::table('orders')
            ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
            ->join('channels', 'orders.tipe_pesanan', '=', 'channels.id')
            ->select('produk_jadis.nama_barang', DB::raw('SUM(orders.total_order) AS total_order'), 'channels.nama_channel')
            ->whereBetween('orders.created_at', [$startDate, $endDate])
            ->groupBy('produk_jadis.nama_barang', 'channels.nama_channel')
            ->get();

        return $now;
    }

    public function totalPembelianPerMingguLalu()
    {
        $lastWeekStartDate = Carbon::now()->startOfWeek()->subWeek(); // Mengambil tanggal awal minggu kemarin
        $lastWeekEndDate = Carbon::now()->endOfWeek()->subWeek(); // Mengambil tanggal akhir minggu kemarin

        $last = DB::table('orders')
            ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
            ->join('channels', 'orders.tipe_pesanan', '=', 'channels.id')
            ->select('produk_jadis.nama_barang', DB::raw('SUM(orders.total_order) AS total_order'), 'channels.nama_channel')
            ->whereBetween('orders.created_at', [$lastWeekStartDate, $lastWeekEndDate])
            ->groupBy('produk_jadis.nama_barang', 'channels.nama_channel')
            ->get();

        return $last;
    }

    public function perBulan()
    {
        return DB::table('orders')
            ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
            ->join('channels', 'orders.tipe_pesanan', '=', 'channels.id')
            ->select(
                DB::raw('DATE_FORMAT(orders.created_at, "%M") AS bulan'),
                DB::raw('SUM(orders.total_order) AS total_order')
            )
            ->groupBy('bulan')
            ->get();
    }

    public function perHari()
    {
        $today = date('Y-m-d'); // Mendapatkan tanggal hari ini dalam format Y-m-d (misalnya: 2023-06-05)

        return DB::table('orders')
            ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.id')
            ->join('channels', 'orders.tipe_pesanan', '=', 'channels.id')
            ->select(
                DB::raw('DATE_FORMAT(orders.created_at, "%d") AS hari'),
                DB::raw('SUM(orders.total_order) AS total_order')
            )
            ->whereDate('orders.created_at', $today) // Menambahkan kondisi where untuk tanggal hari ini
            ->groupBy('hari')
            ->get();
    }

    public function rataRata()
    {
        $orderAverages = DB::table('orders')
            ->join('produk_jadis', 'orders.kode_barang', '=', 'produk_jadis.kode_barang')
            ->select(DB::raw('DATE(orders.created_at) as order_date'), DB::raw('AVG(orders.total_order) as average_order'), 'produk_jadis.nama_barang', 'produk_jadis.kategori')
            ->where('orders.created_at', now())
            ->groupBy('order_date', 'produk_jadis.nama_barang', 'produk_jadis.kategori')
            ->get();


        return $orderAverages;
    }

    public static function paginateCollection(Collection $collection, $perPage, $currentPage, $path)
    {
        $queryBuilder = new Collection($collection);

        $paginator = new LengthAwarePaginator(
            $queryBuilder->forPage($currentPage, $perPage),
            $queryBuilder->count(),
            $perPage,
            $currentPage,
            ['path' => $path]
        );

        Paginator::useTailwind();

        return $paginator;
    }


    public function calculateTotalPembelian($totalOrder, $hargaBarang, $diskon)
    {
        return ($totalOrder * $hargaBarang) - ($hargaBarang * $totalOrder * $diskon);
    }

    public function calculateKomisi($totalPembelian, $komisiRate)
    {
        return $totalPembelian * $komisiRate;
    }

    public function produk()
    {
        return $this->belongsTo(ProdukJadi::class, 'kode_barang');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function channel()
    {
        return $this->belongsTo(Channel::class, 'tipe_pesanan');
    }

    public function target()
    {
        return $this->hasMany(TargetKaryawan::class);
    }
}
