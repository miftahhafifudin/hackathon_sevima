<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
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
</body>
</html>