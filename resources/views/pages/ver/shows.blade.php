<x-app>
    <x-slot name="nome">Ver Show</x-slot>
    <div class="flex flex-col items-center w-11/12 mx-auto mt-12 overflow-x-auto">
        <table class="content-center w-full border-collapse table-auto" style="min-width: 1000px;" x-data>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Inicio</th>
                    <th>Duração</th>
                    <th>Animais</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <h1>{{ $show->nome }}</h1>
                    </td>
                    <td>
                        <h1>{{ $show->inicio }}</h1>
                    </td>
                    <td>
                        <h1>{{ $show->duracao }}</h1>
                    </td>
                    <td>
                        <div class="flex flex-col">
                            @foreach ($show->animais as $animal)
                            <a href="/animais/{{ $animal->id }}" class="text-blue-600">{{ $animal->nome }}</a>
                            @endforeach
                        </div>
                    </td>

                </tr>
            </tbody>
        </table>
        <a class="px-2 py-2 mt-4 text-white bg-gray-700 rounded shadow" href="/shows">Voltar</a>
    </div>
</x-app>
