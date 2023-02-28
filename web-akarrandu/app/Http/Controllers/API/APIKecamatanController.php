<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kecamatan;

class APIKecamatanController extends Controller
{
    //
    public function list()
    {
        $kecamatan = Kecamatan::all();
        if($kecamatan == null){
            return response()->json([
                'success' => true,
                'data' => null,
                'message' => 'Data sukses',
            ]);
        }else{
            return response()->json([
                'success' => true,
                'data' => $kecamatan,
                'message' => 'Data sukses',
            ]);
        }
    }
}