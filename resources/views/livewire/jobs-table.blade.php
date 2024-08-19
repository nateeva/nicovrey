<div class="px-4 mx-auto mb-12 md:px-16 lg:px-24 max-w-screen-2xl">
    <h2 class="text-3xl font-semibold text-center uppercase md:text-start py-9 md:text-4xl font-roboto text-blanco">
        Panel de Administración</h2>

    <div class="flex justify-end">
        @livewire('create-modal')
    </div>

    <div class="">
        @if($trabajos->isNotEmpty())
        {{-- <table class="flex flex-row flex-no-wrap w-full my-5 overflow-hidden rounded-lg sm:bg-white sm:shadow-lg">

            <thead class="text-white">
                <tr
                    class="flex flex-col mb-2 rounded-l-lg text-negro bg-rosa flex-no wrap sm:table-row sm:rounded-none sm:mb-0">
                    <th class="p-3 text-left">Título</th>
                    <th class="p-3 text-left">Descripción</th>
                    <th class="p-3 text-left">Categoría</th>
                    <th class="p-3 text-left lg:w-[100px]">Año</th>
                    <th class="p-3 text-left w-[110px]">Acciones</th>
                </tr>
            </thead>

            <tbody class="flex-1 sm:flex-none">
                @foreach ($trabajos as $trabajo)
                <tr class="flex flex-col mb-2 overflow-x-auto flex-no wrap sm:table-row sm:mb-0">
                    <td class="p-3 bg-white border border-grey-light">
                        @if ($trabajo->titulo)
                        {{ $trabajo->titulo }}
                        @else
                        -
                        @endif
                    </td>
                    <td class="p-3 truncate bg-white border border-grey-light">
                        @if ($trabajo->descripcion)
                        {{ $trabajo->descripcion }}
                        @else
                        -
                        @endif
                    </td>
                    <td class="p-3 bg-white border border-grey-light">
                        @if ($trabajo->categorias)
                        {{ $trabajo->categorias }}
                        @else
                        -
                        @endif
                    </td>
                    <td class="p-3 truncate bg-white border border-grey-light">
                        @if ($trabajo->anio_publicacion)
                        {{ $trabajo->anio_publicacion }}
                        @else
                        -
                        @endif
                    </td>
                    <td
                        class="truncate bg-white border h-[52px] md:p-3 border-grey-light flex items-center justify-evenly">
                        @livewire('editarmodal',['id' => $trabajo->id], key(uniqid()))

                        @livewire('deletemodal',['id' => $trabajo->id, 'trabajo' => $trabajo->titulo],
                        key(uniqid()))

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table> --}}

        <div class="my-4 max-w-8xl">
            <div class="justify-between hidden w-full font-bold text-black border-b border-gray-300 lg:flex bg-rosa">
                <div class="lg:w-[400px] py-3 pl-4">Título</div>
                <div class="lg:w-[400px] py-3">Descripción</div>
                <div class="py-3 lg:w-56">Categoría</div>
                <div class="py-3 lg:w-28">Año</div>
                <div class="py-3 lg:w-28">Acciones</div>
            </div>

            @foreach ($trabajos as $trabajo)

            <div class="items-center justify-between mt-4 bg-white border lg:mt-0 lg:flex">

                <div class="lg:w-[400px] text-start flex lg:py-2 border-b lg:border-b-transparent">
                    <div class="w-[35%] font-bold lg:hidden bg-rosa p-2">Título</div>
                    <div class="w-[70%] lg:w-full p-2 lg:pl-4">

                        @if ($trabajo->titulo)
                        {{ $trabajo->titulo }}
                        @else
                        -
                        @endif
                    </div>
                </div>
                <div class="lg:w-[400px] text-start flex lg:py-2 border-b lg:border-b-transparent">
                    <div class="w-[35%] font-bold lg:hidden bg-rosa p-2">Descripción</div>
                    <div class="w-[70%] lg:w-full p-2 lg:p-0">

                        @if ($trabajo->descripcion)
                        {{ $trabajo->descripcion }}
                        @else
                        -
                        @endif
                    </div>
                </div>
                <div class="flex border-b lg:py-2 lg:w-56 text-start lg:border-b-transparent">
                    <div class="w-[35%] font-bold lg:hidden bg-rosa p-2">Categoría</div>
                    <div class="w-[70%] lg:w-full p-2 lg:p-0">

                        @if ($trabajo->categorias)
                        {{ $trabajo->categorias }}
                        @else
                        -
                        @endif
                    </div>
                </div>
                <div class="flex border-b lg:py-2 lg:w-28 text-start lg:border-b-transparent">
                    <div class="w-[35%]  font-bold lg:hidden bg-rosa p-2">Año</div>
                    <div class="w-[70%] p-2 lg:p-0">

                        @if ($trabajo->anio_publicacion)
                        {{ $trabajo->anio_publicacion }}
                        @else
                        -
                        @endif
                    </div>
                </div>

                <div class="flex lg:py-2 lg:w-28 text-start">
                    <div class="w-[35%]  font-bold lg:hidden bg-rosa p-2">Acciones</div>
                    <div class="w-[70%] p-2 lg:ml-0 flex gap-4">

                       @livewire('editarmodal',['id' => $trabajo->id], key(uniqid()))

                        @livewire('deletemodal',['id' => $trabajo->id, 'trabajo' => $trabajo->titulo],
                        key(uniqid()))
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        {{$trabajos->links()}}
        @else
        <p class="text-xl text-blanco font-varela">
            No hay trabajos que mostrar actualmente
        </p>
        @endif
    </div>

    <style>
        @media (min-width: 640px) {
            table {
                display: inline-table !important;
            }

            thead tr:not(:first-child) {
                display: none;
            }
        }

        td:not(:last-child) {
            border-bottom: 0;
        }

        th:not(:last-child) {
            border-bottom: 2px solid rgba(0, 0, 0, .1);
        }
    </style>
</div>
