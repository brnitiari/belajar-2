<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Data {{ $jadwaladmin->Nama }}</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
                <div class="pt-3">
                    <h1 class="h2">Data {{ $jadwaladmin->Nama }}</h1>
                </div>
                <hr>
                <ul>
                    <li>Id_Jadwal:   {{ $jadwaladmin->Id_Jadwal }}</li>
                    <li>Id_Kelas :   {{ $jadwaladmin->Id_Kelas }}</li>
                    <li>Matakuliah:  {{ $jadwaladmin->Matakuliah}}</li>
                    <li>Password         {{ $jadwaladmin-NIP }}</li>
                    <li>Jurusan:   {{ $jadwaladmin->Jam_Mulai}}</   li>
                    <li>Prodi:   {{ $jadwaladmin->Jam_Berakhir }}</li>
                    <li>Kelas:   {{ $jadwaladmin->Tanggal }}</li>
                    
                </ul>
                <a href="{{ url()->previous() }}" class="btn btn-success">BACK</a>
            </div>
        </div>
    </div>
</body>
</html>