<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/sihadir.css') }}" rel="stylesheet" >
    <title>Document</title>
</head>
<body>
<form>
<div class="bawah">
            <div class="container">
                <img src="{{ asset('image/Logo SIHADIR.png') }}" alt="Logo" class="logo1">
            </div>
            <button class="enter">{{ $mahasiswa->Nama }} </button> 
                  
</div>
<div class="samping">
<h2>Selamat Datang di SIHADIR</h2>

<table>
 <tr>
   
    <th>NIM</th>
    <th>Nama</th>
    <th>User</th>
    <th>Password</th>
    <th>Jurusan</th>
    <th>Prodi</th>
    <th>Kelas</th>
 </tr>
 <tr>
   
   <td>Semester 1</td>
    <td>Semester 1</td>
    <td>Semester 1</td>
 </tr>
 <tr>
   
    <td>Semester 2</td>
    <td>Semester 2</td>
    <td>Semester 2</td>
 </tr>
 <tr>
    
    <td>Semester 3</td>
    <td>Semester 3</td>
    <td>Semester 3</td>
 </tr>
 <tr>
   
    <td>Semester 4</td>
    <td>Semester 4</td>
    <td>Semester 4</td>
 </tr>
 <tr>
    <td>Semester 5</td>
    <td>Semester 5</td>
    <td>Semester 5</td>
 </tr>
 <tr>
    
    <td>Semester 6</td>
    <td>Semester 6</td>
    <td>Semester 6</td>
 </tr>
</table>
</div>

</form>
</body>
</html>