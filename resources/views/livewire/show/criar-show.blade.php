<form wire:submit.prevent="criar" class="flex flex-col items-center mt-12 space-y-4 overflow-x-auto">
    <table class="content-center w-11/12 mx-auto border-collapse table-auto" style="min-width: 1000px;">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Inicio</th>
                <th>Duração em horas</th>
                <th>Animais</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input wire:model="show.nome" type="text" placeholder="Nome" />
                </td>

                <td>
                    <input wire:model="show.inicio" type="time" placeholder="Inicio" />
                </td>

                <td>
                    <input wire:model="show.duracao" type="number" placeholder="Duração" />
                </td>

                <td>
                    <select wire:model='animais' multiple>
                        @foreach (\App\Models\Animal::where('participa_em_shows',true)->get() as $an)
                        <option value="{{ $an->id }}">{{ $an->nome }}</option>
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
        Criar Show
    </button>

</form>
