<form wire:submit.prevent="criar" class="flex flex-col items-center mt-12 space-y-4 overflow-x-auto" x-data>
    <table class="content-center w-11/12 mx-auto border-collapse table-auto" style="min-width: 800px;">
        <thead>
            <tr>
                <th>Nome da especie</th>
                <th>Familia</th>
                <th>Habitat</th>
                <th>Nome Recebido</th>
                <th>Idade</th>
                <th>Mantido em cativeiro?</th>
                <th>Participa em shows</th>
                <th x-show="$wire.animal.participa_em_shows">Anos de experiencia</th>
                <th x-show="$wire.animal.participa_em_shows">Treinador</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input wire:model="especie.nome" type="text" placeholder="Nome da especie" />
                </td>

                <td>
                    <input wire:model="especie.familia" type="text" placeholder="Familia" />
                </td>

                <td>
                    <select wire:model='especie.habitat'>
                        <option value="" selected>Selecione um habitat</option>
                        <option value="mar">Mar</option>
                        <option value="rio">Rio</option>
                    </select>
                </td>

                <td>
                    <input wire:model='animal.nome' type="text" placeholder="Nome recebido" />
                </td>

                <td>
                    <input wire:model='animal.idade' type="number" placeholder="Idade" />
                </td>

                <td>
                    <input wire:model='animal.cativeiro' type="checkbox" />
                </td>

                <td>
                    <input wire:model='animal.participa_em_shows' type="checkbox" />
                </td>

                <td x-show="$wire.animal.participa_em_shows">
                    <input wire:model="animal.experiencia" type="text" placeholder="Anos de experiencia" />
                </td>

                <td x-show="$wire.animal.participa_em_shows">
                    <select wire:model='animal.treinador_id'>
                        <option value="" selected>Selecione um treinador</option>
                        @foreach (\App\Models\Treinador::all() as $treinador)
                        <option value="{{ $treinador->id }}">
                            {{ $treinador->nome }}
                        </option>
                        @endforeach
                    </select>
                </td>
            </tr>
        </tbody>
    </table>

    @foreach ($errors->all() as $error)
    <h1 class="text-red-400">{{ $error }}</h1>
    @endforeach

    <button class="px-2 py-2 text-white bg-gray-700 rounded shadow">
        Criar Animal
    </button>

</form>
