<div>
    <div class="container">
        @if($statusButton == false)
            <button wire:click="statusButtonTrue" class="btn btn-primary mb-2">Tambah Anggota</button>
        @else
            <button wire:click="statusButtonFalse" class="btn btn-danger mb-2">Sembunyikan</button>
        @endif
    </div>

    @if($statusButton)
        @if($statusUpdate)
        @livewire('anggota.edit-anggota')
        @else
        @livewire('anggota.create-anggota')
        @endif
    @endif
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                Data Anggota
            </div>
            <div class="card-body">
                <div class="row mb-2">
                    <div class="col-sm-8">
                        <select wire:model="paginate" name="" id="" class="form-control form-control-sm w-auto">
                            <option value="5">5</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" wire:model="search" name="" id="" class="form-control form-control-sm" placeholder="Search Nama Anggota...">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr class="text-center">
                            <th>#</th>
                            <th>Nama Anggota</th>
                            <th>Jenis Kelamin</th>
                            <th>Jurusan</th>
                            <th>No Telp</th>
                            <th>Alamat Anggota</th>
                            <th>Aksi</th>
                        </tr>

                        @php
                            $i = 1 + ($paginate * ($currentPage - 1));
                        @endphp
                        @foreach($anggota as $agt)
                            <tr class="text-center">
                                <td>{{ $i }}</td>
                                <td>{{ $agt['nama_anggota'] }}</td>
                                <td>{{ $agt['jk'] }}</td>
                                <td>{{ $agt['jurusan'] }}</td>
                                <td>{{ $agt['no_telp'] }}</td>
                                <td>{{ $agt['alamat_anggota'] }}</td>
                                <td>
                                    <button wire:click="destroy({{ $agt['id'] }})" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    <button wire:click="getAnggotaID({{ $agt['id'] }})" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                                </td>
                            </tr>
                            @php
                                $i++
                            @endphp
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
