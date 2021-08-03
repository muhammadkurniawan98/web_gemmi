<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonasiRequest;
use App\Models\BukuTamu;
use App\Models\Donasi;
use App\Models\Donatur;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class DonasiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $donasi = Donasi::paginate(10);

        return view('pages_user.donasi.index')->with('donasi', $donasi);
    }

    public function create()
    {
        date_default_timezone_set('Asia/Jakarta');

        $id = auth()->user()->id;

        $tanggal = date('Y-m-d');

        $donatur = Donatur::where('user_id', $id)->paginate(1);

        $tamuId = BukuTamu::where('user_id', $id)->paginate(1);

        $tamuTanggal = BukuTamu::where('tanggal', $tanggal)->paginate(1);

        $data = [
            'status_tamu' => ((count($tamuId) === 1) && (count($tamuTanggal) === 1)),
            'status_donatur' => count($donatur) === 1
        ];

        return view('pages_user.donasi.create', $data);
    }

    public function store(DonasiRequest $request)
    {
        if($request->validated()){

            $file = $request->file('bukti_donasi');

            $fileExt = $file->getClientOriginalExtension();

            $newFilename = (Str::random()).'.'.$fileExt;

            $file->move(public_path('\uploads\img'), $newFilename);

            Donasi::create([
                'user_id'        => auth()->user()->id,
                'nama_donatur'   => $request->nama_donatur,
                'nama_penerima'  => $request->nama_penerima,
                'alamat'         => $request->alamat,
                'no_telepon'     => $request->no_telepon,
                'jenis_donasi'   => $request->jenis_donasi,
                'bukti_donasi'   => $newFilename,
                'tanggal'        => $request->tanggal,
            ]);
        }

        return redirect()->route('donasi.success');
    }
    public function search(Request $request){
        $keyword = $request->keyword;
        if(trim($keyword) == ''){
            return redirect(route('donasi.index'));
        }
        else{
            $donasi = Donasi::where('nama_donatur', 'like', '%'.$keyword.'%')
                            ->orWhere('nama_penerima', 'like', '%'.$keyword.'%')
                            ->orWhere('alamat', 'like', '%'.$keyword.'%')
                            ->orWhere('no_telepon', 'like', '%'.$keyword.'%')
                            ->orWhere('jenis_donasi', 'like', '%'.$keyword.'%')
                            ->orWhere('bukti_donasi', 'like', '%'.$keyword.'%')
                            ->orWhere('tanggal', 'like', '%'.$keyword.'%')
                            ->paginate(10);
            return view('pages_user.donasi.index')->with('donasi', $donasi);
        }
    }
}
