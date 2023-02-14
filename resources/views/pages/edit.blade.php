@extends('layouts.app')

@push('css')
    @livewireStyles()
@endpush
@push('js')
    @livewireScripts()
@endpush

@section('container')
    <div class="mb-3">
        <a href="{{ route('produk') }}">Kembali</a>
    </div>
    
    <div>
        <h1 class="text-center mb-3">Edit Produk</h1>
        @livewire('produk-edit', [
            'produk' => $produk
        ])
    </div>
@endsection
