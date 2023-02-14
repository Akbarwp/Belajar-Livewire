<?php

namespace App\Http\Livewire;

use App\Models\Produk as ProdukModel;
use Livewire\Component;

class Produk extends Component
{
    public $nama, $satuan, $hrg_beli, $hrg_jual;

    public function render()
    {
        return view('livewire.produk');
    }

    public function store()
    {
        date_default_timezone_set('Asia/Jakarta');
        
        $this->validate([
            'nama' => 'required|string',
            'satuan' => 'required|string',
            'hrg_beli' => 'required|integer|min:1',
            'hrg_jual' => 'required|integer|min:1',
        ]);

        ProdukModel::create([
            'nama' => $this->nama,
            'satuan' => $this->satuan,
            'hrg_beli' => $this->hrg_beli,
            'hrg_jual' => $this->hrg_jual,
        ]);

        $this->nama = null; $this->satuan = null; $this->hrg_beli = null; $this->hrg_jual = null;

        session()->flash('success', 'Produk berhasil ditambahkan!');

        $this->emit('produkStore');
    }
}
