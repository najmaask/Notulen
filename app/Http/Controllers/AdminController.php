<?php

namespace App\Http\Controllers;

use App\admin;
use App\jabatan;
use DB;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\UpdateAdmin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=DB::table('admins')
        ->join('jabatans','admins.Jabatan','=','jabatans.id')
        ->select('admins.*','jabatans.Jabatan')
        ->get();
        return view('admin/admin',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jabatan=jabatan::all();
        return view('admin/tambahAdmin',compact('jabatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        $data = $request->validated();
        $data = admin::create($data);
        $data->save();
        return redirect()->route('admin.index')->with('success', 'Data telah dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $data=DB::table('admins')
        ->join('jabatans','admins.Jabatan','=','jabatans.id')
        ->select('admins.*','jabatans.Jabatan')
        ->where('admins.id','=',$id)->get();
        $jabatan=jabatan::all();
        return view('admin/editAdmin',compact('data','jabatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmin $request,  $id)
    {
        $admin = admin::find($id);
        $admin->update($request->validated());
        $admin->save();

        return redirect()->route('admin.index')->with('info','Update data berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = admin::findOrFail($id);
        $delete->delete();

        return redirect()->route('admin.index')->with('info','Data Dihapus');
    }
}
