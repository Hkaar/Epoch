<x-card>
  <div class="flex flex-col gap-3.5">
    <div class="flex items-center justify-between">
      <div class="flex items-center gap-x-3.5">
        <img src="{{ Vite::asset('resources/images/default-avatar.png') }}" alt="Image not loaded" class="size-12 rounded-full">

        <div class="flex flex-col gap-1.5">
          <span class="font-medium">Myname</span>
          <span class="text-sm text-gray-500">@Myname</span>
        </div>
      </div>

      <span class="text-sm text-gray-500">
        March, 12th 2025
      </span>
    </div>

    <p class="prose prose-gray dark:prose-neutral">
      Some example content for my post here. Did you know that Tanuki's are referred to
      japanese raccoon dogs?
    </p>

    <div class="flex items-center gap-x-2.5">
      <x-button class="gap-x-2.5 p-1 delay-75 hover:bg-gray-100 active:scale-95 active:opacity-90">
        <i data-lucide="share-2"></i>
        <span>12</span>
      </x-button>
      <x-button class="gap-x-2.5 p-1 delay-75 hover:bg-gray-100 active:scale-95 active:opacity-90">
        <i data-lucide="thumbs-up"></i>
        <span>34</span>
      </x-button>
      <x-button class="gap-x-2.5 p-1 delay-75 hover:bg-gray-100 active:scale-95 active:opacity-90">
        <i data-lucide="thumbs-down"></i>
        <span>6</span>
      </x-button>
      <x-button class="gap-x-2.5 p-1 delay-75 hover:bg-gray-100 active:scale-95 active:opacity-90">
        <i data-lucide="repeat"></i>
        <span>87</span>
      </x-button>
    </div>
  </div>
</x-card>
