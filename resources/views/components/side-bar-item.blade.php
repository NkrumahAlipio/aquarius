<a href="{{ $link }}" x-data="{path: window.location.pathname, link: null}" x-init="link= '{{ $link }}'">
    <div class="py-3 hover:bg-gray-500 hover:text-white" :class="{ 'bg-gray-500 text-white': path == link}">
        <div class="flex items-center ml-6 space-x-4">
            <i class="{{ $icone }}"></i>
            <h1>{{ $titulo }}</h1>
        </div>
    </div>
</a>
