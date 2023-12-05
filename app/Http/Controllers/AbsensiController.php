<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;

class AbsensiController extends Controller
{
    public function indexja()
    {
        $absensis = Absensi::all();
        return view('indexA', ['absensis' => $absensis]);
    }

    public function create()
    {
        return view('absensi');
    }

    public function store(Request $request)
    {
        $hadir = $request->has('Hadir');
        $sakit = $request->has('Sakit');
        $izin = $request->has('Izin');
    
    Absensi::create([
        'Hadir' => $hadir,
        'Sakit' => $sakit,
        'Izin' => $izin,
        
     ]);
    }

    public function show ($absensi)
    {
        
        $result = Absensi::findORFail($absensi);
        return view ("show",["absensi" => $result]);
    }

}
