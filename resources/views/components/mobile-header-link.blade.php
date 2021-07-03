<a href="{{ $link }}" x-data="{path: window.location.pathname, link: null}" x-init="link= '{{ $link }}'">
    <div class="py-3 text-white text-xl" :class="{ 'underline': path == link}">
        <div class="flex items-center ml-6 space-x-4">
            <i class="{{ $icone }}"></i>
            <h1>{{ $titulo }}</h1>
        </div>
    </div>
</a>
