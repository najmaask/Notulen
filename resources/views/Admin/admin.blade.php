@extends('layout.master')
@section('content')
<title>Admin</title>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"> Data Admin</strong>

                                @if (session('success'))
                                    <div class="alert alert-success" role="alert" style="width:1000px; margin-left: 8px; margin-top: 20px">
                                        {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                    </div>
                                @endif
                                @if (session('info'))
                                    <div class="alert alert-info" role="alert" style="width:1000px; margin-left: 8px; margin-top: 20px">
                                        {{ session('info') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>

                                    </div>
                                @endif
                            </div>

                            <div class="card-body">
                                <a href="{{ route('admin.create') }}" class="btn btn-sm btn-secondary"><i class="ti-plus"> Tambah Data</i></a>
                            </div>

                            <div class="table-stats order-table ov-h">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Admin</th>
                                            <th>E-mail</th>
                                            <th>No Telpon</th>
                                            <th>Jabatan</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach($data as $tampil)
                                    <tbody>
                                        <tr>
                                            <td>{{$tampil->KdAdmin }}</td>
                                            <td>{{$tampil->NamaAdmin }}</td>
                                            <td>{{$tampil->Email }}</td>
                                            <td>{{$tampil->NoTlp }}</td>
                                            <td>{{$tampil->Jabatan }}</td>
                                            <td>
                                                        <a class="btn btn-primary btn-sm" href="{{route('admin.edit',$tampil->id)}}"><i class="fa fa-edit"></i></a>
                                                        <a class="btn btn-danger btn-sm" href="{{ route('admin.destroy', $tampil->id) }}" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                    @endforeach
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>

@endsection