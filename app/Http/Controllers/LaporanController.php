<?php

namespace App\Http\Controllers;

use App\laporan;
use App\anggota;
use App\admin;
use DB;
use App\Http\Requests\LaporanRequest;
use App\Http\Requests\UpdateLaporan;
use Illuminate\Http\Request;

class laporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('laporans')
        ->join('anggotas','laporans.KdAnggota','=','anggotas.id')
        ->join('admins','laporans.KdAdmin','=','admins.id')
        ->select('laporans.*','anggotas.NamaAnggota','admins.NamaAdmin')
        ->get();
        return view('laporan/laporan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $anggota=anggota::all();
        $admin=admin::all();
        return view('laporan/tambahLaporan',compact('anggota','admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LaporanRequest $request)
    {
        $data = $request->validated();
        $data = laporan::create($data);
        $data->save();
        return redirect()->route('laporan.index')->with('success', 'Data telah dibuat');
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
        $data=DB::table('laporans')
        ->join('anggotas','laporans.KdAnggota','=','anggotas.id')
        ->join('admins','laporans.KdAdmin','=','admins.id')
        ->select('laporans.*','anggotas.NamaAnggota','admins.NamaAdmin')
        ->where('laporans.id','=',$id)->get();
        $anggota=anggota::all();
        $admin=admin::all();
        return view('laporan/editLaporan',compact('data','anggota','admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLaporan $request, $id)
    {
        $laporan = laporan::find($id);
        $laporan->update($request->validated());
        $laporan->save();

        return redirect()->route('laporan.index')->with('info','Update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = laporan::findOrFail($id);
        $delete->delete();

        return redirect()->route('laporan.index')->with('info','Data Dihapus');
    }
}
