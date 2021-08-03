<?php

namespace App\Http\Livewire\Buku;

use Livewire\Component;
use App\Models\Buku;
use App\Models\Kategori;

class EditBuku extends Component
{
    public $kode_buku;
    public $kategori_id;
    public $judul_buku;
    public $penulis;
    public $penerbit;
    public $tahun_penerbit;
    public $stok;
    public $bukuID;

    protected $listeners = [
        'getBuku'
    ];

    public function render()
    {
         $data = [
            'kategori' => Kategori::latest()->get()
        ];
        return view('livewire.buku.edit-buku', $data);
    }

    public function getBuku($buku)
    {
        $this->kode_buku        = $buku['kode_buku'];
        $this->kategori_id      = $buku['kategori_id'];
        $this->judul_buku       = $buku['judul_buku'];
        $this->penulis          = $buku['penulis'];
        $this->penerbit         = $buku['penerbit'];
        $this->tahun_penerbit   = $buku['tahun_penerbit'];
        $this->stok             = $buku['stok'];
        $this->bukuID           = $buku['id'];
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

    public function update()
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

        if($this->bukuID){
            $buku = buku::find($this->bukuID);
            $buku->update([
                'kode_buku'         => $this->kode_buku,
                'kategori_id'       => $this->kategori_id,
                'judul_buku'        => $this->judul_buku,
                'penulis'           => $this->penulis,
                'penerbit'          => $this->penerbit,
                'tahun_penerbit'    => $this->tahun_penerbit,
                'stok'              => $this->stok
            ]);
        }

        $this->clearInput();
        $this->emit('loadDataBuku', $buku);
        $this->statusUpdate();
    }

    public function statusUpdate()
    {
        $this->emit('statusUpdate');
    }
}
