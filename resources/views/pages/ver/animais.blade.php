<x-app>
    <x-slot name="nome">Ver Animal</x-slot>
    <div class="flex flex-col items-center w-11/12 mx-auto mt-12 overflow-x-auto">
        <table class="content-center w-full border-collapse table-auto" style="min-width: 1000px;" x-data>
            <thead>
                <tr>
                    <th>Nome da especie</th>
                    <th>Familia</th>
                    <th>Habitat</th>
                    <th>Nome Recebido</th>
                    <th>Idade</th>
                    <th>Mantido em cativeiro?</th>
                    <th>Participa em shows</th>
                    <th>Anos de experiencia</th>
                    <th>Treinador</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <h1>{{ $animal->especie->nome }}</h1>
                    </td>
                    <td>
                        <h1>{{ $animal->especie->familia }}</h1>
                    </td>
                    <td>
                        <h1>{{ $animal->especie->habitat }}</h1>
                    </td>
                    <td>
                        {{ $animal->nome }}
                    </td>
                    <td>
                        {{ $animal->idade }}
                    </td>
                    <td> {{ $animal->cativeiro ? 'Sim':'Não' }} </td>
                    <td> {{ $animal->participa_em_shows ? 'Sim':'Não' }} </td>
                    <td> {{ $animal->experiencia ? $animal->experiencia:'Nenhum' }} </td>
                    <td> @if($animal->treinador) <a href="/treinadores/{{ $animal->treinador->id }}"
                            class="text-blue-600"> {{ $animal->treinador->nome }}</a> @else Nenhum @endif </td>
                </tr>
            </tbody>
        </table>
        <a class="px-2 py-2 mt-4 text-white bg-gray-700 rounded shadow" href="/animais">Voltar</a>
    </div>

</x-app>
