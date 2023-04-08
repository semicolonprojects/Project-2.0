<?php

namespace App\Http\Controllers;

use App\Models\Channel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $channel = Channel::all();
        $channel2 = Channel::all();
        return view('dashboard.marketing.mkt-channel-info', compact('channel', 'channel2'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_channel' => 'required',
            'target_bulanan' => 'required|numeric',
            'total_tercapai' => 'numeric|nullable',
        ]);

        $channel = new Channel;
        $channel->nama_channel = $request->nama_channel;
        $channel->target_bulanan = $request->target_bulanan;
        $channel->total_tercapai = $request->total_tercapai;
        $channel->save();

        return redirect()->route('channel.index')->with('success', 'Channel has been created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // logika untuk menampilkan data channel yang dipilih
        $channel = Channel::findOrFail($id);

        // tampilkan view yang diinginkan dengan data channel
        return view('dashboard.marketing.mkt-channel-detail', compact('channel'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function edit(Channel $channel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $channel = Channel::find($id);
        $channel->nama_channel = $request->nama_channel;
        $channel->target_bulanan = $request->target_bulanan;
        $channel->total_tercapai = $request->total_tercapai;
        $channel->save();
        return redirect('/marketing/channel')->with('update', 'Berhasil Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Channel  $channel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $channel = Channel::find($id);
        $channel->delete();
        return redirect('/marketing/channel')->with('delete', 'Berhasil Hapus');
    }
}
