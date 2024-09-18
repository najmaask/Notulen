<?php

namespace App\Http\Controllers;

use App\anggota;
use App\status;
use DB;
use App\Http\Requests\AnggotaRequest;
use App\Http\Requests\UpdateAnggota;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('anggotas')
        ->join('statuss','anggotas.Status','=','statuss.id')
        ->select('anggotas.*','statuss.Status')
        ->get();
        return view('anggota/anggota',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $status=status::all();
        return view('anggota/tambahAnggota',compact('status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AnggotaRequest $request)
    {
        $data = $request->validated();
        $data = anggota::create($data);
        $data->save();
        return redirect()->route('anggota.index')->with('success', 'Data telah dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data=DB::table('anggotas')
        ->join('statuss','anggotas.Status','=','statuss.id')
        ->select('anggotas.*','statuss.Status')
        ->where('anggotas.id','=',$id)->get();
        $status=status::all();
        return view('anggota/editAnggota',compact('data','status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnggota $request,  $id)
    {
        $anggota = anggota::find($id);
        $anggota->update($request->validated());
        $anggota->save();

        return redirect()->route('anggota.index')->with('info','Update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = anggota::findOrFail($id);
        $delete->delete();

        return redirect()->route('anggota.index')->with('info','Data Dihapus');
    }
}
