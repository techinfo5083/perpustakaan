<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kategori;

class CreateKategori extends Component
{
    public $kode_kategori;
    public $nama_kategori;

    public function render()
    {
        return view('livewire.create-kategori');
    }

    private function ClearInput()
    {
        $this->kode_kategori = null;
        $this->nama_kategori = null;
    }

    public function store()
    {
        $this->validate([
            'kode_kategori' => 'required',
            'nama_kategori' => 'required'
        ]);

        $Kategori = Kategori::create([
            'kode_kategori' => $this->kode_kategori,
            'nama_kategori' => $this->nama_kategori
        ]);

        $this->ClearInput();
        $this->emit('loadDataKategori', $Kategori);
        // session()->flash('message', 'Kategori berhasil ditambahkan!');

    }
}
