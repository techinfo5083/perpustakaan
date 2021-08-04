<?php

namespace App\Http\Livewire\Anggota;

use Livewire\Component;
use App\Models\Anggota;
use Livewire\WithPagination;
use PhpParser\Node\Expr\FuncCall;

class AnggotaIndex extends Component
{
    use WithPagination;

    public $paginate = 3;
    public $search;
    public $statusUpdate = false;
    public $statusButton = false;
    
    protected $listeners = [
        'loadDataAnggota',
        'statusUpdate'
    ];

    public function render()
    {
        $anggota = $this->search === null ?
            anggota::latest()->paginate($this->paginate) :
            anggota::where('nama_anggota', 'like', '%' . $this->search . '%')->paginate($this->paginate);
        $data = [
            'anggota' => $anggota,
            'currentPage' => $anggota->currentPage()
        ];
        return view('livewire.anggota.anggota-index', $data);
    }

    public function loadDataAnggota($anggota)
    {

    }

    public function statusUpdate()
    {
        $this->statusUpdate = false;
    }

    public function statusButtonTrue()
    {
        $this->statusButton = true;
    }

    public function statusButtonFalse()
    {
        $this->statusButton = false;
    }

    public function getAnggotaID($id)
    {
        $this->statusUpdate = true;
        $anggota = Anggota::find($id);
        $this->emit('getAnggota', $anggota);
    }

    public function destroy($id)
    {
        if($id){
            Anggota::find($id)->delete();
        }
    }
}
