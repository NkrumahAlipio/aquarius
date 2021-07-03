<x-app>
    <x-slot name="nome">Plantas</x-slot>
    <div>
        <livewire:planta.listar-plantas :plantas="$plantas" />
    </div>
</x-app>
