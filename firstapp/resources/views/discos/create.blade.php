<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Adicionar Discos') }}
        </h2>
        <h2>
            <a href="/home">Voltar</a>
        </h2>
    </x-slot>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
    <form action="{{ route('discos.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="name">
        <input type="text" name="artist" placeholder="artist">
        <input type="text" name="year" placeholder="year">
        <input type="submit">
    </form>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>


