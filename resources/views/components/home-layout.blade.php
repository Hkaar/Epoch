<div {{ $attributes->twMerge(['class' => 'flex flex-col']) }}>
  <x-home-header path="{{ $path }}" class="sticky top-0 z-10" />

  <div class="grid flex-1 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
    <x-home-left-sidebar path="{{ $path }}" class="hidden border-0 md:block" />

    <main class="flex flex-col gap-4 bg-gray-50 px-6 py-5 md:col-span-2 lg:col-span-3">
      {{ $slot }}
    </main>

    <x-home-right-sidebar class="hidden border-0 xl:block" />
  </div>
</div>
