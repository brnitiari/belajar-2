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
    <title>Input Data</title>
</head>

<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8 col-xl-6">
                <h1>Isi Absen</h1>
                <hr>
                <form action="{{ route('absensis.storeA') }}" method="post">
                    @csrf
                    <input type="checkbox" name="Hadir" value="1">Hadir
                    <br>
                    <input ty type="checkbox" name="Sakit" value="1">
                    <button >Sakit</button>
                    <br>
                    <input ty type="checkbox" name="Izin" value="1">
                    <button >Izin</button>
                    <br>

                    <button type="submit" class="btn btn-primary mb-2">Sumbit</button>
                    <a href="{{ url()->previous() }}" class="btn btn-success mb-2">Back</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>