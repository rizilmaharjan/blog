@props([
    'name',
    'id' => null,
    'label' => '',
])

@php
    
    $id = $id ?? $name;
@endphp

<div>
    @if ($label)
        <x-admin::input-label :for="$id" :value="$label" />
    @endif
    <textarea {!! $attributes->merge([
        'class' => 'border-gray-300 w-full focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm',
    ]) !!} name="{{ $name }}" rows="10">{{ old($name) }}</textarea>
</div>
