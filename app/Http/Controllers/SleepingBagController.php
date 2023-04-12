<?php

namespace App\Http\Controllers;

use App\Models\SleepingBag;
use Illuminate\Http\Request;

class SleepingBagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sb = SleepingBag::paginate(2);
        return view('sleepingbag.sleepingbag', [
            'sb' => $sb
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sleepingbag.create_sleepingbag')
                    ->with('url_form', url('/sb'));
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
            'merk_sb' => 'required|string|max:30',
            'warna' => 'required|string|max:20',
            'sewaperhari' => 'required|integer',
        ]);

        $data = SleepingBag::create($request->except(['_token']));
        return redirect('sb')
                        ->with('success', 'Data Tenda Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SleepingBag  $sleepingBag
     * @return \Illuminate\Http\Response
     */
    public function show(SleepingBag $sleepingBag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\SleepingBag  $sleepingBag
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sb = SleepingBag::find($id);
        return view('sleepingbag.create_sleepingbag')
                    ->with('sb', $sb)
                    ->with('url_form', url('/sb/'. $id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SleepingBag  $sleepingBag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'merk_sb' => 'required|string|max:30',
            'warna' => 'required|string|max:20',
            'sewaperhari' => 'required|integer',
        ]);

        $data = SleepingBag::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('sb')
                        ->with('success', 'Data Tenda Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SleepingBag  $sleepingBag
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        SleepingBag::where('id', '=', $id)->delete();
        return redirect('sb')
                        ->with('success', 'Tenda Berhasil Dihapus');
    }
}
