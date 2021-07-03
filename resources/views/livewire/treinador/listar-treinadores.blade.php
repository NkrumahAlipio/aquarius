<div>
    @if (count($treinadores) > 0)
    <div class="flex flex-col items-center w-11/12 mx-auto mt-12 overflow-x-auto">
        <table class="content-center w-full border-collapse table-auto" style="min-width: 1000px;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Género</th>
                    <th>Anos de experiencia</th>
                    <th>Accções</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($treinadores as $treinador)
                <tr>
                    <td> {{ $treinador->id }} </td>
                    <td> {{ $treinador->nome }} </td>
                    <td> {{ $treinador->idade}} </td>
                    <td> {{ $treinador->genero }} </td>
                    <td> {{ $treinador->experiencia }} </td>

                    <td class="flex justify-evenly">
                        <a class="py-1 px-2 bg-green-600 text-white rounded"
                            href="/treinadores/{{ $treinador->id }}/edit">Editar</a>
                        <a href="/treinadores/{{ $treinador->id }}"
                            class="py-1 px-2 bg-blue-600 text-white rounded">Ver</a>
                        <button class="py-1 px-2 bg-red-600 text-white rounded" wire:loading.attr='disabled'
                            wire:click="apagarTreinador({{ $treinador->id }})">Apagar</button>
                        @if(count($treinador->animais) > 0)
                        <a href="treinador/{{ $treinador->id }}/animais"
                            class="py-1 px-2 bg-yellow-600 text-white rounded">Ver Animais</a>
                        @endif
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

        <a href="/treinadores/create" class="px-2 py-2 mt-4 text-white bg-gray-700 rounded shadow">
            Novo treinador
        </a>

    </div>
    @else

    <div class="flex flex-col items-center justify-center space-y-2">
        <h1 class="text-xl font-semibold">
            Não possui nenhum treinador registrado
        </h1>
        <a href="/treinadores/create" class="px-4 py-2 text-white bg-gray-700 rounded shadow">
            <h1>Adicionar treinador</h1>
        </a>
    </div>

    @endif
</div>
