<x-app>
    <x-slot name="nome">Ver Treinador</x-slot>
    <div class="flex flex-col items-center w-11/12 mx-auto mt-12 overflow-x-auto">
        <table class="content-center w-full border-collapse table-auto" style="min-width: 1000px;" x-data>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Género</th>
                    <th>Anos de experiencia</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <h1>{{ $treinador->nome }}</h1>
                    </td>
                    <td>
                        <h1>{{ $treinador->idade }}</h1>
                    </td>
                    <td>
                        <h1>{{ $treinador->genero }}</h1>
                    </td>
                    <td>
                        {{ $treinador->experiencia }}
                    </td>

                </tr>
            </tbody>
        </table>
        <a class="px-2 py-2 mt-4 text-white bg-gray-700 rounded shadow" href="/treinadores">Voltar</a>
    </div>

</x-app>
