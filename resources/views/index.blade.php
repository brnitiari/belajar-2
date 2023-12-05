<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/sihadir.css') }}" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Data</title>
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-12">
            <div class="py-4 d-flex justify-content-between align-items-center">
                    <h2>Data Dosen</h2>
                    <a href="{{ route('registeds.create') }}" class="btn btn-success btn-sm">Tambah data</a>
                    <a class="btn btn-info btn-sm" href="{{ route('mahasiswas.indexM') }}"role="button">Data Mahasiswa</a>
                </div>
                <!-- @if (session()->has('pesan'))
                    <div class="alert alert-success">{{ session()->get('pesan') }}</div>
                @endif -->
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIP</th>
                            <th>Nama</th>
                            <th>User</th>
                            <th>Password</th>
                            <th>aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($registeds as $registed)
                            <tr>
                                <th>{{ $loop     ->iteration }}</th>
                                <td>{{ $registed ->NIP }}</td>
                                <td>{{ $registed ->Nama }}</td>
                                <td>{{ $registed ->User }}</td>
                                <td>{{ $registed ->Password }}</td>
                                <td>
                                <form method="POST"
                                        action="{{ route('registeds.destroy', ['registed' => $registed->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            role="button">DELETE</button>
                                        
                                        <a class="btn btn-success btn-sm"
                                            href="{{ url('/registeds' . $registed->id) . '/edit' }}"
                                            role="button">EDIT</a>
                                        <a class="btn btn-info btn-sm" href="{{ url('/jadwaladmins') }}"
                                            role="button">JADWAL</a>    
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
    </div>


    
</body>
</html>