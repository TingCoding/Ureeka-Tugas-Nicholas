<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function adding(Request $request) {
        $buku = new Buku();
        $buku->judul = $request->judul;
        $buku->isbn = $request->isbn;
        $buku->penulis = $request->penulis;
        $buku->tahunterbit = $request->tahunterbit;

        $buku->save();
        return response()->json('Berhasil add buku');
    }
}
