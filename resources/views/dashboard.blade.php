@extends('layouts.app')

@section('titulo')
    Hola: {{ auth()->user()->name }}
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class="w-full md:w-10/12 lg:w-8/12 px-5 py-10  bg-white shadow p-6"">
            <h2 class="text-2xl font-black mb-4 uppercase">Lista de Usuarios:</h2>

            <div class="overflow-x-auto">
                <table class="min-w-full border rounded-md overflow-hidden">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="py-2 px-4 border-r uppercase  text-gray-500 font-bold">Nombre</th>
                            <th class="py-2 px-4 border-r uppercase  text-gray-500 font-bold">Apellido</th>
                            <th class="py-2 px-4 border-r col-span-2 uppercase  text-gray-500 font-bold">Correo</th>
                            <th class="py-2 px-4 border-r uppercase  text-gray-500 font-bold">Teléfono</th>
                            <th class="py-2 px-4 border-r uppercase  text-gray-500 font-bold">Modificar</th>
                            <th class="py-2 px-4 uppercase  text-gray-500 font-bold">Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr class="border-t">
                                <td class="py-2 px-4 border-r">{{ $user->name }}</td>
                                <td class="py-2 px-4 border-r">{{ $user->lastname }}</td>
                                <td class="py-2 px-4 border-r col-span-2">{{ $user->email }}</td>
                                <td class="py-2 px-4 border-r">{{ $user->phone }}</td>

                                <td class="py-2 px-4 border-r">
                                    <a href="{{ route('user.index', $user->id) }}" class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer font-bold text-white rounded-lg px-4 py-2">Modificar</a>
                                </td>

                                <td class="py-2 px-4">
                                    <form action="{{ route('user.destroy', $user->id)  }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 hover:bg-red-600 transition-colors cursor-pointer font-bold text-white rounded-lg px-4 py-2">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
