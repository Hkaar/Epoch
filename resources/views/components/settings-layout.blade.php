<main class="flex min-h-screen flex-col">
  <section class="grid flex-1 grid-cols-5">
    <x-settings-sidebar path="{{ $path }}" class="sticky top-0 z-10 max-h-screen px-8 py-7" />

    <section class="col-span-4 flex flex-col bg-gray-50">
      <div class="container mx-auto flex w-10/12 flex-col gap-6 px-8 py-7">
        {{ $slot }}
      </div>

      <x-simple-footer class="mt-auto" />
    </section>
  </section>
</main>
