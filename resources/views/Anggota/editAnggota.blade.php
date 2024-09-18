@extends('layout.master')
@section('content')
<title>Anggota</title>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Edit</strong> Data Anggota
                            </div>
                            <div class="card-body card-block">
                                @foreach($data as $datas)
                                <form  method="POST" action="{{ route('anggota.update',$datas->id) }}">
                                            {{csrf_field()}}
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Anggota</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="KdAnggota" placeholder="Kode Anggota" class="form-control" value="{{$datas->KdAnggota}}" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama Anggota</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="NamaAnggota" placeholder="Nama Anggota" class="form-control" value="{{$datas->NamaAnggota}}" required></div>
                                    </div>
                                    <div class="row form-group">
                                                <div class="col col-md-3"><label for="text-input" class=" form-control-label">Status</label></div>
                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" name="Status">
                                                        <option value="{{$datas->Status}}">{{$datas->Status}}</option>
                                                        @foreach($status as $stat)
                                                        <option value="{{$stat->id}}">{{$stat->Status}}</option>
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