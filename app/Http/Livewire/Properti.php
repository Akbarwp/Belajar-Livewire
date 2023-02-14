<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Properti extends Component
{
    public $nama, $gender, $kota, $password, $showPassword = false, $angka;

    public function render()
    {
        return view('livewire.properti');
    }

    public function tambah()
    {
        return $this->angka++;
    }

    public function kurang()
    {
        return $this->angka--;
    }
}
