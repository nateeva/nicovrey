<div class="{{$bg}}">
    <div id="{{$categoria}}" class="max-w-screen-xl py-20 mx-auto text-center md:px-28 md:text-start">
        <h2 class="text-4xl font-semibold uppercase md:text-[42px] font-roboto text-blanco mb-12">{{$categoria}}</h2>
        @if($mostrarBoton)
        <div class="-mt-8">
            <a href="#contacto"
                class="text-[18px] text-center text-[#7C7C7C] hover:transition-all hover:text-rosa font-roboto">Solicitar
                reel
                por
                mail</a>
        </div>
        @endif
        <div
            class="flex flex-wrap justify-center max-w-screen-xl gap-20 mx-auto mt-12 wow animate__animated animate__fadeInLeft animate__slow">

            @foreach($trabajos as $trabajo)
            <div class="transition-all hover:-translate-y-3">
                <a href="{{$trabajo->URL}}" target="_blank">
                    <div class="w-[280px] h-[280px]">
                        <img class="w-full h-full" src="{{ asset('img/img_trabajos') . '/' . $trabajo->imagen }}"
                            alt="Tapa de {{$trabajo->titulo}}">
                    </div>
                    <div
                        class="text-white text-[18px] font-semibold font-roboto mt-3 {{$categoria === 'Sound Designer' ? 'text-center md:text-center' : 'text-start md:text-start'}} w-[280px]">
                        <h3 class="mb-2 text-blanco">{{$trabajo->titulo}}</h3>

                        <div class="text-[#7C7C7C]">
                            <p>{{$trabajo->descripcion}}</p>
                            <p>{{$trabajo->anio_publicacion}}</p>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </div>

</div>
