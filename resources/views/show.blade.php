<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Data {{ $registed->Nama }}</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3">
                    <h1 class="h2">Data {{ $registed->Nama }}</h1>
                </div>
                <hr>
                <ul>
                    <li>NIP:   {{ $registed->NIP }}</li>
                    <li>Nama :   {{ $registed->Nama }}</li>
                    <li>User:  {{ $registed->User}}</li>
                    <li>Password         {{ $registed->Password }}</li>
                    
                </ul>
                <a href="{{ url()->previous() }}" class="btn btn-success">BACK</a>
            </div>
        </div>
    </div>
</body>
</html>