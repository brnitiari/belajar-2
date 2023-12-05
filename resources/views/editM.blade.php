<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Edit Mahasiswa</title>
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Edit Mahasiswa</h1>
                <hr>
                <form action="{{ route('mahasiswas.update', ['mahasiswa' => $mahasiswa->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="NIM">NIM</label>
                        <input type="text" id="NIM" name="NIM"
                            value="{{ old('NIM') ?? $mahasiswa->NIM }}"
                            class="form-control @error('NIM') is-invalid @enderror">
                        @error('NIM')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Nama">Nama</label>
                        <input type="text" id="Nama" name="Nama"
                            value="{{ old('Nama') ?? $mahasiswa->Nama }}"
                            class="form-control @error('Nama') is-invalid @enderror">
                        @error('Nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="User">User</label>
                        <input type="text" id="User" name="User"
                            value="{{ old('User') ?? $mahasiswa->User }}"
                            class="form-control @error('User') is-invalid @enderror">
                        @error('User')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    

                    <div class="mb-3">
                        <label class="form-label" for="Password">Password</label>
                        <input type="text" id="Password" name="Password"
                            value="{{ old('Password') ?? $mahasiswa->Password }}"
                            class="form-control @error('Password') is-invalid @enderror">
                        @error('Password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Jurusan">jurusan</label>
                        <input type="text" id="jurusan" name="Jurusan"
                            value="{{ old('Jurusan') ?? $mahasiswa->Jurusan }}"
                            class="form-control @error('Jurusan') is-invalid @enderror">
                        @error('Jurusan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Prodi">Prodi</label>
                        <input type="text" id="Prodi" name="Prodi"
                            value="{{ old('Prodi') ?? $mahasiswa->Prodi }}"
                            class="form-control @error('Prodi') is-invalid @enderror">
                        @error('Prodi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Kelas">Kelas</label>
                        <input type="text" id="Kelas" name="Kelas"
                            value="{{ old('Kelas') ?? $mahasiswa>Kelas }}"
                            class="form-control @error('Kelas') is-invalid @enderror">
                        @error('Kelas')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary mb-2">UPDATE</button>
                    <a href="{{ url()->previous() }}" class="btn btn-success mb-2">BACK</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
