<x-layout>
    <x-slot:title>Inicio</x-slot:title>
    @livewire('banner')

    <section>
        @livewire('about')
    </section>


    <section>
        @foreach($categorias as $categoria)
            @livewire('slider', ['orden' => $categoria->orden, 'id' => $categoria->id, 'categoria' => $categoria->categoria], key(uniqid()))
        @endforeach
    </section>
</x-layout>
