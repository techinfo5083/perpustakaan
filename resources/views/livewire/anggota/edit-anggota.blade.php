<div>
    <div class="container-fluid">
        <form wire:submit.prevent="update">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Edit Anggota
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama Angota</label>
                                <input wire:model="nama_anggota" type="text" name="nama_anggota" id="nama" class="form-control @error('nama_anggota') is-invalid @enderror">
                                @error('nama_anggota')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select wire:model="jk" name="jk" class="form-control @error('jk') is-invalid @enderror" id="jk">
                                    <option value="-">---pilih Jenis Kelamin---</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                                @error('jk')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input wire:model="jurusan" type="text" name="jurusan" id="jurusan" class="form-control @error('jurusan') is-invalid @enderror">
                                @error('jurusan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header">
                            Tambah Anggota
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="tlp">No.Telp</label>
                                <input wire:model="no_telp" type="text" name="no_telp" id="tlp" class="form-control @error('no_telp') is-invalid @enderror">
                                @error('no_telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input wire:model="alamat_anggota" type="text" name="alamat_anggota" id="alamat" class="form-control @error('alamat_anggota') is-invalid @enderror">
                                @error('alamat_anggota')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                            <button wire:click="statusUpdate" class="btn btn-danger ">Batal</button>
                            <button class="btn btn-primary float-right">Ubah</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
