@props([
    'title' => ''
])
<div
{{ $attributes->class(["block p-6 rounded-lg shadow-lg bg-white"]) }}
  class="block rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] ">
  @if ($title)
  <h5
    class="mb-2 text-xl font-medium leading-tight text-neutral-800">
    {{ $title }}
  </h5>
      
  @endif
  <div class="mb-4 text-base text-neutral-600">
    {{ $slot }}
</div>
</div>