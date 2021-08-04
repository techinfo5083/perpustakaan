<div>
    <div class="container-fluid">
        @if($statusUpdate)
        @livewire('buku.edit-buku')
        @else
        @livewire('buku.create-buku')
        @endif
        <div class="card">
            <div class="card-header">
                Data Buku
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
                        <input type="text" wire:model="search" name="" id="" class="form-control form-control-sm" placeholder="Search judul buku...">
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tr class="text-center">
                            <th>#</th>
                            <th>Kode Buku</th>
                            <th>kategori</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Stok</th>
                            <th>Aksi</th>
                        </tr>

                        @php
                            $i = 1 + ($paginate * ($currentPage - 1));
                        @endphp
                        @foreach($buku as $bk)
                        <tr class="text-center">
                            <td>{{ $i }}</td>
                            <td>{{  $bk->kode_buku }}</td>
                            <td>{{  $bk->kode_kategori }}</td>
                            <td>{{  $bk->judul_buku }}</td>
                            <td>{{  $bk->penulis }}</td>
                            <td>{{  $bk->penerbit }}</td>
                            <td>{{  $bk->tahun_penerbit }}</td>
                            <td>{{  $bk->stok }}</td>
                            <td>
                                <button wire:click="destroy({{ $bk->id }})" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                <button wire:click="getBukuID({{ $bk->id }})"class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></button>
                            </td>
                        </tr>
                        @php
                            $i++
                        @endphp
                        @endforeach
                    </table>
                    {{ $buku->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
