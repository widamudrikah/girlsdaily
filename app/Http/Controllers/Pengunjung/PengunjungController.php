<?php

namespace App\Http\Controllers\Pengunjung;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use App\Models\Komentar;
use App\Models\MerkProduk;
use App\Models\Produk;
use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class PengunjungController extends Controller
{
    public function GirlDaily()
    {
        $produk       = Produk::count();
        $user         = User::count();
        $review       = Review::count();
        $komentar     = Komentar::count();
        $merk_produk  = MerkProduk::count();
        
        return view('template.index',[
            'produk'          => $produk,
            'user'            => $user,
            'review'          => $review,
            'komentar'        => $komentar,
            'merk_produk'     => $merk_produk,
        ]);

    }
}
