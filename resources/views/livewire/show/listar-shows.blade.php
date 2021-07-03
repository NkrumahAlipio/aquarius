<div>
    @if (count($shows) > 0)
    <div class="flex flex-col items-center w-11/12 mx-auto mt-12 overflow-x-auto">
        <table class="content-center w-full border-collapse table-auto" style="min-width: 1000px;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Inicio</th>
                    <th>Duração</th>
                    <th>Animais</th>
                    <th>Accções</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($shows as $show)
                <tr>
                    <td> {{ $show->id }} </td>
                    <td>{{ $show->nome }}</td>
                    <td>{{ $show->inicio }}</td>
                    <td>{{ $show->duracao }} {{ $show->duracao == 1 ? 'hora':'horas' }}</td>
                    <td>
                        <div class="flex flex-col overflow-y-scroll max-h-12">
                            @foreach ($show->animais as $animal)
                            <a href="/animais/{{ $animal->id }}" class="text-blue-600">{{ $animal->nome }}</a>
                            @endforeach
                        </div>
                    </td>
                    <td>
                        <div class="flex justify-evenly">
                            <a class="py-1 px-2 bg-green-600 text-white rounded"
                                href="/shows/{{ $show->id }}/edit">Editar</a>
                            <a href="/shows/{{ $show->id }}" class="py-1 px-2 bg-blue-600 text-white rounded">Ver</a>
                            <button class="py-1 px-2 bg-red-600 text-white rounded" wire:loading.attr='disabled'
                                wire:click="apagarShow({{ $show->id }})">Apagar</button>
                    </td>
    </div>

    </tr>
    @endforeach

    </tbody>
    </table>

    <a href="/shows/create" class="px-2 py-2 mt-4 text-white bg-gray-700 rounded shadow">
        Novo show
    </a>

</div>
@else

<div class="flex flex-col items-center justify-center space-y-2">
    <h1 class="text-xl font-semibold">
        Não possui nenhum show registrado
    </h1>
    <a href="/shows/create" class="px-4 py-2 text-white bg-gray-700 rounded shadow">
        <h1>Adicionar Show</h1>
    </a>

</div>
@endif
</div>
