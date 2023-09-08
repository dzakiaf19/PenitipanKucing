@extends('components.main', [
    'namePage' => 'Dashboard',
])
@section('title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <div class="panel-header panel-header-sm">
    </div>
    <div class="content">
        <div class="row">
            <div class="col-md">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Edit Data Kucing</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('updateKucing',$kucing->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nama Kucing</label>
                                        <input type="text" value="{{$kucing->nama_kucing}}" name="nama_kucing"
                                            class="form-control" placeholder="Nama Kucing"  required>
                                    </div>
                                </div>
                                <div class="col-md-4 pl-3">
                                    <div class="form-group">
                                        <label>Pemilik</label>
                                        <input type="text" name="pemilik"
                                            class="form-control" placeholder="Nama Pemilik" value="{{$kucing->pemilik}}" required>
                                    </div>
                                </div>
                                <div class="col-md-4 pl-3">
                                    <div class="form-group">
                                        <label>Warna</label>
                                        <input type="text" name="warna"
                                            class="form-control" placeholder="Warna" value="{{$kucing->warna}}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row pt-3">
                                <div class="col-md-4 pl-3">
                                    <div class="form-group">
                                        <label>Tanggal Titip</label>
                                        <input type="date" class="form-control" value="{{$kucing->tanggal_titip}}" name="tanggal_titip">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-3">
                                    <div class="form-group">
                                        <label>Tanggal Pulang</label>
                                        <input type="date" class="form-control" value="{{$kucing->tanggal_pulang}}" name="tanggal_pulang">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-3">
                                    <div class="form-goup">
                                        <label>gambar</label>
                                        <input type="file" class="form-control"
                                            name="gambar">
                                    </div>
                                </div>
                            </div>
                            <div class="row pt-3">
                                <div class="col-md-5" >
                                        <img class="img-thumbnail" style="max-width: 250px; max-height: 250px;" src="{{ asset('images/' . $kucing->gambar) }}">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-5 ">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection