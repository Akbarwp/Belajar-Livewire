<div class="card">
    <div class="card-body">
        <form action="" method="post" wire:submit.prevent="update">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Produk: </label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" wire:model="nama" id="nama" placeholder="Masukkan nama produk .....">
                @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="satuan" class="form-label">Satuan: </label>
                <input type="text" class="form-control @error('satuan') is-invalid @enderror" wire:model="satuan" id="satuan" placeholder="Masukkan satuan produk .....">
                @error('satuan')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="hrg_beli" class="form-label">Harga Beli: </label>
                <input type="number" class="form-control @error('hrg_beli') is-invalid @enderror" wire:model="hrg_beli" id="hrg_beli" placeholder="Masukkan harga beli .....">
                @error('hrg_beli')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="hrg_jual" class="form-label">Harga Jual: </label>
                <input type="number" class="form-control @error('hrg_jual') is-invalid @enderror" wire:model="hrg_jual" id="hrg_jual" placeholder="Masukkan harga jual .....">
                @error('hrg_jual')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-warning">Ubah</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
</div>
