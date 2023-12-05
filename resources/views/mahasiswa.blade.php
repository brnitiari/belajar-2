<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="{{ asset('css/sihadir.css') }}" rel="stylesheet">
    <title>Input Data</title>
</head>

<body>
<img src="{{ asset('image/Logo Person.png') }}" alt="Logo" class="logo">
<div class="login-container">
<img src="{{ asset('image/Logo SIHADIR.png') }}" alt="Logo" class="logoS">  
                
                <form action="{{ route('mahasiswas.storeM') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="NIM"></label>
                        <input type="text" id="NIM" name="NIM" placeholder="NIM"  value="{{ old('NIM') }}"
                            class="form-control @error('NIM') is-invalid @enderror">
                        @error('NIM')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Nama"></label>
                        <input type="text" id="Nama" name="Nama" placeholder="Nama" value="{{ old('Nama') }}"
                            class="form-control @error('Nama') is-invalid @enderror">
                        @error('Nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="User"></label>
                        <input type="text" id="User" name="User" placeholder="User"  value="{{ old('User') }}"
                            class="form-control @error('User') is-invalid @enderror">
                        @error('User')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Password"></label>
                        <input type="password" id="Password" name="Password" placeholder="password" value="{{ old('Password') }}"
                            class="form-control @error('Password') is-invalid @enderror">
                        @error('Password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Jurusan"></label>
                        <input type="text" id="Jurusan" name="Jurusan" placeholder="Jurusan"  value="{{ old('Jurusan') }}"
                            class="form-control @error('Jurusan') is-invalid @enderror">
                        @error('Jurusan')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Prodi"></label>
                        <input type="text" id="Prodi" name="Prodi" placeholder="Prodi"  value="{{ old('Prodi') }}"
                            class="form-control @error('Prodi') is-invalid @enderror">
                        @error('Prodi')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Kelas"></label>
                        <input type="text" id="Kelas" name="Kelas" placeholder="Kelas"  value="{{ old('Kelas') }}"
                            class="form-control @error('Kelas') is-invalid @enderror">
                        @error('Kelas')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- <div class="mb-3">
                        <label class="form-label" for="id_akun"></label>
                        <input type="text" id="id_akun" name="id_akun" placeholder="id_akun"  value="{{ old('id_akun') }}"
                            class="form-control @error('id_akun') is-invalid @enderror">
                        @error('id_akun')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> -->

                    <div class="center-button">
                        <input type="submit" value="Sign Up">
                    
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>

</html>