<?php

namespace App\Livewire;

use App\Models\ListaTrabajos;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class JobsTable extends Component
{
    use WithPagination;


    #[On('reset-lista')]
    public function ResetPaginacion(){
        $this->resetPage();
    }

    #[On('actualiz-lista-trabajos')]
    public function render()
    {
        $trabajos = ListaTrabajos::orderBy('id', 'desc')->paginate(5);
        return view('livewire.jobs-table', ['trabajos'=>$trabajos]);
    }
}
