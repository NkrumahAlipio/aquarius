<div>
    @if (count($plantas) > 0)
    <div class="flex flex-col items-center w-11/12 mx-auto mt-12 overflow-x-auto">
        <table class="content-center w-full border-collapse table-auto" style="min-width: 1000px;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome da especie</th>
                    <th>Familia</th>
                    <th>Habitat</th>
                    <th>Número de cópias</th>
                    <th>É de águas profundas?</th>
                    <th>Accções</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($plantas as $planta)
                <tr>
                    <td> {{ $planta->id }} </td>
                    <td> {{ $planta->especie->nome }} </td>
                    <td> {{ $planta->especie->familia}} </td>
                    <td> {{ $planta->especie->habitat }} </td>
                    <td> {{ $planta->numero }} </td>
                    <td> {{ $planta->profunda ? 'Sim':'Não' }} </td>


                    <td class="flex justify-evenly">
                        <a class="py-1 px-2 bg-green-600 text-white rounded"
                            href="/plantas/{{ $planta->id }}/edit">Editar</a>
                        <a href="/plantas/{{ $planta->id }}" class="py-1 px-2 bg-blue-600 text-white rounded">Ver</a>
                        <button class="py-1 px-2 bg-red-600 text-white rounded" wire:loading.attr='disabled'
                            wire:click="apagarPlanta({{ $planta->id }})">Apagar</button>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

        <a href="/plantas/create" class="px-2 py-2 mt-4 text-white bg-gray-700 rounded shadow">
            Nova Planta
        </a>

    </div>
    @else

    <div class="flex flex-col items-center justify-center space-y-2">
        <h1 class="text-xl font-semibold">
            Não possui nenhuma planta registrada
        </h1>
        <a href="/plantas/create" class="px-4 py-2 text-white bg-gray-700 rounded shadow">
            <h1>Adicionar Planta</h1>
        </a>
    </div>

    @endif
</div>
