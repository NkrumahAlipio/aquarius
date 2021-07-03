<div>
    @if (count($animais) > 0)
    <div class="flex flex-col items-center w-11/12 mx-auto mt-12 overflow-x-auto">
        <table class="content-center w-full border-collapse table-auto" style="min-width: 1000px;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome da especie</th>
                    <th>Familia</th>
                    <th>Habitat</th>
                    <th>Nome Recebido</th>
                    <th>Idade</th>
                    <th>Mantido em cativeiro?</th>
                    <th>Participa em shows</th>
                    <th>Anos de experiencia</th>
                    <th>Treinador</th>
                    <th>Acções</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($animais as $animal)
                <tr>
                    <td> {{ $animal->id }} </td>
                    <td> {{ $animal->especie->nome }} </td>
                    <td> {{ $animal->especie->familia}} </td>
                    <td> {{ $animal->especie->habitat }} </td>
                    <td> {{ $animal->nome }} </td>
                    <td> {{ $animal->idade }} </td>
                    <td> {{ $animal->cativeiro ? 'Sim':'Não' }} </td>
                    <td> {{ $animal->participa_em_shows ? 'Sim':'Não' }} </td>
                    <td> {{ $animal->experiencia ? $animal->experiencia:'Nenhum' }} </td>
                    <td> @if($animal->treinador)
                        <a href="/treinadores/{{ $animal->treinador->id }}"
                            class="text-blue-600">{{ $animal->treinador->nome }}
                        </a> @else
                        Nenhum @endif </td>
                    <td class="flex justify-evenly">
                        <a class="py-1 px-2 bg-green-600 text-white rounded"
                            href="/animais/{{ $animal->id }}/edit">Editar</a>
                        <a href="/animais/{{ $animal->id }}" class="py-1 px-2 bg-blue-600 text-white rounded">Ver</a>
                        <button class="py-1 px-2 bg-red-600 text-white rounded" wire:loading.attr='disabled'
                            wire:click="apagarAnimal({{ $animal->id }})">Apagar</button>
                    </td>

                </tr>
                @endforeach

            </tbody>
        </table>

        <a href="/animais/create" class="px-2 py-2 mt-4 text-white bg-gray-700 rounded shadow">
            Novo Animal
        </a>

    </div>
    @else

    <div class="flex flex-col items-center justify-center space-y-2 h-full">
        <h1 class="text-xl font-semibold">
            Não possui nenhum animal registrado
        </h1>
        <a href="/animais/create" class="px-4 py-2 text-white bg-gray-700 rounded shadow">
            <h1>Adicionar Animal</h1>
        </a>
    </div>
    @endif
</div>
