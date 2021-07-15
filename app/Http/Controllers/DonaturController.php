<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonaturRequest;
use App\Models\Donatur;

class DonaturController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $donatur = Donatur::paginate(10);

        return view('pages_user.donatur.index')->with('donatur', $donatur);
    }

    public function create()
    {
        $id = auth()->user()->id;

        $donatur = Donatur::where('user_id', $id)->paginate(1);

        $data = ['status' => count($donatur) === 1];

        return view('pages_user.donatur.create', $data);
    }

    public function store(DonaturRequest $request)
    {
        if($request->validated()){
            Donatur::create([
                'user_id'    => auth()->user()->id,
                'nama'       => $request->nama,
                'status'     => $request->status,
                'ttl'        => $request->tempat_lahir.', '.$request->tanggal_lahir,
                'no_telepon' => $request->no_telepon,
                'pekerjaan'  => $request->pekerjaan,
                'tanggal'    => $request->tanggal,
            ]);
        }

        return redirect()->route('tamu.create');
    }
}
