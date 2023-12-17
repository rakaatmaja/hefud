<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::all();
        return response()->json($produk, 200);
    }

    public function create()
    {
        $kategori = Kategori::all();
        $produk = Produk::all();
        return view('backpage.create', compact('kategori', 'produk'));
    }



    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'desk_produk' => 'nullable',
            'harga_produk' => 'numeric',
            'stok_produk' => 'numeric',
            'id_kategori' => 'required',
            'gambar_produk' => 'required|mimes:png,jpg',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        $fileName = time() . $request->file('gambar_produk')->getClientOriginalName();
        $path = $request->file('gambar_produk')->storeAs('gambarproduk', $fileName);

        $produk = Produk::create([
            'nama_produk' => $request->nama_produk,
            'desk_produk' => $request->desk_produk,
            'harga_produk' => $request->harga_produk,
            'stok_produk' => $request->stok_produk,
            'id_kategori' => $request->id_kategori,
            'gambar_produk' => $path,
        ]);

        return redirect('/');
    }

    public function show($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return response()->json(['error' => 'Produk not found'], 404);
        }

        return response()->json($produk, 200);
    }

    public function edit($id)
    {
        try {
            $produk = Produk::findOrFail($id);
            $kategori = Kategori::all();

            return view('backpage.edit', compact('kategori', 'produk'));
            // return response()->json(['produk' => $produk, 'kategori' => $kategori], 200);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Produk not found'], 404);
        }
    }


    public function update(Request $request, $id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return response()->json(['error' => 'Produk not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'nama_produk' => 'required',
            'desk_produk' => 'nullable',
            'harga_produk' => 'numeric',
            'stok_produk' => 'numeric',
            'id_kategori' => 'required',
            'gambar_produk' => 'nullable|mimes:png,jpg',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        if ($request->hasFile('gambar_produk')) {
            $fileName = time() . $request->file('gambar_produk')->getClientOriginalName();
            $path = $request->file('gambar_produk')->storeAs('gambarproduk', $fileName);
            $produk->gambar_produk = $path;
        }

        $produk->nama_produk = $request->nama_produk;
        $produk->desk_produk = $request->desk_produk;
        $produk->harga_produk = $request->harga_produk;
        $produk->stok_produk = $request->stok_produk;
        $produk->id_kategori = $request->id_kategori;
        $produk->save();

        return redirect('/');
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);

        if (!$produk) {
            return response()->json(['error' => 'Produk not found'], 404);
        }

        $produk->delete();

        return response()->json(['message' => 'Produk deleted successfully'], 200);
    }
    public function kategoriku($id)
    {
        //memanggil kelompok berdasarkan id_kelompok_tani
        $kategori = Kategori::where('id_kategori', $id)->first();
        //menampilkan nama kelompok pada title

        //memanggil daftar petani berdasarkan kelompok
        $produk = $kategori->produk;
        $kategori = Kategori::all();
        return view('backpage.admin', compact('produk', 'kategori'));
    }
}
