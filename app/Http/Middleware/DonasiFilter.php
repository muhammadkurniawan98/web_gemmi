<?php

namespace App\Http\Middleware;

use App\Models\BukuTamu;
use App\Models\Donatur;
use Closure;
use Illuminate\Http\Request;

class DonasiFilter
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        date_default_timezone_set('Asia/Jakarta');

        $id = auth()->user()->id;

        $tanggal = date('Y-m-d');

        if(!$this->checkDonatur($id)){
            return redirect()->route('donatur.create');
        }

        if(!$this->checkBukuTamu($id, $tanggal)){
            return redirect()->route('tamu.create');
        }

        return $next($request);
    }

    public function checkDonatur($id)
    {
        $donatur = Donatur::where('user_id', $id)->paginate(1);

        return count($donatur) === 1;
    }

    public function checkBukuTamu($id, $tanggal)
    {
        $tamuId = BukuTamu::where('user_id', $id)->paginate(1);

        $tamuTanggal = BukuTamu::where('tanggal', $tanggal)->paginate(1);

        return ((count($tamuId) === 1) && (count($tamuTanggal) === 1));
    }
}
