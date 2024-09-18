@extends('layout.master')
@section('content')

<title>Laporan</title>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Edit</strong> Data Laporan
                            </div>
                            <div class="card-body card-block">
                                @foreach($data as $datas)
                                <form  method="POST" action="{{ route('laporan.update',$datas->id) }}">
                                            {{csrf_field()}}
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Laporan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="KdLaporan" class="form-control" value="{{$datas->KdLaporan}}" required></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Laporan</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="text-input" name="TglLaporan" class="form-control" value="{{$datas->TglLaporan}}" required></div>
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
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Isi Laporan</label></div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="done" id="textarea-input" rows="5" class="form-control" value="{{$datas->done}}" required>{{$datas->done}}</textarea>
                                            <textarea name="problem" id="textarea-input" rows="5" class="form-control" value="{{$datas->problem}}" required>{{$datas->problem}}</textarea>
                                            <textarea name="todo" id="textarea-input" rows="5" class="form-control" value="{{$datas->todo}}" required>{{$datas->todo}}</textarea>
                                        </div>
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