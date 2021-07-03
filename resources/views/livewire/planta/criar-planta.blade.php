<form wire:submit.prevent="criar" class="flex flex-col items-center mt-12 space-y-4 overflow-x-auto">
    <table class="content-center w-11/12 mx-auto border-collapse table-auto" style="min: width 1000px;">
        <thead>
            <tr>
                <th>Nome da especie</th>
                <th>Familia</th>
                <th>Habitat</th>
                <th>Número de cópias</th>
                <th>É de águas profundas?</th>
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
                    <input wire:model="planta.numero" type="number" placeholder="Número de cópias" />
                </td>
                <td>
                    <input wire:model="planta.profunda" type="checkbox">
                </td>
            </tr>
        </tbody>
    </table>

    @foreach ($errors->all() as $error)
    <h1 class="text-red-400">{{ $error }}</h1>
    @endforeach

    <button class="px-2 py-2 text-white bg-gray-700 rounded shadow">
        Criar Planta
    </button>

</form>
