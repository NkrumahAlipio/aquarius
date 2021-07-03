<x-app>
    <x-slot name="nome">Dashboard</x-slot>

    <div class="flex flex-col items-center w-11/12 mx-auto mt-12 text-xl">

        <h1>
            @if($animal)
            O animal que tem
            participado nos shows por mais anos sem ter reproduzido em cativeiro é:
            <a class="text-blue-600 hover:underline ml-2" href="animais/{{ $animal->id }}">
                {{ $animall->nome }}
            </a>

            @else
            Nenhum animal participa em shows e simultaneamente não foi reproduzido em cativeiro
            @endif
        </h1>
        <h1 class="mt-4">
            @if($familia)
            A Familia de plantas mais representada no aquario é: {{ $familia }}
            @else
            Nenhuma Planta Foi registrada
            @endif
        </h1>
    </div>

</x-app>
