<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $pegawai = DB::table('pegawais')->paginate(10);
        return view('index', ['pegawai' => $pegawai]);
    }

    public function cari(Request $request)
    {

        $jenis_pekerjaan = $request->jenis_pekerjaan;
        $umur = $request->umur;
        $pegawai = DB::table('pegawais')
            ->where(
                function ($query) use ($jenis_pekerjaan, $umur) {
                    if (!empty($jenis_pekerjaan)) {
                        $query->where('jenis_pekerjaan', $jenis_pekerjaan);
                    }

                    if (!empty($umur)) {
                        $query->where('umur', $umur);
                    }
                }
            )
            ->paginate();

        return view('index', ['pegawai' => $pegawai]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
