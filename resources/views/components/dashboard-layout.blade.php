<section class="flex min-h-screen">
  <x-dashboard-side-navigation active="{{ $active }}" class="bg-primary"></x-dashboard-side-navigation>

  <div class="flex-1 max-w-full flex flex-col">
    <x-dashboard-navigation-bar></x-dashboard-navigation-bar>

    <div {{ $attributes->merge(["class" => "container my-4 flex-1 flex flex-col"]) }}>
      {{ $slot }}
    </div>
  </div>
</section>
