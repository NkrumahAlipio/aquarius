<x-app>
    <x-slot name="nome">Ver Planta</x-slot>
    <div class="flex flex-col items-center w-11/12 mx-auto mt-12 overflow-x-auto">
        <table class="content-center w-full border-collapse table-auto" style="min-width: 1000px;" x-data>
            <thead>
                <tr>
                    <th>Nome da especie</th>
                    <th>Familia</th>
                    <th>Habitat</th>
                    <th>Número de cópias</th>
                    <th>É de águas profundas</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <h1>{{ $planta->especie->nome }}</h1>
                    </td>
                    <td>
                        <h1>{{ $planta->especie->familia }}</h1>
                    </td>
                    <td>
                        <h1>{{ $planta->especie->habitat }}</h1>
                    </td>
                    <td>
                        {{ $planta->numero }}
                    </td>
                    <td> {{ $planta->profunda ? 'Sim':'Não' }} </td>
                </tr>
            </tbody>
        </table>
        <a class="px-2 py-2 mt-4 text-white bg-gray-700 rounded shadow" href="/plantas">Voltar</a>
    </div>

</x-app>
