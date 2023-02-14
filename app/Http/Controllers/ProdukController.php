<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function show(Request $request)
    {
        $produk = Produk::find($request->id);
        return view('pages.show', [
            'produk' => $produk,
        ]);
    }

    public function edit(Request $request)
    {
        $produk = Produk::find($request->id);
        return view('pages.edit', [
            'produk' => $produk,
        ]);
    }
}
