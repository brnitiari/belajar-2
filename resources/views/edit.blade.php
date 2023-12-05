<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/css/bootstrap.css" rel="stylesheet">
    <title>Edit Registed</title>
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Edit Registed</h1>
                <hr>
                <form action="{{ route('registeds.update', ['registed' => $registed->id]) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="NIP">NIP</label>
                        <input type="text" id="NIP" name="NIP"
                            value="{{ old('NIP') ?? $registed->NIP }}"
                            class="form-control @error('NIP') is-invalid @enderror">
                        @error('NIP')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Nama">Nama</label>
                        <input type="text" id="Nama" name="Nama"
                            value="{{ old('Nama') ?? $registed->Nama }}"
                            class="form-control @error('Nama') is-invalid @enderror">
                        @error('Nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="User">User</label>
                        <input type="text" id="User" name="User"
                            value="{{ old('User') ?? $registed->User }}"
                            class="form-control @error('User') is-invalid @enderror">
                        @error('User')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    

                    <div class="mb-3">
                        <label class="form-label" for="Password">Password</label>
                        <input type="text" id="Password" name="Password"
                            value="{{ old('Password') ?? $registed->Password }}"
                            class="form-control @error('Password') is-invalid @enderror">
                        @error('Password')
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
