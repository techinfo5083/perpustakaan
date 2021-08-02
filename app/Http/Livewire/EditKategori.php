<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kategori;

class EditKategori extends Component
{
    public $kode_kategori;
    public $nama_kategori;
    public $kategoriID;

    protected $listeners = [
        'getKategori'
    ];

    public function render()
    {
        return view('livewire.edit-kategori');
    }

    public function getKategori($kategori)
    {
        $this->kode_kategori = $kategori['kode_kategori'];
        $this->nama_kategori = $kategori['nama_kategori'];
        $this->kategoriID    = $kategori['id'];
    }

    private function ClearInput()
    {
        $this->kode_kategori = null;
        $this->nama_kategori = null;
    }

    public function update()
    {
        $this->validate([
            'kode_kategori' => 'required',
            'nama_kategori' => 'required'
        ]);

        if ($this->kategoriID) {
            $Kategori = Kategori::find($this->kategoriID);
            $Kategori->update([
                'kode_kategori' => $this->kode_kategori,
                'nama_kategori' => $this->nama_kategori
            ]);
        }

        $this->ClearInput();
        $this->emit('loadDataKategori', $Kategori);
        $this->statusUpdate();
    }

    public function statusUpdate()
    {
        $this->emit('statusUpdate');
    }
}
