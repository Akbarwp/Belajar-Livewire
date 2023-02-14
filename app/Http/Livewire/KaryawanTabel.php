<?php

namespace App\Http\Livewire;

use App\Models\Karyawan;
use Livewire\Component;
use Livewire\WithPagination;

class KaryawanTabel extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";

    public $search = "";

    public function render()
    {
        return view('livewire.karyawan-tabel', [
            'karyawan' => Karyawan::where('nama', 'like', "%$this->search%")->orWhere('tempat_lahir', 'like', "%$this->search%")->paginate(5)
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }
}
