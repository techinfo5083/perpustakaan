<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                @if($statusUpdate)
                @livewire('edit-kategori')
                @else
                @livewire('create-kategori')
                @endif
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Data Kategori
                    </div>
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-2">
                                <select wire:model="paginate" name="" id="" class="form-control form-control-sm w-auto">
                                    <option value="3">3</option>
                                    <option value="5">5</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                            <div class="col-sm-10">
                                <input type="text" wire:model="search" name="" id="" class="form-control form-control-sm" placeholder="Search...">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tr class="text-center">
                                    <th>#</th>
                                    <th>Kode Kategori</th>
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>

                                <?php $i = 1 + ($paginate * ($currentPage - 1)); ?>
                                @foreach($kategori as $ktgr)
                                <tr class="text-center">
                                    <td>{{ $i }}</td>
                                    <td>{{ $ktgr['kode_kategori'] }}</td>
                                    <td>{{ $ktgr['nama_kategori'] }}</td>
                                    <td>
                                        <button wire:click="destroy({{ $ktgr['id'] }})" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        <buttto wire:click="getKategoriID({{ $ktgr['id'] }})" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></buttto>
                                    </td>
                                </tr>
                                @php
                                    $i++
                                @endphp
                                @endforeach
                            </table>
                            {{ $kategori->links() }}
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</div>
