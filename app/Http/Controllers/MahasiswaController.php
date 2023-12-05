<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function indexM()
    {
        $mahasiswas = Mahasiswa::all();
        return view('indexM', ['mahasiswas' => $mahasiswas]);
    }

    public function create()
    {
        return view('mahasiswa');
    }
    public function dass()
    {
        
    }

    public function store(Request $request)
    {
        $validateDataM = $request->validate([
            'NIM'      => 'required|max:10',
            'Nama'      => 'required|max:200',
            'User'     => 'required',
            'Password' => 'required|min:5',
            'Jurusan' => 'required',
            'Prodi' => 'required',
            'Kelas' => 'required',
        ]);

        Mahasiswa::create($validateDataM);
        $request->session()->flash('pesan', "{$validateDataM['Nama']} ");
        return redirect()->route('mahasiswas.indexM');
    }

    public function show ($mahasiswa)
    {
        
        $result = Mahasiswa::findORFail($mahasiswa);
        return view ("show",["mahasiswa" => $result]);
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('edit', ['mahasiswa' => $mahasiswa]);
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
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

    public function destroy(Mahasiswa $mahasiswa)
    {
        $mahasiswa->delete();
        return redirect()->route('mahasiswas.indexM')->with('pesan', "Hapus data $mahasiswa->Nama berhasil");
    }
}
