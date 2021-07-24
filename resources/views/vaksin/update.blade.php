@extends('layouts.app')

@section('content')
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    
    <form action="{{route('vaksin')}}" method="post" class="mb-4">
        @csrf
        <div class="form-group">
            <label for="nik">NIK</label>
            <input type="text" name="nik" class="form-control" id="nik" placeholder="Masukkan nik">
        </div>
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" placeholder="Masukkan Nama">
        </div>
        <div class="form-group">
            <label for="no_telp">Nomer Telepon</label>
            <input type="text" name="no_telp" class="form-control" id="no_telp" placeholder="Masukkan no_telp">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email" placeholder="Masukkan email">
        </div>
        <div class="form-group">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" class="form-control" id="tgl_lahir" placeholder="Masukkan umur">
        </div>
        <div class="form-group">
            <label for="riwayat_penyakit">Riwayat Penyakit</label>
            <input type="text" name="riwayat_penyakit" class="form-control" id="riwayat_penyakit" placeholder="Masukkan riwayat">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection