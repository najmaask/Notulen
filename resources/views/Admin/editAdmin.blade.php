@extends('layout.master')
@section('content')
<title>Admin</title>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Edit</strong> Data Admin
                            </div>
                            <div class="card-body card-block">
                                @foreach($data as $datas)
                                <form  method="POST" action="{{ route('admin.update',$datas->id) }}">
                                            {{csrf_field()}}
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Admin</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="KdAdmin" placeholder="Kode Admin" class="form-control" value="{{$datas->KdAdmin}}" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Admin</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="NamaAdmin" placeholder="Nama Admin" class="form-control" value="{{$datas->NamaAdmin}}" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">E-mail</label></div>
                                        <div class="col-12 col-md-9"><input type="email" id="text-input" name="Email" placeholder="E-mail" class="form-control" value="{{$datas->Email}}" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">No Telpon</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="NoTlp" placeholder="No Telpon" class="form-control" value="{{$datas->NoTlp}}" required></div>
                                    </div>
                                    <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Jabatan</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" name="Jabatan">
                                                        <option value="{{$datas->Jabatan}}">{{$datas->Jabatan}}</option>
                                                        @foreach($jabatan as $jab)
                                                        <option value="{{$jab->id}}">{{$jab->Jabatan}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                    </div>

                                    <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
                                </form>
                                @endforeach
                            </div>
                        </div>

@endsection