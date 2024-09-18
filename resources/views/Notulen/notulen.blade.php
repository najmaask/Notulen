@extends('layout.master')
@section('content')

    <title>Notulen</title>

                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title"> Data Notulen</strong>                                    

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
                                <a href="{{ route('notulen.create') }}" class=" btn btn-sm btn-secondary"><i class="ti-plus"> Tambah Data</i></a>
                            </div>

                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Judul</th>
                                            <th>Tanggal</th>
                                            <th>Peserta</th>
                                            <th>Isi Notulen</th>
                                            <th>Penulis</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach($data as $tampil)
                                    <tbody>
                                        <tr>
                                            <td>{{$tampil->KdNotulen }}</td>
                                            <td>{{$tampil->JudulNotulen }}</td>
                                            <td>{{$tampil->TglNotulen }}</td>
                                            <td>{{$tampil->NamaAnggota }}</td>
                                            <td>{{$tampil->IsiNotulen }}</td>
                                            <td>{{$tampil->NamaAdmin }}</td>
                                            <td>
                                                    <a class="btn btn-primary btn-sm" href="{{route('notulen.edit',$tampil->id)}}"><i class="fa fa-edit"></i></a>
                                                    <a class="btn btn-danger btn-sm" href="{{ route('notulen.destroy', $tampil->id) }}" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                    @endforeach
                                </table>
                            </div> <!-- /.table-stats -->
                        </div>
                    </div>

                    


@endsection