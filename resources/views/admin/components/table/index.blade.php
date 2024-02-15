@props(
    [
        'headers',
    ]
)
<div class="flex flex-col overflow-x-auto">
    <div class="sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <div class="overflow-x-auto">
          <table class="min-w-full text-left text-sm font-light">
            <thead class="border-b font-medium dark:border-neutral-500">
              <tr>
                @foreach ($headers as $header )
                <th scope="col" class="px-6 py-4">
                    {{ $header }}
                </th>
                    
                @endforeach
              </tr>
            </thead>
            <tbody>
                {{ $slot }}
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>