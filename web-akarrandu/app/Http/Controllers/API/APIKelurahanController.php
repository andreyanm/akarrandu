<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Kelurahan;

class APIKelurahanController extends Controller
{
    //
    public function list()
    {
    
        $kelurahan = Kelurahan::all();
        return response()->json([
            'success' => true,
            'data' => $kelurahan,
            'message' => 'Data sukses',
        ]);     
    }

    public function show($id)
    {
    
        $getKecamatan = Kecamatan::find($id);
        $kelurahan = Kelurahan::where('kecamatan_id', $getKecamatan->id)->get();
        return response()->json([
            'success' => true,
            'data' => $kelurahan,
            'message' => 'Data sukses',
        ]); 
        
    }
}
