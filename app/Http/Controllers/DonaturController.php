<?php

namespace App\Http\Controllers;

use App\Http\Requests\DonaturRequest;
use App\Models\Donatur;
use Illuminate\Http\Request;

class DonaturController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
        $this->middleware('userfilter')->except(['index', 'search', 'edit', 'update']);
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
                'status'     => $request->status,
                'ttl'        => $request->tempat_lahir.', '.$request->tanggal_lahir,
                'pekerjaan'  => $request->pekerjaan,
                'tanggal'    => $request->tanggal,
            ]);
        }

        return redirect()->route('tamu.create');
    }
    public function edit($id){
        $data = [
            'donatur' => Donatur::find($id)
        ];

        return view('pages_user.donatur.edit', $data);
    }
    public function update(Request $request, $id){
        $donatur = Donatur::find($id);
        $donatur->update([
            'status' => $request->status,
            'ttl' => $request->tempat_lahir.', '.$request->tanggal_lahir,
            'pekerjaan' => $request->pekerjaan,
            'tanggal' => $request->tanggal
        ]);
        return redirect(route('donatur.index'))->with('success', 'Donatur berhasil diedit');
    }
    public function search(Request $request){
        $keyword = $request->keyword;
        if(trim($keyword) == ''){
            return redirect(route('donatur.index'));
        }
        else{
            $donatur = Donatur::leftJoin('users', 'users.id', '=', 'donatur.user_id')
                ->where('users.admin', '=',false)
                ->where('users.nama', 'like', '%'.$keyword.'%')
                ->orWhere('donatur.status','like', '%'.$keyword.'%')
                ->orWhere('donatur.ttl', 'like', '%'.$keyword.'%')
                ->orWhere('users.no_telepon', 'like', '%'.$keyword.'%')
                ->orWhere('donatur.pekerjaan', 'like', '%'.$keyword.'%')
                ->orWhere('donatur.tanggal', 'like', '%'.$keyword.'%')
                ->select('donatur.id', 'donatur.status', 'donatur.ttl', 'donatur.pekerjaan', 'donatur.tanggal', 'donatur.user_id')
                ->paginate(10);
            return view('pages_user.donatur.index')->with('donatur', $donatur);
        }
    }
}
