<?php

namespace App\Http\Livewire\Buku;

use Livewire\Component;
use App\Models\Kategori;
use App\Models\Buku;

class CreateBuku extends Component
{
    public $kode_buku;
    public $kategori_id;
    public $judul_buku;
    public $penulis;
    public $penerbit;
    public $tahun_penerbit;
    public $stok;

    public function render()
    {
        $data = [
            'kategori' => Kategori::latest()->get()
        ];
        return view('livewire.buku.create-buku', $data);
    }

    private function clearInput()
    {
        $this->kode_buku        = null;
        $this->kategori_id      = null;
        $this->judul_buku       = null;
        $this->penulis          = null ;
        $this->penerbit         = null ;
        $this->tahun_penerbit   = null ;
        $this->stok             = null ;
    }

    public function store()
    {
        $this->validate([
            'kode_buku'         => 'required',
            'kategori_id'       => 'required',
            'judul_buku'        => 'required',
            'penulis'           => 'required',
            'penerbit'          => 'required',
            'tahun_penerbit'    => 'required',
            'stok'              => 'required|numeric'
        ]);

        $buku = buku::create([
            'kode_buku'     => $this->kode_buku,
            'kategori_id'       => $this->kategori_id,
            'judul_buku'        => $this->judul_buku,
            'penulis'           => $this->penulis,
            'penerbit'          => $this->penerbit,
            'tahun_penerbit'    => $this->tahun_penerbit,
            'stok'              => $this->stok
        ]);

        $this->clearInput();
        $this->emit('loadDataBuku', $buku);
    }
}
