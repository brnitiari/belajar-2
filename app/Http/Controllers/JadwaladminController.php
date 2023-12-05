<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\jadwaladmin;

class JadwaladminController extends Controller
{
    public function indexja()
    {
        $jadwaladmins = Jadwaladmin::all();
        return view('indexja', ['jadwaladmins' => $jadwaladmins]);
    }

    public function createja()
    {
        return view('jadwaladmin');
    }

    public function storeja(Request $request)
    {
        $ValidateData = $request->validate([
            'Id_Jadwal'     => 'required|max:3',
            'Id_Kelas'      => 'required',
            'Matakuliah'    => 'required',
            'NIP'           => 'required|max:10',
            'Jam_Mulai'     => 'required',
            'Jam_Berakhir'  => 'required',
            'Tanggal'       => 'required',
        ]);

        Jadwaladmin::create($ValidateData);
        $request->session()->flash('pesan', "Penambahan data {$ValidateData['Id_Jadwal']} berhasil");
        return redirect()->route('jadwaladmins.indexja');
    }

    public function showja ($jadwaladmin)
    {
        
        $result = Jadwaladmin::findORFail($jadwaladmin);
        return view ("show",["jadwaladmin" => $result]);
    }

    public function editja(Jadwaladmin $jadwaladmin)
    {
        return view('edit', ['jadwaladmin' => $jadwaladmin]);
    }

    public function updateja(Request $request, Jadwaladmin $jadwaladmin)
    {
        $ValidateData = $request->validate([
            'Id_Jadwal'      => 'required' . $jadwaladmin->id,
            'Id_Kelas'      => 'required',
            'Matakuliah'     => 'required',
            'NIP' => 'required',
            'Jam_Mulai' => 'required',
            'Jam_Berakhir' => 'required',
            'Tanggal' => 'required',
        ]);

        $jadwaladmin->update($ValidateData);
        return redirect()->route('jadwaladmins.indexja', ['jadwaladmin' => $jadwaladmin->id])
            ->with('pesan', "Update data {$ValidateData['Id_Kelas']} berhasil");
    }

    public function destroyja(Jadwaladmin $jadwaladmin)
    {
        $jadwaladmin->delete();
        return redirect()->route('jadwaladmins.indexja')->with('pesan', "Hapus data $jadwaladmin->Id_Kelas berhasil");
    }
}
