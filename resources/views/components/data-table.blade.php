<div class="flex flex-col flex-1 w-full shadow max-h-fit px-4 py-6 rounded">
  <div class="-m-1.5 overflow-x-auto">
    <div class="p-1.5 min-w-full inline-block align-middle space-y-4">
      <div class="flex items-center justify-between">
        <a href="{{ isset($routes['create']) ? $routes['create'] : '#' }}" class="btn bg-green-600 text-white duration-200 ease-in-out transition-transform">
          <i class="material-symbols-outlined font-var-light">add</i>

          Add a new {{ $title }}
        </a>

        @if (isset($filters) && $filters->hasActualContent())
          <x-filter-container>
            {{ $filters }}
          </x-filter-container>
        @endif
      </div>

      <div class="overflow-hidden border rounded-lg">
        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
          <thead>
            <tr>
              @foreach ($columns as $col)
                @if (is_string($col))
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500">
                    {{ $col }}
                  </th>
                @else
                  <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase dark:text-neutral-500"
                    width="{{ isset($col['width']) ? $col['width'] . '%' : '' }}">
                    {{ $col['name'] }}
                  </th>
                @endif
              @endforeach
            </tr>
          </thead>
          
          <tbody>
            @if ($slot->hasActualContent())
              {{ $slot }}
            @else
              <td class="dark:text-neutral-200 whitespace-nowrap px-6 py-4 text-sm text-gray-800">
                No data available to display
              </td>
            @endif
          </tbody>
        </table>
      </div>

      @if (isset($footer) && $footer->hasActualContent())
        {{ $footer }}
      @endif
    </div>
  </div>
</div>