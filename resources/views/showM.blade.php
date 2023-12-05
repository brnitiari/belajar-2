<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/sihadir.css') }}" rel="stylesheet">
    <title>Data {{ $mahasiswa->Nama }}</title>
</head>

<body>
<div class="bawah">
            <div class="container">
                <img src="{{ asset('image/Logo SIHADIR.png') }}" alt="Logo" class="logo1">
            </div>
            <button class="enter">{{ $mahasiswa->Nama }} </button> 
                  
</div>
<div class="samping">
<h2>Selamat Datang di SIHADIR</h2>
                    <h1 class="h2">Data {{ $mahasiswa->Nama }}</h1>
                </div>
               <table>
                 <ul>
                    <li>NIM:   {{ $mahasiswa->NIM }}</li>
                    <li>Nama :   {{ $mahasiswa->Nama }}</li>
                    <li>User:  {{ $mahasiswa->User}}</li>
                    <li>Password         {{ $mahasiswa->Password }}</li>
                    <li>Jurusan:   {{ $mahasiswa->Jurusan}}</li>
                    <li>Prodi:   {{ $mahasiswa->Prodi }}</li>
                    <li>Kelas:   {{ $mahasiswa->Kelas }}</li>
                    
                </ul>
                <a href="{{ url()->previous() }}" class="btn btn-success">BACK</a>
               </table>

               
            </div>
        </div>
    </div>
</div>
</body>
</html>