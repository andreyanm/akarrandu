<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateWargaRequest;
use App\Http\Requests\UpdateWargaRequest;
use App\Repositories\WargaRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Warga;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Support\Facades\Auth;
use Validator;

class WargaController extends AppBaseController
{
    /** @var WargaRepository $wargaRepository*/
    private $wargaRepository;

    public function __construct(WargaRepository $wargaRepo)
    {
        $this->wargaRepository = $wargaRepo;
    }

    /**
     * Display a listing of the Warga.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $getUser = Auth::user()->id;
        $getRoles = Auth::user()->role;
        if($request->has('search')){
            if($getRoles == 1){   
            $wargas = Warga::where('users_id', $getUser)->where('nama','LIKE','%'.$request->search.'%')->paginate(5);
            }else{
            $wargas = Warga::where('nama','LIKE','%'.$request->search.'%')->paginate(5);
            }
        }else{
            if($getRoles == 1){
                $wargas = Warga::where('users_id', $getUser)->orderBy('nama','ASC')->paginate(5);
            }else{
                $wargas = Warga::orderBy('nama','ASC')->paginate(5);
            }
        }
        return view('wargas.index')
            ->with('wargas', $wargas);
    }

    /**
     * Show the form for creating a new Warga.
     *
     * @return Response
     */
    public function create()
    {
        $kecamatans = Kecamatan::pluck('nama_kecamatan','id');
        $kelurahans = Kelurahan::pluck('nama_kelurahan','id');
        return view('wargas.create',compact(
            'kecamatans',
            'kelurahans',
        ));
    }

    /**
     * Store a newly created Warga in storage.
     *
     * @param CreateWargaRequest $request
     *
     * @return Response
     */
    public function store(CreateWargaRequest $request)
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

        Flash::success('Warga saved successfully.');

        return redirect(route('wargas.index'));
    }

    /**
     * Display the specified Warga.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $warga = $this->wargaRepository->find($id);

        if (empty($warga)) {
            Flash::error('Warga not found');

            return redirect(route('wargas.index'));
        }

        return view('wargas.show')->with('warga', $warga);
    }

    /**
     * Show the form for editing the specified Warga.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $warga = $this->wargaRepository->find($id);
        $kecamatans = Kecamatan::pluck('nama_kecamatan','id');
        $kelurahans = Kelurahan::pluck('nama_kelurahan','id');

        if (empty($warga)) {
            Flash::error('Warga not found');

            return redirect(route('wargas.index'));
        }

        return view('wargas.edit',compact(
            'kecamatans',
            'kelurahans'
        ))->with('warga', $warga);
    }

    /**
     * Update the specified Warga in storage.
     *
     * @param int $id
     * @param UpdateWargaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWargaRequest $request)
    {
        $warga = $this->wargaRepository->find($id);

        if (empty($warga)) {
            Flash::error('Warga not found');

            return redirect(route('wargas.index'));
        }

        $warga = $this->wargaRepository->update($request->all(), $id);

        Flash::success('Warga updated successfully.');

        return redirect(route('wargas.index'));
    }

    /**
     * Remove the specified Warga from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $warga = $this->wargaRepository->find($id);

        if (empty($warga)) {
            Flash::error('Warga not found');

            return redirect(route('wargas.index'));
        }

        $this->wargaRepository->delete($id);

        Flash::success('Warga deleted successfully.');

        return redirect(route('wargas.index'));
    }
}
