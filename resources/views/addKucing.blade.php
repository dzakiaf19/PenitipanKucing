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
                        <h5 class="title">Tambah Data Kucing</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Nama Kucing</label>
                                        <input type="text" name="nama_kucing"
                                            class="form-control" placeholder="Nama Kucing" value="{{ old('nama_kucing') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4 pl-3">
                                    <div class="form-group">
                                        <label>Pemilik</label>
                                        <input type="text" name="pemilik"
                                            class="form-control" placeholder="Nama Pemilik" value="{{ old('nama_kucing') }}" required>
                                    </div>
                                </div>
                                <div class="col-md-4 pl-3">
                                    <div class="form-group">
                                        <label>Warna</label>
                                        <input type="text" name="warna"
                                            class="form-control" placeholder="Warna" value="{{ old('nama_kucing') }}" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row pt-3">
                                <div class="col-md-4 pl-3">
                                    <div class="form-group">
                                        <label>Tanggal Titip</label>
                                        <input type="date" class="form-control" name="tanggal_titip">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-3">
                                    <div class="form-group">
                                        <label>Tanggal Pulang</label>
                                        <input type="date" class="form-control" name="tanggal_pulang">
                                    </div>
                                </div>
                                <div class="col-md-4 pl-3">
                                    <div class="form-goup">
                                        <label>gambar</label>
                                        <input accept="image/png, image/gif, image/jpeg" type="file" class="form-control @error('gambar') is-invalid @enderror"
                                            name="gambar">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-5 ">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection