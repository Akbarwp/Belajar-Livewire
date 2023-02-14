<div class="mb-5">
    <div class="properti">
        <section id="input" class="container mb-4">
            <h1 class="fs-2 fw-bold">Livewire <span class="text-primary" id="input">Input</span></h1>
            <input type="text" class="input-group rounded border-primary-subtle p-2" wire:model="nama">
            <p class="text-secondary fs-5 fw-semibold mt-2">Nama yang kamu masukkan adalah <span class="text-danger-emphasis">{{ $nama ?? '.....' }}</span></p>
        </section>

        <section id="radio" class="container mb-4">
            <h1 class="fs-2 fw-bold">Livewire <span class="text-primary" id="radio">Radio</span></h1>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="laki-laki" value="Laki-laki" wire:model="gender">
                <label class="form-check-label" for="laki-laki">
                    Laki-laki
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="gender" id="perempuan" value="Perempuan" wire:model="gender">
                <label class="form-check-label" for="perempuan">
                    Perempuan
                </label>
            </div>
            <p class="text-secondary fs-5 fw-semibold mt-2">Jenis kelamin yang kamu pilih adalah <span class="text-danger-emphasis">{{ $gender ?? '.....' }}</span></p>
        </section>

        <section id="select" class="container mb-4">
            <h1 class="fs-2 fw-bold">Livewire <span class="text-primary" id="select">Select</span></h1>
            <select class="form-select mb-3 border-danger" aria-label="Default select example" wire:model="kota">
                <option selected hidden>Pilih kota!</option>
                <option value="Sidoarjo">Sidoarjo</option>
                <option value="Surabaya">Surabaya</option>
                <option value="Malang">Malang</option>
            </select>
            <p class="text-secondary fs-5 fw-semibold mt-2">Kota yang kamu pilih adalah <span class="text-danger-emphasis">{{ $kota ?? '.....' }}</span></p>
        </section>

        <section id="input" class="container mb-4">
            <h1 class="fs-2 fw-bold">Livewire <span class="text-primary" id="checkbox">Checkbox</span></h1>
            <input @if ($showPassword == 'show') type="text" @else type="password" @endif class="input-group rounded border-success-subtle p-2 mb-2" wire:model="password">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" wire:model="showPassword">
                <label class="form-check-label" for="flexCheckDefault">Show Password</label>
            </div>
        </section>

        <section id="click" class="container mb-4">
            <h1 class="fs-2 fw-bold">Livewire <span class="text-primary" id="click">Click</span></h1>
            <p class="text-secondary fs-5 fw-semibold mt-2">Angka: <span class="text-danger-emphasis">{{ $angka ?? 0 }}</span></p>
            <button class="btn btn-primary" wire:click="tambah()">+ Tambah</button>
            @if ($angka >= 1)
                <button class="btn btn-danger" wire:click="kurang()">- Kurang</button>
            @endif
        </section>
    </div>
</div>
