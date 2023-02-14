<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Artikel extends Component
{
    public $judul = "Bulan Kemarin";
    public $tema_artikel = "Drama";

    public $proses = [];

    public function mount()
    {
        $this->proses[] = "Sedang di mount";
    }

    public function hydrate()
    {
        $this->proses[] = "Sedang di hydrate";
    }

    public function updating($name, $value)
    {
        $this->proses[] = "Sedang di updating => $name = $value";
    }

    public function updated($name, $value)
    {
        $this->proses[] = "Sedang di updated => $name = $value";
    }

    public function render()
    {
        $this->proses[] = "Sedang di render";
        $this->proses[] = "----------------";

        return view('livewire.artikel')->layout('layouts.master')->slot('main');
    }

    public function updatingJudul($value)
    {
        $this->proses[] = "Sedang di updatingJudul => $value";
    }

    public function updatedJudul($value)
    {
        $this->proses[] = "Sedang di updatedJudul => $value";
    }

    public function updatingTemaArtikel($value)
    {
        $this->proses[] = "Sedang di updatingTemaArtikel => $value";
    }

    public function updatedTemaArtikel($value)
    {
        $this->proses[] = "Sedang di updatedTemaArtikel => $value";
    }
}
