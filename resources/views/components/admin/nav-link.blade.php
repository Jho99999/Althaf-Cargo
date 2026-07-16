@props(['active' => false, 'href' => '#'])

<a href="{{ $href }}" 
   class="flex items-center px-3 py-2.5 rounded-lg text-sm font-medium transition-colors 
          {{ $active ? 'bg-navy-800 text-white' : 'text-gray-300 hover:bg-navy-800 hover:text-white' }}"
>
    {{ $slot }}
</a>