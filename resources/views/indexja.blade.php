<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/sihadir.css') }}" rel="stylesheet" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
   <div class="container mt-3">
        <div class="row">
            <div class="col-12">
            <div class="py-4 d-flex justify-content-between align-items-center">
                    <h2>Jadwal</h2>
                    <a href="{{ route('jadwaladmins.createja') }}" class="btn btn-primary">Isi Jadwal</a>
                </div>
                @if (session()->has('pesan'))
                    <div class="alert alert-success">{{ session()->get('pesan') }}</div>
                @endif
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Id_Jadwal</th>
                            <th>Id_Kelas</th>
                            <th>Matakuliah</th>
                            <th>NIP</th>
                            <th>Jam_Mulai</th>
                            <th>Jam_Berakhir</th>
                            <th>Tanggal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jadwaladmins as $jadwaladmin)
                            <tr>
                                <th>{{ $loop     ->iteration }}</th>
                                <td>{{ $jadwaladmin ->Id_Jadwal }}</td>
                                <td>{{ $jadwaladmin ->Id_Kelas }}</td>
                                <td>{{ $jadwaladmin ->Matakuliah }}</td>
                                <td>{{ $jadwaladmin ->NIP }}</td>
                                <td>{{ $jadwaladmin ->Jam_Mulai }}</td>
                                <td>{{ $jadwaladmin ->Jam_Berakhir }}</td>
                                <td>{{ $jadwaladmin ->Tanggal }}</td>
                                <td>
                                <form method="POST"
                                        action="{{ route('jadwaladmins.destroyja', ['jadwaladmin' => $jadwaladmin->id]) }}">
                                        @method('DELETE')
                                        @csrf
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            role="button">DELETE</button>
                                          <a class="btn btn-success btn-sm"
                                            href="{{ url('/registeds' . $jadwaladmin->id) . '/edit' }}"
                                            role="button">EDIT</a>    
                                        <a class="btn btn-info btn-sm" href="{{ url('/mahasiswas/show') }}"
                                            role="button">DETAIL</a>
                                      
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="10" class="text-center">Tidak ada data...</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    
  
</body>
</html>
   