<div>
     {{-- @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> {{ session('message') }} .
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif --}}
    
    <div class="card">
        <div class="card-header">
            Edit Kategori
        </div>
        <div class="card-body">
            <form wire:submit.prevent="update">
                <input type="hidden" wire:model="kategoryID">
                <div class="form-group">
                    <label for="kd">Kode Kategori</label>
                    <input type="text" wire:model="kode_kategori" id="kd" class="form-control @error('kode_kategori') is-invalid @enderror">
                    @error('kode_kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nm">Nama Kategori</label>
                    <input type="text" wire:model="nama_kategori" id="nm" class="form-control @error('nama_kategori') is-invalid @enderror">
                    @error('nama_kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button wire:click="statusUpdate" type="reset" class="btn btn-sm btn-danger float-left">Batal</button>
                <button type="submit" class="btn btn-sm btn-primary float-right">Ubah</button>
            </form>
        </div>
    </div>
</div>