<div>
    @foreach ($karyawan as $index => $item)
        <div class="card mb-3" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">{{ $item->nama }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">{{ $index + 1 }}</h6>
                <p class="card-text">{{ $item->tanggal_lahir }}</p>
                <p class="card-text">{{ $item->tempat_lahir }}</p>
            </div>
        </div>
    @endforeach
    
    @if ($count < $totalKaryawan)
        <button class="btn btn-primary mb-5" wire:click="loadMore()">Load More</button>
    @endif
    <span class="btn mb-5" wire:loading>Loading ...</span>
</div>
