<?php

namespace App\Livewire;

use App\Models\tab_trabajos_por_categ;
use Livewire\Component;

class Slider extends Component
{

    public $mostrarBoton = false;
    public $id;
    public $orden;
    public $categoria;
    public $trabajos;


      public function render()
    {
        // Obtener los trabajos de la base de datos
        
        $this->trabajos = tab_trabajos_por_categ::where('id_categoria', $this->id)->get()->toArray();

        // Mezclar los trabajos
        shuffle($this->trabajos);

        // Si la categoría es "Sound Designer", mostrar el botón
        if ($this->categoria === "Sound Designer") {
            $this->mostrarBoton = true;
        }

        return view('livewire.slider', [
            'trabajos' => $this->trabajos,
            'categoria' => $this->categoria,
            'id' => $this->id,
            'mostrarBoton' => $this->mostrarBoton,
        ]);
    }
}

