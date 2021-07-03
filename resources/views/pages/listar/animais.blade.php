<x-app>
    <x-slot name="nome">
        Animais
    </x-slot>
    <div>
        <livewire:animal.listar-animais :animais="$animais" />
    </div>
</x-app>
