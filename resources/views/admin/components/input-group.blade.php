@props([
    'disabled' => false,
    'name',
    'id' => null,
    'label' => '',
    'type' => 'text',
])
@php

    $id = $id ?? $name;
@endphp
<div>
    @if ($label)
        <x-admin::input-label :for="$id" :value="$label" />
    @endif
    <x-admin::text-input :id="$id" class="block mt-1 w-full" :type="$type" :name="$name"
        :value="old($name)" :disabled="$disabled" {{ $attributes }} />

        @error($name)
            <span class="text-red-500 mt-1">{{ $message }}</span>
            
        @enderror
</div>
