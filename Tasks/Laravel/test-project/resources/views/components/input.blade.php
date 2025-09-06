<!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
<!-- I dont think that is true I think both matters, especially when learning -->

@props(['name', 'type' => 'text', 'value' => '', 'label' => '', 'placeholder' => ''])
@if(!$label)
@php
$label = ucwords(str_replace('_', ' ', $name));
@endphp
@endif

<label for="{{ $name }}" class="inline-block text-lg m-1">{{ $label }}</label>
<input
    type="{{ $type }}"
    class="border border-gray-200 rounded p-2 w-full"
    name="{{ $name }}"
    placeholder="{{ $placeholder }}"
    value="{{ $value }}" />