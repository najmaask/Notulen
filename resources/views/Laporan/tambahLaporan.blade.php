@extends('layout.master')
@section('content')
<title>Laporan</title>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Tambah</strong> Data Laporan
                            </div>
                            <div class="card-body card-block">
                                <form method="POST" action="{{ route ('laporan.store')}}">
                                            {{csrf_field()}}
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Kode Laporan</label></div>
                                        <div class="col-12 col-md-9"><input type="text" id="text-input" name="KdLaporan" placeholder="Kode Laporan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Tanggal Laporan</label></div>
                                        <div class="col-12 col-md-9"><input type="date" id="text-input" name="TglLaporan" placeholder="Tanggal Laporan" class="form-control"></div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Peserta</label></div>
                                        <div class="col-12 col-md-9">
                                            <select class="form-control" name="KdAnggota" required>
                                                            <option>Pilih Peserta</option>
                                                            @foreach($anggota as $ang)
                                                            <option value="{{$ang->id}}">{{$ang->NamaAnggota}}</option>
                                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Isi Laporan</label></div>
                                            <div class="col-3 col-md-9">
                                                <textarea name="done" id="textarea-input" rows="5" placeholder="" class="form-control">Yang sudah dikerjakan: </textarea>
                                                <textarea name="problem" id="textarea-input" rows="5" placeholder="" class="form-control">Kendala: </textarea>
                                                <textarea name="todo" id="textarea-input" rows="5" placeholder="" class="form-control">Yang akan dikerjakan: </textarea>
                                            </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Penulis</label></div>
                                        <div class="col-12 col-md-9">
                                            <select class="form-control" name="KdAdmin" required>
                                                            <option>Pilih Penulis</option>
                                                            @foreach($admin as $adm)
                                                            <option value="{{$adm->id}}">{{$adm->NamaAdmin}}</option>
                                                            @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <input type="submit" name="Simpan" value="Simpan" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
@endsection