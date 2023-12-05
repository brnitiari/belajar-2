<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Data {{ $absen->Id }}</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3">
                    <h1 class="h2">Data {{ $absen->Id }}</h1>
                </div>
                <hr>
                <ul>
                    <li>Hadir:   {{ $absen->Hadir }}</li>
                    <li>Sakit :   {{ $absen->Sakit }}</li>
                    <li>Izin :   {{ $absen->Izin }}</li>
                    
                </ul>
                <a href="{{ url()->previous() }}" class="btn btn-success">BACK</a>
            </div>
        </div>
    </div>
</body>
</html>