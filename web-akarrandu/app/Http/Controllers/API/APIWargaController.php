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
        $warga->load('kecamatan','kelurahan');
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
            'jenis_kelamin' => 'required',
            'nohp' => 'required',
            'alamat' => 'required',
            'kecamatan_id' => 'required',
            'kelurahan_id' => 'required',
            'rt' => 'required',
            'rw' => 'required',
        ]);
        if($validator->fails()){
            return response()->json($validator->errors());       
        }else{
            $warga = new Warga();
            $warga->nama = $request->nama;
            $warga->nik = $request->nik;
            $warga->jenis_kelamin = $request->jenis_kelamin;
            $warga->nohp = $request->nohp;
            $warga->alamat = $request->alamat;
            $warga->kecamatan_id = $request->kecamatan_id;
            $warga->kelurahan_id = $request->kelurahan_id;
            $warga->rt = $request->rt;
            $warga->rw = $request->rw;
            $warga->users_id = Auth::user()->id;
            $warga->save();
        }
        return response()->json([
            'success' => true,
            'data' => $warga,
            'message' => 'Data sukses',
        ]);   
    }

    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
            'nama' => 'required|string|max:255',
            'nik' => 'required',
            'jenis_kelamin' => 'required',
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
            $warga = Warga::find($id);
            $warga->nama = $request->nama;
            $warga->nik = $request->nik;
            $warga->jenis_kelamin = $request->jenis_kelamin;
            $warga->nohp = $request->nohp;
            $warga->alamat = $request->alamat;
            $warga->kecamatan_id = $request->kecamatan_id;
            $warga->kelurahan_id = $request->kelurahan_id;
            $warga->rt = $request->rt;
            $warga->rw = $request->rw;
            $warga->users_id = Auth::user()->id;
            $warga->update();
        return response()->json([
            'success' => true,
            'data' => $warga,
            'message' => 'Data berhasil diperbarui',
        ]);
    }

    public function delete(Request $request, $id){
        $warga = Warga::find($id);
        $warga->delete();
        return response()->json([
            'success' => true,
            'data' => $warga,
            'message' => 'Data dihapus',
        ]);
    }
}
