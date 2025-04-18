<x-card>
  <div class="flex items-center justify-between">
    <div class="flex items-center gap-x-2">
      <img src="{{ Vite::asset('resources/images/default-avatar.png') }}" alt="Image not loaded" class="size-12 rounded-full">

      <div class="flex flex-col gap-1">
        <span class="text-sm font-medium">{{ isset($name) && $name != '' ? $name : 'ghost' }}</span>
        <span class="text-xs text-gray-500">{{ isset($name) && $name != '' ? "@{$name}" : '@ghost' }}</span>
      </div>
    </div>

    <x-button class="{{ $followed ? 'bg-gray-200' : 'bg-primary text-white' }} text-sm">
      @if ($followed)
        Following
      @else
        Follow
      @endif
    </x-button>
  </div>
</x-card>
