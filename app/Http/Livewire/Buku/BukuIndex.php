<?php

namespace App\Http\Livewire\Buku;

use Livewire\Component;
use App\Models\Buku;
use Illuminate\Support\Facades\DB;

class BukuIndex extends Component
{
    public $paginate = 5;
    public $search;
    public $statusUpdate = false;

    protected $listeners = [
        'loadDataBuku',
        'statusUpdate'
    ];

    public function render()
    {
        $buku = $this->search === null ?
            DB::table('buku')
            ->join('kategori', 'buku.kategori_id', '=', 'kategori.id')
            ->select('buku.*', 'kategori.kode_kategori', 'kategori.nama_kategori')
            ->paginate($this->paginate):
            DB::table('buku')
            ->join('kategori', 'buku.kategori_id', '=', 'kategori.id')
            ->select('buku.*', 'kategori.kode_kategori', 'kategori.nama_kategori')
            ->where('judul_buku', 'like', '%' . $this->search . '%')->paginate($this->paginate);

        $data = [
            'buku' => $buku,
            'currentPage' => $buku->currentPage()
        ];
        return view('livewire.buku.buku-index', $data);
    }

    public function loadDataBuku($buku)
    {

    }

    public function statusUpdate()
    {
        $this->statusUpdate = false;
    }

    public function getBukuID($id)
    {
        $this->statusUpdate = true;
        $buku = Buku::find($id);
        $this->emit('getBuku',$buku);
    }
}
