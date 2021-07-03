<div class="md:hidden" x-data="{open:false}">
    <div x-show.transition="open"
        class="w-screen h-screen bg-gray-600 fixed flex flex-col justify-center items-center z-50">
        <i x-on:click="open=false" class="fas fa-times text-2xl absolute top-4 right-8 text-white"></i>

        <x-mobile-header-link titulo="Dashboard" link="/" icone="fas fa-tv" />
        <x-mobile-header-link titulo="Animais" link="/animais" icone="fas fa-fish" />
        <x-mobile-header-link titulo="Planta" link="/plantas" icone="fas fa-spa" />
        <x-mobile-header-link titulo="Treinadores" link="/treinadores" icone="fas fa-user" />
        <x-mobile-header-link titulo="Shows" link="/shows" icone="fas fa-award" />

    </div>

    <div x-show="!open" class="h-16 bg-gray-600">
        <div class="flex justify-end w-11/12 h-full items-center">
            <i x-on:click="open=true" class="fas fa-bars text-white text-2xl"></i>
        </div>
    </div>
</div>
