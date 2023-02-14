<div>
    <div class="mb-3">
        <h1>Halaman Karyawan</h1>
    </div>

    <div class="mb-3">
        <div class="input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Search</span>
            <input type="text" class="form-control" placeholder="Masukkan keyword ....." wire:model="search">
        </div>
    </div>

    <div>
        <table class="table table-primary table-hover table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tanggal Lahir</th>
                    <th scope="col">Tempat Lahir</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($karyawan as $index => $item)
                    <tr>
                        <th scope="row">{{ $index + 1 }}</th>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->tanggal_lahir }}</td>
                        <td>{{ $item->tempat_lahir }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $karyawan->links() }}
    </div>
</div>
