<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\ImageBrand;
use App\Models\ImageProduk;
use App\Models\KategoriProduk;
use App\Models\MerkProduk;
use App\Models\Produk;
use Illuminate\Http\Request;
use Inertia\Inertia;

class FrontController extends Controller
{
    public function index()
    {

        $artikel = Artikel::all();
        // dd($produ);
        return Inertia('landing', [
            'artikel' => $artikel,
        ]);
    }

    public function brand()
    {
       $produk = Produk::with('merkproduk', 'jenisproduk')->get();
       // return $produk;

       return Inertia('brand', [
           'produk'          => $produk,
       ]);
    }

    public function MakeUp()
    {
        $produk = Produk::where('kategori_produk', 1)->get();
        // $produk = Produk::with('merkproduk')->get();

        return Inertia('makeup', [
            'produk'          => $produk,
        ]);
    }

    public function SkinCare()
    {
        $skincare = Produk::where('kategori_produk', 2)->get();

        return Inertia('skincare', [
            'skincare' => $skincare,
        ]);
    }

    public function HairCare()
    {
        $haircare = Produk::where('kategori_produk', 3)->get();

        return Inertia('haircare', [
            'haircare' => $haircare,
        ]);
    }

    public function NailCare()
    {
        $nailcare = Produk::where('kategori_produk', 5)->get();

        return Inertia('nailcare', [
            'nailcare'  => $nailcare,
        ]);
    }

    public function BodyCare()
    {
        $bodycare = Produk::where('kategori_produk', 4)->get();

        return Inertia('bodycare', [
            'bodycare'  => $bodycare,
        ]);
    }

    public function Fragrance()
    {
        $fragrance = Produk::where('kategori_produk', 6)->get();

        return Inertia('fragrance', [
            'fragrance'  => $fragrance,
        ]);
    }

    public function Artikel($id)
    {
        $artikel = Artikel::findOrFail($id);

        return Inertia('artikel', [
            'artikel' => $artikel,
        ]);
    }

    public function DetailArtikel()
    {
        $artikel = Artikel::all();
        // dd($produ);
        return Inertia('artikel', [
            'artikel' => $artikel,
        ]);
    }
}
