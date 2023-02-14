<?php

namespace App\Http\Livewire;

use App\Models\Karyawan;
use Livewire\Component;

class KaryawanTabel2 extends Component
{
    public $count = 3;

    public function render()
    {
        $karyawan = Karyawan::take($this->count)->get();
        $totalKaryawan = Karyawan::count();

        return view('livewire.karyawan-tabel2', [
            'karyawan' => $karyawan,
            'totalKaryawan' => $totalKaryawan,
        ]);
    }

    public function loadMore()
    {
        $this->count += 3;
        sleep(1);
    }
}
