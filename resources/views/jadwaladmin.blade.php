<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>  
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <title>Input Data</title>
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Isi Jadwal</h1>
                <hr>
                <form action="{{ route('jadwaladmins.storeja') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label" for="Id_Jadwal">Jadwal</label>
                        <input type="text" id="Id_Jadwal" name="Id_Jadwal" value="{{ old('Id_Jadwal') }}"
                            class="form-control @error('Id_Jadwal') is-invalid @enderror">
                        @error('Id_Jadwal')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Id_Kelas">Kelas</label>
                        <input type="text" id="Id_Kelas" name="Id_Kelas" value="{{ old('Id_Kelas') }}"
                            class="form-control @error('Id_Kelas') is-invalid @enderror">
                        @error('Id_Kelas')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Matakuliah">Matakuliah</label>
                        <input type="text" id="Matakuliah" name="Matakuliah" value="{{ old('Matakuliah') }}"
                            class="form-control @error('Matakuliah') is-invalid @enderror">
                        @error('Matakuliah')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="NIP">NIP</label>
                        <input type="text" id="NIP" name="NIP" value="{{ old('NIP') }}"
                            class="form-control @error('NIP') is-invalid @enderror">
                        @error('NIP')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Jam_Mulai">Mulai</label>
                        <input type="text" id="Jam_Mulai" name="Jam_Mulai" value="{{ old('Jam_Mulai') }}"
                            class="form-control @error('Jam_Mulai') is-invalid @enderror">
                        @error('Jam_Mulai')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Jam_Berakhir">Selesai</label>
                        <input type="text" id="Jam_Berakhir" name="Jam_Berakhir" value="{{ old('Jam_Berakhir') }}"
                            class="form-control @error('Jam_Berakhir') is-invalid @enderror">
                        @error('Jam_Berakhir')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Tanggal">Tanggal</label>
                        <input type="text" id="Tanggal" name="Tanggal" value="{{ old('Tanggal') }}"
                            class="form-control @error('Tanggal') is-invalid @enderror">
                        @error('Tanggal')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary mb-2">SAVE</button>
                    <a href="{{ url()->previous() }}" class="btn btn-success mb-2">BACK</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>