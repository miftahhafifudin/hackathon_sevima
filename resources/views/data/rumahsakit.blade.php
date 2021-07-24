@extends('layouts.app')

@section('content')
<div class="container">
    <h1>LIST RUMAHSAKIT</h1>
    </div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Alamat</th>
                <th scope="col">Daerah</th>
                <th scope="col">No Telpon</th>
                <th scope="col">Provinsi</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 0;
            @endphp
            @foreach ($data as $datas)
            @php
                $no++;
            @endphp
            <tr>
                <th scope="row">{{$no;}}</th>
                <td>{{ $datas['name'] }}</td>
                <td>{{ $datas['address'] }}</td>
                <td>{{ $datas['region'] }}</td>
                <td>{{ $datas['phone'] }}</td>
                <td>{{ $datas['province'] }}</td>
            </tr>    
            @endforeach
        </tbody>
    </table>
</div>
@endsection
    

