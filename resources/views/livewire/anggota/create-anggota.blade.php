<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">
                        Tambah Anggota
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="store">
                            <div class="form-group">
                                <label for="nama">Nama Angota</label>
                                <input wire:model="nama_anggota" type="text" name="nama_anggota" id="nama" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="jk">Jenis Kelamin</label>
                                <select wire:model="jk" name="jk" class="form-control" id="jk">
                                    <option value="-">---pilih Jenis Kelamin---</option>
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="jurusan">Jurusan</label>
                                <input wire:model="jurusan" type="text" name="jurusan" id="jurusan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="tlp">No.Telp</label>
                                <input wire:model="no_telp" type="text" name="no_telp" id="tlp" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input wire:model="alamat_anggota" type="text" name="alamat_anggota" id="alamat" class="form-control">
                            </div>

                            <button wire:click="" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            <button wire:click="" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
