@extends('layouts.app')
@section('content')
<div class="container">
    <h1>LIST STATISTIK</h1>
    </div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Provinsi</th>
                <th scope="col">Positif</th>
                <th scope="col">Kasus Sembuh</th>
                <th scope="col">Kasus Meniggal</th>
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
                <td>{{ $datas['attributes']['Provinsi'] }}</td>
                <td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
                <td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
                <td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
            </tr>    
            @endforeach
        </tbody>
    </table>
</div>
@endsection
    

