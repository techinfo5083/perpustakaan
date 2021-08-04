<?php

namespace App\Http\Livewire\Anggota;

use Livewire\Component;
use App\Models\Anggota;

class CreateAnggota extends Component
{
    public $nama_anggota;
    public $jk;
    public $jurusan;
    public $no_telp;
    public $alamat_anggota;

    public function render()
    {
        return view('livewire.anggota.create-anggota');
    }

    private function clearInput()
    {
        $this->nama_anggota     = null;
        $this->jk               = null;
        $this->jurusan          = null;
        $this->no_telp          = null;
        $this->alamat_anggota   = null;
    }

    public function store()
    {
        $this->validate([
            'nama_anggota'      => 'required',
            'jk'                => 'required',
            'jurusan'           => 'required',
            'no_telp'           => 'required|numeric|digits:12',
            'alamat_anggota'    => 'required'
        ]);

        $anggota = Anggota::create([
            'nama_anggota'      => $this->nama_anggota,
            'jk'                => $this->jk,
            'jurusan'           => $this->jurusan,
            'no_telp'           => $this->no_telp,
            'alamat_anggota'    => $this->alamat_anggota
        ]);

        $this->clearInput();
        $this->emit('loadDataAnggota', $anggota);
    }
}
