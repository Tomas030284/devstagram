@extends('layouts.app')

@section('titulo')
    Registrate en Devstagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 " >
        <div class="md:w-5/12">
            <img src="{{asset('img/registrar.jpeg')}}" alt="Imagen registro de usuarios">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-xl">
            <form action="{{route('register')}}" method="POST" novalidate>
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input id="name" name="name" type="text" placeholder="Tu Nombre" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{ old('name')}}"
                    >

                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="lastname" class="mb-2 block uppercase text-gray-500 font-bold">
                        Apellido
                    </label>
                    <input id="lastname" name="lastname" type="text" placeholder="Tu Apellido" class="border p-3 w-full rounded-lg @error('lastname') border-red-500 @enderror" value="{{ old('lastname')}}"
                    >

                    @error('lastname')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Correo
                    </label>
                    <input id="email" name="email" type="email" placeholder="Tu Email de Registro" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{ old('email')}}"/>

                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>


                <div class="mb-5">
                    <label for="phone" class="mb-2 block uppercase text-gray-500 font-bold">
                        Teléfono
                    </label>
                    <input id="phone" name="phone" type="tel" placeholder="Tu Teléfono" class="border p-3 w-full rounded-lg @error('phone') border-red-500 @enderror" value="{{ old('phone')}}"
                    >

                    @error('phone')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>


                <div class="mb-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Contraseña
                    </label>
                    <input id="password" name="password" type="password" placeholder="Password de Registro" class="border p-3 w-full rounded-lg @error('password') border-red-500 @enderror"/>

                    @error('password')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror

                </div>
                <div class="mb-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Contraseña
                    </label>
                    <input id="password_confirmation" name="password_confirmation" type="password" placeholder="Repite tu Password" class="border p-3 w-full rounded-lg"/>
                </div>

                <input type="submit" value="Crear Cuenta" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"/>

            </form>
        </div>

    </div>
@endsection
