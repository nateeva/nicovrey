<div>
    <!-- Modal toggle -->
    <button wire:click="showModal">
        <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round"
            stroke-miterlimit="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
            class="w-6 h-6 text-black transition duration-300 cursor-pointer hover:scale-110">
            <path
                d="m20.015 6.506h-16v14.423c0 .591.448 1.071 1 1.071h14c.552 0 1-.48 1-1.071 0-3.905 0-14.423 0-14.423zm-5.75 2.494c.414 0 .75.336.75.75v8.5c0 .414-.336.75-.75.75s-.75-.336-.75-.75v-8.5c0-.414.336-.75.75-.75zm-4.5 0c.414 0 .75.336.75.75v8.5c0 .414-.336.75-.75.75s-.75-.336-.75-.75v-8.5c0-.414.336-.75.75-.75zm-.75-5v-1c0-.535.474-1 1-1h4c.526 0 1 .465 1 1v1h5.254c.412 0 .746.335.746.747s-.334.747-.746.747h-16.507c-.413 0-.747-.335-.747-.747s.334-.747.747-.747zm4.5 0v-.5h-3v.5z"
                fill-rule="nonzero" />
        </svg>
    </button>

    @if($modalShown)
    <!-- Main modal -->
    <div id="static-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true"
        class="bg-[#000000b0] h-[100vh] overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full max-h-full flex mt-[15px]">
        <div class="relative w-full max-w-lg max-h-full p-4">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between px-4 pt-4 rounded-t ">

                    <button wire:click="hideModal" type="button"
                        class="inline-flex items-center justify-center w-8 h-8 text-sm text-gray-400 bg-transparent rounded-lg hover:bg-gray-200 hover:text-gray-900 ms-auto dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="static-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="pb-6 text-[18px] text-center md:p-6 md:pt-0 font-varela ">
                    <svg clip-rule="evenodd" fill-rule="evenodd" stroke-linejoin="round" stroke-miterlimit="2" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg"
                        class="w-16 h-16 mx-auto mb-6 text-black transition duration-300 cursor-pointer hover:text-blue-500 hover:scale-110">
                        <path
                            d="m20.015 6.506h-16v14.423c0 .591.448 1.071 1 1.071h14c.552 0 1-.48 1-1.071 0-3.905 0-14.423 0-14.423zm-5.75 2.494c.414 0 .75.336.75.75v8.5c0 .414-.336.75-.75.75s-.75-.336-.75-.75v-8.5c0-.414.336-.75.75-.75zm-4.5 0c.414 0 .75.336.75.75v8.5c0 .414-.336.75-.75.75s-.75-.336-.75-.75v-8.5c0-.414.336-.75.75-.75zm-.75-5v-1c0-.535.474-1 1-1h4c.526 0 1 .465 1 1v1h5.254c.412 0 .746.335.746.747s-.334.747-.746.747h-16.507c-.413 0-.747-.335-.747-.747s.334-.747.747-.747zm4.5 0v-.5h-3v.5z"
                            fill-rule="nonzero" />
                    </svg>
                        <p>Estas por eliminar el registro <span class="block font-bold">{{$trabajo}}</span></p>
                        <p>¿Deseas continuar?</p>
                </div>
                <!-- Modal footer -->
                <div class="flex justify-center gap-2 py-6 border-t border-gray-200 rounded-b">
                    <button wire:click="hideModal" type="button"
                        class="py-2 text-base font-medium text-[#aaaaaa] uppercase transition-all duration-200 border-2 rounded hover:scale-110 px-7 font-roboto border-[#aaaaaa]  ">Cancelar</button>
                    <button wire:click="Eliminar" type="button"
                        class="py-2 text-base font-medium text-black uppercase transition-all duration-200 border-2 border-black rounded hover:scale-110 px-7 font-roboto ">
                        Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>
