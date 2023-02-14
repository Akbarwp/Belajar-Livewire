@extends('layouts.app')

@push('css')
    @livewireStyles()
@endpush
@push('js')
    @livewireScripts()
@endpush

@section('container')
    @if ($title == 'properti')
        @livewire('properti')
    @elseif ($title == 'produk')
        <div class="container">
            @livewire('produk')
        </div>
        <div class="container">
            @livewire('produk-table')
        </div>
    @elseif ($title == 'karyawan')
        <div class="container">
            @livewire('karyawan-tabel')
        </div>
    @elseif ($title == 'karyawan2')
        <div class="container">
            @livewire('karyawan-tabel2')
        </div>
    @endif

@endsection