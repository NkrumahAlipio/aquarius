<x-app>
    <x-slot name="nome">Shows</x-slot>
    <div>
        <livewire:show.listar-shows :shows="$shows" />
    </div>
</x-app>
