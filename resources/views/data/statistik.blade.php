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
                    <th scope="col">Provinsi</th>
                    <th scope="col">Positif</th>
                    <th scope="col">Kasus Sembuh</th>
                    <th scope="col">Kasus Meniggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $datas)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $datas['attributes']['Provinsi'] }}</td>
                    <td>{{ $datas['attributes']['Kasus_Posi'] }}</td>
                    <td>{{ $datas['attributes']['Kasus_Semb'] }}</td>
                    <td>{{ $datas['attributes']['Kasus_Meni'] }}</td>
                </tr>    
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>