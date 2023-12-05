<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registed;
use App\Models\mahasiswa;
use App\Models\absensi;

class RegistedController extends Controller
{
    public function index()
    {
        $registeds = Registed::all();
        return view('index', ['registeds' => $registeds]);
        
    }

    public function create()
    {
        return view('registed');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'NIP'      => 'required',
            'Nama'      => 'required|max:200',
            'User'     => 'required',
            'Password' => 'required|min:5',
        ]);

        Registed::create($validateData);
        $request->session()->flash('pesan', "Penambahan data {$validateData['Nama']} berhasil");
        return redirect()->route('registeds.index');
    }

    public function show ($registed)
    {
        
        $result = Registed::findORFail($registed);
        return view ("show",["registed" => $result]);
    }

    public function edit(Registed $registed)
    {
        return view('edit', ['registed' => $registed]);
    }

    public function update(Request $request, Registed $registed)
    {
        $validateData = $request->validate([
            'NIP'      => 'required' . $registed->id,
            'Nama'      => 'required|max:200',
            'User'     => 'required',
            'Password' => 'required|min:5',
        ]);

        $registed->update($validateData);
        return redirect()->route('registeds.index', ['registed' => $registed->id])
            ->with('pesan', "Update data {$validateData['Nama']} berhasil");
    }

    public function destroy(Registed $registed)
    {
        $registed->delete();
        return redirect()->route('registeds.index')->with('pesan', "Hapus data $registed->Nama berhasil");
    }

    public function absen(Registed $registed)
    {
        $mahasiswas = Mahasiswa::all();
        return view('absenmahasiswa', ['mahasiswas' => $mahasiswas]);
    }
    // public function createA()
    // {
    //     return view('absensi');
    // }

    //mahasiswa
   
    public function indexM()
    {
        $mahasiswas = Mahasiswa::all();
        return view('indexM', ['mahasiswas' => $mahasiswas]);
    }
     public function createM()
    {
        return view('mahasiswa');
    }
    public function dass()
    {
        return view('indexA');
    }

    public function storeM(Request $request)
    {
        $validateDataM = $request->validate([
            'NIM'      => 'required|max:10',
            'Nama'      => 'required|max:200',
            'User'     => 'required',
            'Password' => 'required|min:5',
            'Jurusan' => 'required',
            'Prodi' => 'required',
            'Kelas' => 'required',
            // 'id_akun' => 'required'
        ]);

        Mahasiswa::create($validateDataM);
        $request->session()->flash('pesan', "{$validateDataM['Nama']} ");
        return redirect()->route('mahasiswas.indexM');
    }

    public function showM($mahasiswa)
    {
        
        $result = Mahasiswa::findORFail($mahasiswa);
        return view ("show",["mahasiswa" => $result]);
    }

    public function editM(Mahasiswa $mahasiswa)
    {
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    public function updateM(Request $request, Mahasiswa $mahasiswa)
    {
        $validateDataM = $request->validate([
            'NIM'      => 'required|max:10' . $mahasiswa->id,
            'Nama'      => 'required|max:200',
            'User'     => 'required',
            'Password' => 'required|min:5',
            'Jurusan' => 'required',
            'Prodi' => 'required',
            'Kelas' => 'requred',
        ]);

        $mahasiswa->update($validateDataM);
        return redirect()->route('mahasiswas.indexM', ['mahasiswa' => $mahasiswa->id])
            ->with('pesan', "Update data {$validateDataM['Nama']} berhasil");
    }

    public function destroyM(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.indexM')->with('pesan', "Hapus data $mahasiswa->Nama berhasil");
    }
    //absensi
    public function indexA()
    {
        $absensis = Absensi::all();
        return view('indexA', ['absensis' => $absensis]);
    }

    public function createA()
    {
        return view('absensi');
    }

    public function storeA(Request $request)
    {
        $hadir = $request->has('Hadir');
        $sakit = $request->has('Sakit');
        $izin = $request->has('Izin');
    
    Absensi::create([
        'Hadir' => $hadir,
        'Sakit' => $sakit,
        'Izin' => $izin,
        
     ]);
     $mahasiswas = Mahasiswa::all();
     return view('absenmahasiswa', ['mahasiswas' => $mahasiswas]);
    }

    public function showA ($absensi)
    {
        
        $result = Absensi::findORFail($absensi);
        return view ("show",["absensi" => $result]);
    }
}