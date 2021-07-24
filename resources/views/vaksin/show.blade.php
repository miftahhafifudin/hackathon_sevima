@extends('layouts.app')

@section('content')

    <h1>LIST PENDAFTAR</h1>
    
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">NIK</th>
                <th scope="col">Email</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Riwayat Penyakit</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 0;
            @endphp
            @foreach ($vaksin as $vaksins)
            @php
                $no++;
            @endphp
            <tr>
                <th scope="row">{{$no;}}</th>
                <td>{{ $vaksins['nama'] }}</td>
                <td>{{ $vaksins['nik'] }}</td>
                <td>{{ $vaksins['email'] }}</td>
                <td>{{ $vaksins['no_telp'] }}</td>
                <td>{{ $vaksins['tgl_lahir'] }}</td>
                <td>{{ $vaksins['riwayat_penyakit'] }}</td>
                <td><form action="{{ route('vaksin.delete', $vaksins) }}" method="post" class="mr-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">delete</button>
                    </form>
                    
                    <form action="{{ route('vaksin.update', $vaksins) }}" method="post" class="mr-1">
                        @csrf
                        @method('get')
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
            </tr>    
            @endforeach
        </tbody>
    </table>
</div>
@endsection
    

