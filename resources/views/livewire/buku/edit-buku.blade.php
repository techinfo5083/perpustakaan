<div>
    <div class="container-fluid">
        <form wire:submit.prevent="update">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Edit Buku
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Kode Buku</label>
                                <input wire:model="kode_buku" name="kode_buku" type="text" class="form-control @error('kode_buku') is-invalid @enderror">
                                @error('kode_buku')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kategori</label>
                                <select wire:model="kategori_id" name="kategori_id" class="form-control" id="exampleFormControlSelect1">
                                    <option value="-">---Pilih Kategori---</option>
                                    @foreach($kategori as $ktgr)
                                    <option value="{{ $ktgr['id'] }}">{{ $ktgr['nama_kategori'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">Judul Buku</label>
                                <input wire:model="judul_buku" name="judul_buku" type="text" class="form-control @error('judul_buku') is-invalid @enderror">
                                @error('judul_buku')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Penulis</label>
                                <input wire:model="penulis" name="penulis" type="text" class="form-control @error('penulis') is-invalid @enderror">
                                @error('penulis')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            Edit Buku
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="">Penerbit</label>
                                <input wire:model="penerbit" type="text" name="penerbit" id="" class="form-control @error('penerbit') is-invalid @enderror">
                                @error('penerbit')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Tahun Terbit</label>
                                <input wire:model="tahun_penerbit" type="text" name="tahun_penerbit" id="" class="form-control @error('tahun-penerbit') is-invalid @enderror">
                                @error('tahun_penerbit')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Stok</label>
                                <input wire:model="stok" type="text" name="stok" id="" class="form-control @error('stok') is-invalid @enderror">
                                @error('stok')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button wire:click="statusUpdate" class="btn btn-danger">Batal</button>
                            <button type="submit" class="btn btn-primary">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
