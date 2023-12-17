<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\Tb_produk;
use App\Models\Tb_kategori;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    function index()
    {
        $produk = Produk::all();
        if (Auth::id()) {
            $role = Auth::user()->role;

            if ($role == 'user') {
                $produk = Produk::all();
                return view('frontpage.landingpage', compact('produk'));
            } else if ($role == 'admin') {
                $kategori = Produk::all();
                $produk = Produk::all();
                return view('backpage.admin', compact('kategori', 'produk'));
            }
        } else {
            return view('frontpage.landingpage', compact('produk'));
            // return view('welcome');
        }
    }

    function index2()
    {
        return view('frontpage.landingpromo', ['title' => "Landing Promo"]);
    }

    function index3()
    {
        return view('frontpage.landingwishlist', ['title' => "Landing Wishlist"]);
    }

    function index4()
    {
        $item = Produk::find(1);
        return view('frontpage.landinguts', compact('item'));
    }
}
