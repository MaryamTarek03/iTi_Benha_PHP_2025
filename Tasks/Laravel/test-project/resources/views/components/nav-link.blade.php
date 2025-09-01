<!-- The only way to do great work is to love what you do. - Steve Jobs -->
@props(['active' => false, 'href' => '/'])

<a href="{{ $href }}" class="{{ $active ? 'font-bold text-[#f53003]' : '' }}">{{ $slot }}</a>
