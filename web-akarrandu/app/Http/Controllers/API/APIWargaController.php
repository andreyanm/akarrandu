<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Warga;
use Illuminate\Support\Facades\Auth;
use Validator;

class APIWargaController extends Controller
{
    public function index()
    {
        $getUser = Auth::user()->id;
        $warga = Warga::where('users_id', $getUser)->get();
        return response()->json([
            'success' => true,
            'data' => $warga,
            'message' => 'Data sukses',
        ]);   
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required|string|max:255',
            'nik' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
            'kecamatan_id' => 'required',
            'kelurahan_id' => 'required',
            'rt' => 'required',
            'rw' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());       
        }
        $warga = new Warga();
        $warga->nama = $request->nama;
        $warga->nik = $request->nik;
        $warga->nohp = $request->nohp;
        $warga->alamat = $request->alamat;
        $warga->kecamatan_id = $request->kecamatan_id;
        $warga->kelurahan_id = $request->kelurahan_id;
        $warga->rt = $request->rt;
        $warga->rw = $request->rw;
        $warga->users_id = Auth::user()->id;
        $warga->save();
        return response()->json([
            'success' => true,
            'data' => $warga,
            'message' => 'Data sukses',
        ]);   
    }
}
