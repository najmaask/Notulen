@extends('layout.master')
@section('content')
<title>Anggota</title>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"> Data Anggota</strong>

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
                                <a href="{{ route('anggota.create') }}" class="btn btn-sm btn-secondary"><i class="ti-plus"> Tambah Data</i></a>
                            </div>

                            <div class="table-stats order-table ov-h">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nama Anggota</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach($data as $tampil)
                                    <tbody>
                                        <tr>
                                            <td>{{$tampil->KdAnggota }}</td>
                                            <td>{{$tampil->NamaAnggota }}</td>
                                            <td>{{$tampil->Status }}</td>
                                            <td>
                                                    <a class="btn btn-primary btn-sm" href="{{route('anggota.edit',$tampil->id)}}"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-danger btn-sm" href="{{ route('anggota.destroy', $tampil->id) }}" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                    @endforeach
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>

@endsection