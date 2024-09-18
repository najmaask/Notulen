<?php

namespace App\Http\Controllers;

use App\notulen;
use App\anggota;
use App\admin;
use DB;
use App\Http\Requests\ContohRequet;
use App\Http\Requests\UpdateNotulen;
use Illuminate\Http\Request;

class NotulenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('notulens')
        ->join('anggotas','notulens.KdAnggota','=','anggotas.id')
        ->join('admins','notulens.KdAdmin','=','admins.id')
        ->select('notulens.*','anggotas.NamaAnggota','admins.NamaAdmin')
        ->get();
        return view('notulen/notulen',compact('data'));
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
        return view('Notulen.tambahNotulen',compact('anggota','admin'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContohRequet $request)
    {
        $data = $request->validated();
        $data = notulen::create($data);
        $data->save();
        return redirect()->route('notulen.index')->with('success', 'Data telah dibuat');
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
        $data=DB::table('notulens')
        ->join('anggotas','notulens.KdAnggota','=','anggotas.id')
        ->join('admins','notulens.KdAdmin','=','admins.id')
        ->select('notulens.*','anggotas.NamaAnggota','admins.NamaAdmin')
        ->where('notulens.id','=',$id)->get();
        $anggota=anggota::all();
        $admin=admin::all();
        return view('Notulen.editNotulen',compact('data','anggota','admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateNotulen $request, $id)
    {
        $notulen = notulen::find($id);
        $notulen->update($request->validated());
        $notulen->save();

        return redirect()->route('notulen.index')->with('info','Update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = notulen::findOrFail($id);
        $delete->delete();

        return redirect()->route('notulen.index')->with('info','Data Dihapus');
    }
}
