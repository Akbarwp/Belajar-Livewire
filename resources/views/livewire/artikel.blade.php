<div>
    <h1 class="mb-3">Halaman Komponen Artikel Livewire</h1>

    <div class="col-3">
        <label for="judul" class="fs-5 fw-bold">Judul</label>
        <input type="text" class="input-group mb-3" id="judul" wire:model="judul">

        <label for="tema" class="fs-5 fw-bold">Tema</label>
        <input type="text" class="input-group mb-3" id="tema" wire:model="tema_artikel">
    </div>

    <div class="mt-5 d-block">
        <p class="btn btn-primary d-block col-3"><span class="fw-semibold">Judul:</span> {{ $judul }}</p>
        <p class="btn btn-primary d-block col-3"><span class="fw-semibold">Tema:</span> {{ $tema_artikel }}</p>
    </div>

    <div class="mt-5">
        <ul>
            @foreach ($proses as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
</div>
