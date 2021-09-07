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
        $this->middleware('userfilter')->except(['index', 'search', 'detail', 'cetak', 'edit', 'update', 'donasiTerima']);
    }

    public function index()
    {
        $donasi = Donasi::paginate(10);

        return view('pages_user.donasi.index')->with('donasi', $donasi);
    }

    public function userDonation($id){
        $donasi = Donasi::where('user_id', $id)->paginate(10);

        return view('pages_user.donasi.donasi_user')->with('donasi', $donasi);
    }

    public function create()
    {
        date_default_timezone_set('Asia/Jakarta');

        $id = auth()->user()->id;

        $tanggal = date('Y-m-d');

        $donatur = Donatur::where('user_id', $id)->get();

        $tamuId = BukuTamu::where('user_id', $id)->get();

        $tamuTanggal = BukuTamu::where('tanggal', $tanggal)->get();

        $data = [
            'status_tamu' => ((count($tamuId) >= 1) && (count($tamuTanggal) >= 1)),
            'status_donatur' => count($donatur) >= 1
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
            $donasi->nama_penerima = $request->nama_penerima;
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

        return redirect()->route('donasi.index')->with('success', 'Donasi berhasil dikirim. Terima kasih telah berdonasi.');
    }
    public function edit($id){
        $data = [
            'donasi' => Donasi::find($id),
        ];

        return view('pages_user.donasi.edit', $data);
    }
    public function update(Request $request, $id){
        $donasi = Donasi::find($id);
        $donasi->update([
            'jumlah_donasi' => $request->jumlah_donasi.' '.$request->format_jumlah
        ]);
        return redirect(route('donasi.index'))->with('success', 'Donasi berhasil diedit');
    }
    public function search(Request $request){
        $keyword = $request->keyword;
        if(trim($keyword) == ''){
            return redirect(route('donasi.index'));
        }
        else{
            $donasi = Donasi::leftJoin('users', 'users.id', '=', 'donasi.user_id')
                            ->where('users.admin', '=', false)
                            ->where('users.nama', 'like', '%'.$keyword.'%')
                            ->orWhere('donasi.nama_penerima', 'like', '%'.$keyword.'%')
                            ->orWhere('users.alamat', 'like', '%'.$keyword.'%')
                            ->orWhere('users.no_telepon', 'like', '%'.$keyword.'%')
                            ->orWhere('donasi.jenis_donasi', 'like', '%'.$keyword.'%')
                            ->orWhere('donasi.bukti_donasi', 'like', '%'.$keyword.'%')
                            ->orWhere('donasi.tanggal', 'like', '%'.$keyword.'%')
                            ->select('donasi.id', 'donasi.nama_penerima', 'donasi.tanggal', 'donasi.status', 'donasi.user_id')
                            ->paginate(10);
            return view('pages_user.donasi.index')->with('donasi', $donasi);
        }
    }

    public function donasiTerima(Donasi $donasi){
        $donasi->update(['status' => 'sudah diterima']);
        return redirect(route('donasi.index'))->with('success', 'Donasi sudah diterima');
    }

    public function detail(Donasi $donasi){
        return view('pages_user.donasi.donasi-detail', ['donasi' => $donasi]);
    }

    public function cetak(Donasi $donasi){
        $pdf = PDF::loadView('laporan', ['donasi' => $donasi]);
        return $pdf->download('laporan_serah_terima_donasi.pdf');
    }

    public function cetak_rekap_semua(){
        $donasi = Donasi::all();
        $pdf = PDF::loadView('laporan_donasi_semua', ['donasi' => $donasi]);
        return $pdf->download('rekapitulasi_donasi.pdf');
    }

    public function cetak_rekap_user(){
        $donasi = auth()->user()->Donasi->all();
        $pdf = PDF::loadView('laporan_donasi_user', ['donasi' => $donasi]);
        return $pdf->download('rekapitulasi_donasi.pdf');
    }

}
