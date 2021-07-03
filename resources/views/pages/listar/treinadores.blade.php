<x-app>
    <x-slot name="nome">Treinadores</x-slot>

    <div>
        <livewire:treinador.listar-treinadores :treinadores="$treinadores" />
    </div>
</x-app>
