<?php

namespace App\Http\Controllers;

use App\Http\Requests\BukuTamuRequest;
use App\Models\BukuTamu;
use Illuminate\Http\Request;

class BukutamuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
        $this->middleware('userfilter')->except(['index', 'search', 'edit', 'update']);
    }

    public function index()
    {
        date_default_timezone_set('Asia/Jakarta');

        $bukuTamu = BukuTamu::orderBy('tanggal', 'desc')->paginate(10);

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

        if($request->kepentingan == 'Melihat Informasi'){
            return redirect('/');
        }
        else{
            return redirect()->route('donasi.create');
        }

    }
    public function edit($id){
        $data = [
            'buku_tamu' => BukuTamu::find($id)
        ];
        return view('pages_user.buku_tamu.edit', $data);
    }
    public function update(Request $request, $id){
        $buku_tamu = BukuTamu::find($id);

        $buku_tamu->update($request->all());

        return redirect(route('tamu.index'))->with('success', 'Edit buku tamu sukses');
    }
    public function search(Request $request){
        $keyword = $request->keyword;
        if(trim($keyword) == ''){
            return redirect(route('tamu.index'));
        }
        else{
            $bukuTamu = BukuTamu::where('nama', 'like','%'.$keyword.'%')
                ->orWhere('alamat', 'like', '%'.$keyword.'%')
                ->orWhere('tanggal', 'like', '%'.$keyword.'%')
                ->paginate(10);
            return view('pages_user.buku_tamu.index')->with('buku_tamu', $bukuTamu);
        }
    }
}
