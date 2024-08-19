<?php

namespace App\Livewire;

use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Deletemodal extends Component
{
    public $modalShown = false;
    public $id;
    public $trabajo;

    public function showModal()
    {
        $this->modalShown = true;
    }

    public function hideModal()
    {
        $this->modalShown = false;
    }


    public function Eliminar(){

        DB::table('trabajos')
        ->where('id', $this->id)
        ->delete();

        DB::table('tab_trabajos_categ')
        ->where('id_trabajo', $this->id)
        ->delete();
        $this->dispatch('actualiz-lista-trabajos');
        $this->dispatch('reset-lista');
        $this->hideModal();
    }



    public function render()
    {
        return view('livewire.deletemodal');
    }
}
