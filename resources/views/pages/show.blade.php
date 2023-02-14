@extends('layouts.app')

@section('container')
    <div class="mb-3">
        <a href="{{ route('produk') }}">Kembali</a>
    </div>

    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $produk->nama }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">{{ $produk->satuan }}</h6>
            <div class="d-flex align-items-center mb-3">
                <h6 class="me-3 text-primary">Harga Beli:</h6>
                <button class="btn btn-primary">{{ $produk->hrg_beli }}</button>
            </div>
            <div class="d-flex align-items-center">
                <h6 class="me-3 text-primary">Harga Jual:</h6>
                <button class="btn btn-secondary">{{ $produk->hrg_jual }}</button>
            </div>
        </div>
    </div>
@endsection
