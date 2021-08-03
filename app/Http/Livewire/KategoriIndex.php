<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Kategori;
use Livewire\WithPagination;

class KategoriIndex extends Component
{
    use WithPagination;

     public $paginate = 3;
     public $search;
     public $statusUpdate = false;

     protected $listeners = [
        'loadDataKategori',
        'statusUpdate'
     ];

    public function render()
    {
        $kategori = $this->search === null ?
            Kategori::latest()->paginate($this->paginate) :
            Kategori::where('kode_kategori', 'like', '%' . $this->search . '%')->paginate($this->paginate);
        $data = [
            'kategori' => $kategori,
            'currentPage' => $kategori->currentPage()
        ];
        return view('livewire.kategori-index', $data);
    }

    public function loadDataKategori($kategori)
    {

    }

    public function statusUpdate()
    {
        $this->statusUpdate = false;
    }

    public function getKategoriID($id)
    {
        $this->statusUpdate = true;
        $kategori = Kategori::find($id);
        $this->emit('getKategori', $kategori);
    }

    public function destroy($id)
    {
        if ($id) {
            Kategori::find($id)->delete();
        }
        // session()->flash('message', 'Data was Deleted');
    }
}
