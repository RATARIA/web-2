<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Seus Discos') }}
        </h2>
        <h2>
            <a href="/home">Voltar</a>
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <a href="{{ route('discos.create') }}">Adicione um Disco</a> 
                        <table>
                            <tr>
                                <th>Name</th>
                                <th>Artist</th>
                                <th>Year</th>
                            </tr>
                        @foreach($disco as $d)
                            <tr>
                                <td>{{ $d->name  }}</td>
                                <td>{{ $d->artist  }}</td>
                                <td>{{ $d->year  }}</td>
                                <td><a href="{{route('discos.delete',[$d])}}">Remover</a></td>
                            </tr>
                        @endforeach
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>