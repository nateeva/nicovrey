<nav class="fixed top-0 z-20 w-full bg-negro start-0 font-roboto text-blanco">
    <div class="flex justify-between px-4 mx-auto py-7 max-w-screen-2xl md:px-12">
        <div>
            <a class="flex uppercase transition-all md:gap-2 hover:text-rosa" target="_blank" href="{{route('index')}}">
               <svg xmlns="http://www.w3.org/2000/svg" class="w-8 h-6 -mt-[2px] hover:text-rosa" viewBox="0 0 24 24"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M6 18H3c-.48 0-1-.379-1-1V3c0-.481.38-1 1-1h14c.621 0 1 .522 1 1v3h3c.621 0 1 .522 1 1v14c0 .621-.522 1-1 1H6c-.48 0-1-.379-1-1zm9.259-8.11s-2.136.002-4.616.003c-.414 0-.75.336-.75.75-.001 2.479-.003 4.612-.003 4.612 0 .411.335.745.75.745.414 0 .75-.334.75-.745v-2.804l4.549 4.549c.293.293.768.293 1.061 0s.293-.768 0-1.061l-4.549-4.549h2.808c.409 0 .741-.336.741-.75s-.333-.75-.741-.75zm1.241-3.89v-2.5h-13v13h2.5v-9.5c0-.481.38-1 1-1z" />
                </svg>
                Volver
            </a>
        </div>

        <form action="{{ route('logout.process') }}" method="POST">
            @csrf
            <button class="uppercase transition-all hover:text-rosa">Hola! {{ auth()->user()->name }} (Cerrar
                Sesión)</button>
        </form>

    </div>
</nav>
