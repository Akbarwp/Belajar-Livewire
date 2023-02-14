<?php

namespace App\Http\Livewire;

use App\Models\Produk as ProdukModel;
use Livewire\Component;

class ProdukEdit extends Component
{
    public $produk_id, $nama, $satuan, $hrg_beli, $hrg_jual;

    public function render()
    {
        return view('livewire.produk-edit');
    }

    public function mount($produk)
    {
        $this->produk_id = $produk->id;
        $this->nama = $produk->nama;
        $this->satuan = $produk->satuan;
        $this->hrg_beli = $produk->hrg_beli;
        $this->hrg_jual = $produk->hrg_jual;
    }

    public function update()
    {
        date_default_timezone_set('Asia/Jakarta');
        
        $this->validate([
            'nama' => 'required|string',
            'satuan' => 'required|string',
            'hrg_beli' => 'required|integer|min:1',
            'hrg_jual' => 'required|integer|min:1',
        ]);

        ProdukModel::where('id', $this->produk_id)->update([
            'nama' => $this->nama,
            'satuan' => $this->satuan,
            'hrg_beli' => $this->hrg_beli,
            'hrg_jual' => $this->hrg_jual,
        ]);

        $this->nama = null; $this->satuan = null; $this->hrg_beli = null; $this->hrg_jual = null;

        redirect()->route('produk')->with('success', 'Produk berhasil diubah!');
    }
}
