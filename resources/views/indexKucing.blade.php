@extends('components.main', [
    'namePage' => 'Dashboard',
])
@section('title', 'Tambah Data Kucing')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tabel Kucing</h1>
    <p class="mb-4">Berikut data penitipan kucing</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="{{ route('addKucing') }}"><button class="btn btn-primary border-0 p-2"> <i
                class="now-ui-icons ui-1_simple-add"></i>Tambah
            data</button></a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Kucing</th>
                            {{-- <th>Warna</th> --}}
                            <th>Pemilik</th>
                            <th>Tanggal Datang</th>
                            <th>Tanggal Pulang</th>
                            {{-- <th>Gambar</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kucing as $kcg)
                        <tr>
                            <td>{{$kcg->nama_kucing}}</td>
                            {{-- <td>{{$kcg->warna}}</td> --}}
                            <td>{{$kcg->pemilik}}</td>
                            <td>{{$kcg->tanggal_titip}}</td>
                            <td>{{$kcg->tanggal_pulang}}</td>
                            {{-- <td><img src="{{ asset('images/' . $kcg->gambar) }}" alt="" srcset="" width="100"></td> --}}
                            <td class="text-right">
                                <div class="aksi">
                                    <a href="{{url('editKucing',$kcg->id)}}" class="btn btn-info btn-circle">
                                        <i class="fas fa-info-circle"></i>
                                    </a>
                                    <a href="deleteKucing/{{ $kcg->id }}" class="btn btn-danger btn-circle">
                                        <i class="  fas fa-trash"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
