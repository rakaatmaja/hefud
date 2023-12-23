<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

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
             
                $kategori = Kategori::all();
                // $produk = Produk::all();
                return view('backpage.admin', compact('kategori'));
            }
        } else {
            return view('frontpage.landingpage', compact('produk'));;
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
