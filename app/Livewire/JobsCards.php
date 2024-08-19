<?php

namespace App\Livewire;

use App\Models\ListaTrabajos;
use App\Models\tab_trabajos_por_categ;
use Livewire\Component;

class JobsCards extends Component
{
    public $mostrarBoton = false;
    public $id;
    public $orden;
    public $categoria;
    public $trabajos;

    public function mount($id, $categoria, $orden)
    {
        $this->id = $id;
        $this->categoria = $categoria;
        $this->orden = $orden;

        $this->trabajos = tab_trabajos_por_categ::orderBy('id', 'desc')->where('id_categoria', $id)->get();

        // Si la categoría es "sound designer", mostrar el botón
        if ($categoria === "Sound Designer") {
            $this->mostrarBoton = true;
        }
    }

    public function render()
    {
        $par = $this->orden % 2 === 0;

        return view(
            'livewire.jobs-cards', [
                'bg' => $par ? 'bg-negro' : 'bg-black',
            ]);
    }
}
