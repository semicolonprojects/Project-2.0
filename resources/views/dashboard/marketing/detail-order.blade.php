@extends('dashboard.layout.main')

@section('mainContent')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Order Detail') }}</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">{{ __('Product Name') }}</th>
                                <th scope="col">{{ __('Quantity') }}</th>
                            </tr>
                        </thead>
                        {{-- <tbody>
                            @foreach($orders->nama_barang as $key => $nama_barang)
                            <tr>
                                <td>{{ $nama_barang }}</td>
                                <td>{{ $orders->total_pembelian }}</td>
                                @foreach ($orders->harga as $harga)
                                @endforeach
                            </tr>
                            @endforeach
                        </tbody> --}}
                    </table>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ __('Order ID') }}</th>
                                        <td>{{ $orders->order_id }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('Customer ID') }}</th>
                                        <td>{{ $orders->customer_id }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('User ID') }}</th>
                                        <td>{{ $orders->user_id }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('Payment Status') }}</th>
                                        <td>{{ $orders->status_pembayaran }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th scope="row">{{ __('Order Type') }}</th>
                                        <td>{{ $orders->tipe_pesanan }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('Total Price') }}</th>
                                        <td>{{ $orders->total_pembelian }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('Diskon') }}</th>
                                        <td>{{ $orders->diskon }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('Shipping Cost') }}</th>
                                        <td>{{ $orders->ongkir }}</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">{{ __('Note') }}</th>
                                        <td>{{ $orders->note }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection