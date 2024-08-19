<x-layout>
    <x-slot:title>Trabajos</x-slot:title>
<section>
    @foreach($categorias as $categoria)
        @livewire('jobs-cards', ['orden' => $categoria->orden, 'id' => $categoria->id, 'categoria' => $categoria->categoria])
    @endforeach
</section>
</x-layout>
