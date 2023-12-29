@extends('layouts.app')

@section('titulo')
    Editar Perfil: {{$user->name}}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="md:w-1/2 bg-white shadow p-6">
            <form method="POST" action="{{ route('user.store', $user->id) }}" class="mt-10 md:mt-0">
                @csrf
                <div class="mb-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>
                    <input id="name" name="name" type="text" placeholder="Tu Nombre" class="border p-3 w-full rounded-lg @error('name') border-red-500 @enderror" value="{{ $user->name}}"
                    >

                    @error('name')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="lastname" class="mb-2 block uppercase text-gray-500 font-bold">
                        Apellido
                    </label>
                    <input id="lastname" name="lastname" type="text" placeholder="Tu Apellido" class="border p-3 w-full rounded-lg @error('lastname') border-red-500 @enderror" value="{{ $user->lastname}}"
                    >

                    @error('lastname')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Correo
                    </label>
                    <input id="email" name="email" type="email" placeholder="Tu Email de Registro" class="border p-3 w-full rounded-lg @error('email') border-red-500 @enderror" value="{{ $user->email}}"/>

                    @error('email')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>


                <div class="mb-5">
                    <label for="phone" class="mb-2 block uppercase text-gray-500 font-bold">
                        Teléfono
                    </label>
                    <input id="phone" name="phone" type="tel" placeholder="Tu Teléfono" class="border p-3 w-full rounded-lg @error('phone') border-red-500 @enderror" value="{{ $user->phone}}">

                    @error('phone')
                    <p class="bg-red-500 text-white my-2 rounded-lg text-sm p-2 text-center">{{$message}}</p>
                    @enderror
                </div>

                <input type="submit" value="Guardar Cambios" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg"/>

            </form>
        </div>

    </div>
@endsection
