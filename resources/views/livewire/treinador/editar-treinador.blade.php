<form wire:submit.prevent="editar" class="flex flex-col items-center mt-12 space-y-4 overflow-x-auto">
    <table class="content-center w-11/12 mx-auto border-collapse table-auto" style="min-width: 1000px;">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Genero</th>
                <th>Anos de experiencia</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input wire:model="treinador.nome" type="text" placeholder="Nome" />
                </td>

                <td>
                    <input wire:model="treinador.idade" type="number" placeholder="Idade" />
                </td>

                <td>
                    <select wire:model='treinador.genero'>
                        <option value="" selected>Selecione um genero</option>
                        <option value="homem">Homem</option>
                        <option value="mulher">Mulher</option>
                    </select>
                </td>

                <td>
                    <input wire:model="treinador.experiencia" type="number" placeholder="Anos de experiencia" />
                </td>
            </tr>
        </tbody>
    </table>

    @foreach ($errors->all() as $error)
    <h1 class="text-red-400">{{ $error }}</h1>
    @endforeach

    <button class="px-2 py-2 text-white bg-gray-700 rounded shadow">
        Editar Treinador
    </button>

</form>
