<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonasiRequest;
use App\Models\Buku;
use App\Models\BukuTamu;
use App\Models\Dana;
use App\Models\Donasi;
use App\Models\Donatur;
use App\Models\GNJ;
use App\Models\Sembako;
use App\Models\Snack;
use PDF;
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

    public function userDonation(){
        $donasi = auth()->user()->Donasi->paginate(10);

        return view();
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

            $donasi = new Donasi();
            $donasi->user_id = auth()->user()->id;
            $donasi->nama_donatur = $request->nama_donatur;
            $donasi->nama_penerima = $request->nama_penerima;
            $donasi->alamat = $request->alamat;
            $donasi->no_telepon = $request->no_telepon;
            $donasi->jenis_donasi = $request->jenis_donasi;
            $donasi->jumlah_donasi = $request->jumlah_donasi.' '.$request->format_jumlah;
            $donasi->bukti_donasi = $newFilename;
            $donasi->tanggal = $request->tanggal;
            $donasi->save();

            if($request->jenis_donasi == 'GNJ'){
                $gnj = new GNJ();
                $gnj->jenis_gnj = $request->jenis_nasi;
                $gnj->tambahan_donasi = $request->tambahan_donasi_gnj;
                $donasi->GNJ()->save($gnj);
            }
            if($request->jenis_donasi == 'Snack'){
                $snack = new Snack();
                $snack->jenis_snack = $request->jenis_snack;
                $snack->tambahan_donasi = $request->tambahan_donasi_snack;
                $donasi->Snack()->save($snack);
            }
            if($request->jenis_donasi == 'Sembako'){
                $sembako = new Sembako();
                $sembako->jenis_sembako = $request->jenis_sembako;
                $sembako->tambahan_donasi = $request->tambahan_donasi_sembako;
                $donasi->Sembako()->save($sembako);
            }
            if($request->jenis_donasi == 'Buku'){
                $buku = new Buku();
                $buku->jenis_buku = $request->jenis_buku;
                $buku->keterangan = $request->keterangan;
                $donasi->Buku()->save($buku);
            }
            if($request->jenis_donasi == 'Dana'){
                $dana = new Dana();
                $dana->jumlah_dana = $request->jumlah_dana;
                $dana->bank_rekening = $request->bank_rekening;
                $donasi->Dana()->save($dana);
            }
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

    public function detail(Donasi $donasi){
        return view('pages_user.donasi.donasi-detail', ['donasi' => $donasi]);
    }

    public function cetak(Donasi $donasi){
        $pdf = PDF::loadView('laporan', $donasi);
        return $pdf->download('laporan_serah_terima_donasi.pdf');
    }
}
