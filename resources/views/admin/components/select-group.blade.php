@props([
    'name',
    'id' => null,
    'label' => '',
    'items',
    'value' => null
])
@php

    $id = $id ?? $name;
@endphp

<div>
    @if ($label)
        <x-admin::input-label :for="$id" :value="$label" class="mb-1" />
    @endif
    <select name="{{ $name }}" id="{{ $id }}"
        {{ $attributes->class([
            '
                border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm
                ',
        ]) }}>
        <option value="">Select</option>
        @foreach ($items as $item)
            <option value="{{ $item->value }}" @if ($item->value == old($name, $value)) selected
                
            @endif>{{ $item->name }}</option>
        @endforeach
    </select>
    @error($name)
    <span class="text-red-500 mt-1">{{ $message }}</span>
@enderror
</div>
