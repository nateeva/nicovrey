<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- FONTS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&family=Varela+Round&display=swap"
        rel="stylesheet">

    @vite('resources/css/app.css')
    <title>Crear Cuenta</title>
</head>

<body class="bg-black">

    <div class="flex flex-col items-center justify-center px-6 mx-auto md:h-screen">
        <a href="{{ route('index') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <h1
                class=" text-blanco text-4xl font-bold transition-all md:text-[45px] hover:text-rosa uppercase font-roboto my-12 lg:mt-0">
                Nico V Rey</h1>
        </a>
        <div
            class="w-full bg-white rounded-lg shadow  md:mt-0 sm:max-w-md xl:p-0 ">
            <div class="p-6 space-y-4 md:space-y-4 sm:p-8">
                <h1
                    class="text-xl font-bold leading-tight tracking-tight text-center text-gray-900 md:text-2xl ">
                    Crear Cuenta
                </h1>

                <form class="space-y-4 md:space-y-6" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                            Usuario</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                            placeholder="" value="{{ old('name') }}">
                        @error('name')
                        <div class="pt-2 text-sm text-red-400 ">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">Correo
                            electrónico</label>
                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 "
                            placeholder="name@company.com" value="{{ old('email') }}">
                        @error('email')
                        <div class="pt-2 text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 ">Contraseña</label>
                        <input type="password" name="password" id="password" placeholder="••••••••"
                            class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 ">
                        @error('password')
                        <div class="pt-2 text-sm text-red-400">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full text-negro bg-rosa hover:bg-[#e8a9a9] focus:ring-4 focus:outline-none focus:ring-[#cb8f8f] font-medium rounded-lg text-sm px-5 py-2.5 text-center transition-all">Crear
                        cuenta</button>
                    <div class="flex justify-end">
                        <p class="text-sm font-light ">
                            ¿Ya tenes una cuenta? <a href="{{ route('login') }}"
                                class="font-medium hover:underline">Iniciá
                                sesión</a>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
