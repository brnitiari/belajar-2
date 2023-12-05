<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link href="{{ asset('css/sihadir.css') }}" rel="stylesheet" >
    
</head>

<body>
<img src="{{ asset('image/Logo Person.png') }}" alt="Logo" class="logo">
<div class="login-container">
<img src="{{ asset('image/Logo SIHADIR.png') }}" alt="Logo" class="logoS">  
        <div class="row">
            <div class="col-md-8 col-xl-6">
                
               
                <form action="{{ route('registeds.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label" for="NIP" ></label>
                        <input type="text" id="NIP" name="NIP"placeholder="NIP" value="{{ old('NIP') }}"
                            class="form-control @error('NIP') is-invalid @enderror">
                        @error('NIP')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Nama"></label>
                        <input type="text" id="Nama" name="Nama"  placeholder="Nama"value="{{ old('Nama') }}"
                            class="form-control @error('Nama') is-invalid @enderror">
                        @error('Nama')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="User" ></label>
                        <input type="text" id="User" name="User"placeholder="User" value="{{ old('User') }}"
                            class="form-control @error('User') is-invalid @enderror">
                        @error('User')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="Password"></label>
                        <input type="password" id="Password" name="Password" placeholder="Password"value="{{ old('Password') }}"
                            class="form-control @error('Password') is-invalid @enderror">
                        @error('Password')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="center-button">
                        <input type="submit" value="Sign In">
                    
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</body>

</html>