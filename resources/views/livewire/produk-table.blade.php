<div class="container my-5">
    <table class="table table-primary table-striped table-hover">
        <thead>
            <h5>Tabel Produk</h5>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">Satuan</th>
                <th scope="col">Harga Beli</th>
                <th scope="col">Harga Jual</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produk as $index => $item)
                <tr>
                    <th scope="row">{{ $index + 1 }}</th>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->satuan }}</td>
                    <td>{{ $item->hrg_beli }}</td>
                    <td>{{ $item->hrg_jual }}</td>
                    <td>
                        <a href="/produk/{{ $item->id }}" class="btn btn-primary">Lihat</a>
                        <a href="/produk/edit/{{ $item->id }}" class="btn btn-warning">Ubah</a>
                        <button class="btn btn-danger" wire:click="delete({{ $item->id }})">Hapus</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
