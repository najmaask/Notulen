@extends('layout.master')
@section('content')
<title>Anggota</title>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Tambah</strong> Data Anggota
                            </div>
                            <div class="card-body card-block">
                                <form method="POST" action="{{route ('anggota.store')}}">
                                            {{csrf_field()}}
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Anggota</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="KdAnggota" placeholder="Kode Anggota" class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Anggota</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="NamaAnggota" placeholder="Nama Anggota" class="form-control" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status</label></div>
                                        <div class="col-12 col-md-9">
                                            <select class="form-control" name="Status" required>
                                                            <option>Pilih Status</option>
                                                            @foreach($status as $stat)
                                                            <option value="{{$stat->id}}">{{$stat->Status}}</option>
                                                            @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
@endsection