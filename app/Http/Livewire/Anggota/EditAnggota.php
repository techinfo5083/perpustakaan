<?php

namespace App\Http\Livewire\Anggota;

use Livewire\Component;
use App\Models\Anggota;

class EditAnggota extends Component
{
    public $nama_anggota;
    public $jk;
    public $jurusan;
    public $no_telp;
    public $alamat_anggota;
    public $anggotaID;

    protected $listeners = [
        'getAnggota'
    ];

    public function render()
    {
        return view('livewire.anggota.edit-anggota');
    }

    public function getAnggota($anggota)
    {
        $this->nama_anggota     = $anggota['nama_anggota'];
        $this->jk               = $anggota['jk'];
        $this->jurusan          = $anggota['jurusan'];
        $this->no_telp          = $anggota['no_telp'];
        $this->alamat_anggota   = $anggota['alamat_anggota'];
        $this->anggotaID        = $anggota['id'];
    }

    private function clearInput()
    {
        $this->nama_anggota     = null;
        $this->jk               = null;
        $this->jurusan          = null;
        $this->no_telp          = null;
        $this->alamat_anggota   = null;
    }

    public function update()
    {
        $this->validate([
            'nama_anggota'      => 'required',
            'jk'                => 'required',
            'jurusan'           => 'required',
            'no_telp'           => 'required|numeric|digits:12',
            'alamat_anggota'    => 'required'
        ]);

        if($this->anggotaID){
            $anggota = Anggota::find($this->anggotaID);
            $anggota->update([
                'nama_anggota'      => $this->nama_anggota,
                'jk'                => $this->jk,
                'jurusan'           => $this->jurusan,
                'no_telp'           => $this->no_telp,
                'alamat_anggota'    => $this->alamat_anggota
            ]);

            $this->clearInput();
            $this->emit('loadDataAnggota', $anggota);
            $this->statusUpdate();
        }
    }

    public function statusUpdate()
    {
        $this->emit('statusUpdate');
    }
}
