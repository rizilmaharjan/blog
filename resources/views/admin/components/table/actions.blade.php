@props(['resource', 'model'])
@php
    $resources = Str::plural($resource);
@endphp
<div class="flex items-center gap-3">
    <a href="{{ route("admin.{$resources}.edit", $model) }}">
        <x-icons.edit class="w-5 h-5 text-blue-500" />
    </a>
    <form class="flex" action="{{ route("admin.{$resources}.destroy", $model) }}" method="post" x-data="{ resource: '{{ $resource }}' }"
        x-ref="deleteForm"
        x-on:submit.prevent="() => confirm(`Are you sure, you want to delete this ${resource}?`) ? $refs.deleteForm.submit():null">
        @csrf
        @method('DELETE')
        <button>
            <x-icons.trash class="w-5 h-5 text-red-500" />
        </button>
    </form>
</div>
