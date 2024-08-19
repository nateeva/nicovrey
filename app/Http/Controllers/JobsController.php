<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function jobs()
    {
        $categorias = Categorias::orderBy('orden')->get(); // Recupera todas las categorías de la tabla
        return view('pages/jobs', compact('categorias'));
    }
}
