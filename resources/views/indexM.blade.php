<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset('css/sihadir.css') }}" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<!-- <div class="bawah">
            <div class="container">
                <img src="{{ asset('image/Logo SIHADIR.png') }}" alt="Logo" class="logo1">
            </div>
            <button class="enter">profile</button> 
                  
</div> -->
<!-- <div class="samping"> -->
<!-- <h2>Selamat Datang di SIHADIR</h2> -->
                    <h2>Data Mahasiswa</h2>
                    <a href="{{ route('mahasiswas.create') }}" class="btn btn-primary">Tambah data</a>
                </div>
                @if (session()->has('pesan'))
                    <div class="alert alert-success">{{ session()->get('pesan') }}</div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>User</th>
                            <th>Password</th>
                            <th>Jurusan</th>
                            <th>Prodi</th>
                            <th>Kelas</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($mahasiswas as $mahasiswa)
                            <tr>
                                <th>{{ $loop     ->iteration }}</th>
                                <td>{{ $mahasiswa ->NIM }}</td>
                                <td>{{ $mahasiswa ->Nama }}</td>
                                <td>{{ $mahasiswa ->User }}</td>
                                <td>{{ $mahasiswa ->Password }}</td>
                                <td>{{ $mahasiswa ->Jurusan }}</td>
                                <td>{{ $mahasiswa ->Prodi }}</td>
                                <td>{{ $mahasiswa ->Kelas }}</td>
                                <td>
                                <form method="POST"
                                        action="{{ route('mahasiswas.destroy', ['mahasiswa' => $mahasiswa->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            role="button">DELETE</button>
                                        <a class="btn btn-info btn-sm" href="{{ url('/absensis') }}"
                                            role="button">rekap</a>
                                        <a class="btn btn-success btn-sm"
                                            href="{{ url('/mahasiswas' . $mahasiswa->id) . '/edit' }}"
                                            role="button">EDIT</a>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="6" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    <!-- </div>   -->
</body>
</html>
