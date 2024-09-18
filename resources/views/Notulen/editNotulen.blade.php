@extends('layout.master')
@section('content')

<title>Notulen</title>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Edit</strong> Data Notulen
                            </div>
                            <div class="card-body card-block">
                                @foreach($data as $datas)
                                <form  method="POST" action="{{ route('notulen.update',$datas->id) }}">
                                            {{csrf_field()}}
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Notulen</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="KdNotulen" placeholder="Kode Notulen" class="form-control" value="{{$datas->KdNotulen}}" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Judul Notulen</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="JudulNotulen" placeholder="Judul Notulen" class="form-control" value="{{$datas->JudulNotulen}}" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Notulen</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="text-input" name="TglNotulen" placeholder="Tanggal Notulen" class="form-control" value="{{$datas->TglNotulen}}" required></div>
                                    </div>
                                    <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Peserta</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" name="KdAnggota">
                                                        <option value="{{$datas->KdAnggota}}">{{$datas->NamaAnggota}}</option>
                                                        @foreach($anggota as $ang)
                                                        <option value="{{$ang->id}}">{{$ang->NamaAnggota}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Isi Notulen</label></div>
                                        <div class="col-12 col-md-9"><textarea name="IsiNotulen" id="textarea-input" rows="9" class="form-control" value="{{$datas->IsiNotulen}}" required>{{$datas->IsiNotulen}}</textarea></div>
                                    </div>
                                    <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Penulis</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" name="KdAdmin">
                                                        <option value="{{$datas->KdAdmin}}">{{$datas->NamaAdmin}}</option>
                                                        @foreach($admin as $adm)
                                                        <option value="{{$adm->id}}">{{$adm->NamaAdmin}}</option>
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