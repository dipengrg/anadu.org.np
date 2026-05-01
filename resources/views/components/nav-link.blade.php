@props(['active' => false, 'href' => '#'])

<li>
    <a href="{{ url($href) }}" 
       {{ $attributes->merge(['class' => 'transition duration-300 ' . ($active ? 'text-anadu-gold border-b border-anadu-gold' : 'hover:text-anadu-gold')]) }}>
        {{ $slot }}
    </a>
</li>