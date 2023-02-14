<?php

namespace App\Http\Livewire;

use App\Models\Produk;
use Livewire\Component;

class ProdukTable extends Component
{
    protected $listeners = ['produkStore' => 'render'];

    public function render()
    {
        return view('livewire.produk-table', [
            'produk' => Produk::orderBy('created_at', 'asc')->get(),
        ]);
    }

    public function delete($id)
    {
        $produk = Produk::find($id);
        $produk->delete();

        session()->flash('success', 'Produk Berhasil dihapus!');
    }
}
