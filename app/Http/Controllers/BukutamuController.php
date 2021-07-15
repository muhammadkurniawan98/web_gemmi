<?php

namespace App\Http\Controllers;

use App\Http\Requests\BukuTamuRequest;
use App\Models\BukuTamu;

class BukutamuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');

        $bukuTamu = BukuTamu::where('tanggal', date('Y-m-d'))->paginate(10);

        return view('pages_user.buku_tamu.index')->with('buku_tamu', $bukuTamu);
    }

    public function create()
    {
        date_default_timezone_set('Asia/Jakarta');

        $id = auth()->user()->id;

        $tanggal = date('Y-m-d');

        $tamuId = BukuTamu::where('user_id', $id)->paginate(1);

        $tamuTanggal = BukuTamu::where('tanggal', $tanggal)->paginate(1);

        $data = ['status' => ((count($tamuId) === 1) && (count($tamuTanggal) === 1))];

        return view('pages_user.buku_tamu.create', $data);
    }

    public function store(BukuTamuRequest $request)
    {
        if($request->validated()){
            BukuTamu::create([
                'user_id'           => auth()->user()->id,
                'nama'              => $request->nama,
                'alamat'            => $request->alamat,
                'tanggal'           => $request->tanggal,
            ]);
        }

        return redirect()->route('tamu.success');
    }
}
