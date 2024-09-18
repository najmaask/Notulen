@extends('layout.master')
@section('content')

<title>Laporan</title>
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Data Laporan</strong>

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
                                <a href="{{ route('laporan.create') }}" class="btn btn-sm btn-secondary"><i class="ti-plus"> Tambah Data</i></a>
                            </div>

                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kode Laporan</th>
                                            <th>Tanggal Laporan</th>
                                            <th>Peserta</th>
                                            <th>Isi Laporan</th>
                                            <th>Penulis</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach($data as $tampil)
                                    <tbody>
                                        <tr>
                                            <td>{{$tampil->KdLaporan}}</td>
                                            <td>{{$tampil->TglLaporan}}</td>
                                            <td>{{$tampil->NamaAnggota}}</td>
                                            <td><li>{{$tampil->done}}</li>
                                                <li>{{$tampil->problem}}</li>
                                                <li>{{$tampil->todo}}</li>
                                            </td>
                                            <td>{{$tampil->NamaAdmin}}</td>
                                            <td>
                                                    <a class="btn btn-primary btn-sm" href="{{route('laporan.edit',$tampil->id)}}"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-danger btn-sm" href="{{ route('laporan.destroy', $tampil->id) }}" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>


@endsection