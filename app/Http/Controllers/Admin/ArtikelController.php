<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ArtikelRequest;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function artikel()
    {
        $artikel = Artikel::all();

        return view('Admin.Artikel.artikel', [
            'artikel'   => $artikel,
        ]);
    }

    public function baruartikel()
    {
        return view('Admin.Artikel.tambahartikel');
    }

    public function addartikel(ArtikelRequest $request)
    {
        // dd($request->all());

        Artikel::create([
            'judul_artikel'                => $request->judul_artikel,
            'foto_artikel'                 => $request->file('foto_artikel')->store('img-artikel'),
            'artikel'                      => $request->artikel,
        ]);

        return redirect()->route('artikel.index')->with('Ok', "Artikel $request->judul_artikel berhasil disimpan");
    }

    public function hapusartikel(Request $request)
    {
        $artikel = Artikel::findOrFail($request->id);  // Cari data
        Storage::delete($artikel->foto_artikel); // Hapus file directory system
        $artikel->delete(); // Hapus data di database
        return redirect()->back();
    }
}
