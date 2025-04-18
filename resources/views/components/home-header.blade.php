@props([
    'user' => auth()->user(),
])

<header
  {{ $attributes->twMerge(['class' => 'relative flex w-full flex-wrap bg-white py-2 text-sm dark:bg-neutral-800 sm:flex-nowrap sm:justify-start border-b border-gray-200']) }}>
  <nav class="mx-auto w-full px-4 sm:flex sm:items-center sm:justify-between">
    <div class="flex items-center justify-between">
      <a class="focus:outline-hidden flex items-center gap-x-2 text-xl font-semibold focus:opacity-80 dark:text-white" href="#" aria-label="Brand">
        <i data-lucide="box"></i>
        {{ config('app.name') }}
      </a>
      <div class="sm:hidden">
        <button type="button"
          class="hs-collapse-toggle shadow-2xs focus:outline-hidden relative flex size-9 items-center justify-center gap-x-2 rounded-lg text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-transparent dark:text-white dark:hover:bg-white/10 dark:focus:bg-white/10"
          id="home-header-collapse" aria-expanded="false" aria-controls="home-header" aria-label="Toggle navigation" data-hs-collapse="#home-header">
          <svg class="size-4 shrink-0 hs-collapse-open:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <line x1="3" x2="21" y1="6" y2="6" />
            <line x1="3" x2="21" y1="12" y2="12" />
            <line x1="3" x2="21" y1="18" y2="18" />
          </svg>
          <svg class="hidden size-4 shrink-0 hs-collapse-open:block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M18 6 6 18" />
            <path d="m6 6 12 12" />
          </svg>
          <span class="sr-only">Toggle navigation</span>
        </button>
      </div>
    </div>

    <div class="relative hidden max-w-lg flex-1 lg:block">
      <input type="text"
        class="peer block w-full rounded-lg border border-gray-200 px-4 py-2.5 ps-11 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 sm:py-3 sm:text-sm"
        placeholder="Start your discovery">
      <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-4 peer-disabled:pointer-events-none peer-disabled:opacity-50">
        <i data-lucide="search" class="size-5"></i>
      </div>
    </div>

    <div id="home-header" class="hs-collapse hidden flex-1 overflow-hidden transition-all duration-300 sm:block sm:flex-none"
      aria-labelledby="home-header-collapse">
      <div class="mt-5 flex flex-col gap-5 sm:mt-0 sm:flex-row sm:items-center sm:justify-end sm:ps-5">
        <div class="flex flex-col gap-1.5 md:hidden">
          <a href="{{ route('home') }}" class="{{ $path == '' ? 'bg-gray-100' : 'hover:bg-gray-100' }} flex items-center gap-x-2.5 rounded-lg px-3 py-2">
            <i data-lucide="home" class="size-5"></i>
            Home
          </a>

          <a href="{{ route('for-you') }}"
            class="{{ $path == 'for-you' ? 'bg-gray-100' : 'hover:bg-gray-100' }} flex items-center gap-x-2.5 rounded-lg px-3 py-2">
            <i data-lucide="user" class="size-5"></i>
            For you
          </a>

          <a href="{{ route('discover') }}"
            class="{{ $path == 'discovery' ? 'bg-gray-100' : 'hover:bg-gray-100' }} flex items-center gap-x-2.5 rounded-lg px-3 py-2">
            <i data-lucide="globe-2" class="size-5"></i>
            Discovery
          </a>

          <a href="{{ route('trending') }}"
            class="{{ $path == 'trending' ? 'bg-gray-100' : 'hover:bg-gray-100' }} flex items-center gap-x-2.5 rounded-lg px-3 py-2">
            <i data-lucide="flame" class="size-5"></i>
            Trending
          </a>
        </div>

        <div class="hs-dropdown relative inline-flex">
          <button id="hs-dropdown-default" type="button"
            class="hs-dropdown-toggle shadow-2xs focus:outline-hidden inline-flex items-center gap-x-2 rounded-lg bg-white px-2 py-1 text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-50 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
            aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
            @if ($user->img)
              <img src="{{ Storage::url($user->img) }}" alt="Image failed to load!" class="size-8 rounded-full">
            @else
              <img src="{{ Vite::asset('resources/images/default-avatar.png') }}" alt="Image failed to load!" class="size-8 rounded-full">
            @endif

            <svg class="size-4 hs-dropdown-open:rotate-180" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
              stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="m6 9 6 6 6-6" />
            </svg>
          </button>

          <div
            class="hs-dropdown-menu duration dark:divide-y-neutral-700 mt-2 hidden min-w-60 divide-y divide-gray-200 rounded-lg bg-white opacity-0 shadow-md transition-[opacity,margin] before:absolute before:-top-4 before:start-0 before:h-4 before:w-full after:absolute after:-bottom-4 after:start-0 after:h-4 after:w-full hs-dropdown-open:opacity-100 dark:divide-neutral-700 dark:border dark:border-neutral-700 dark:bg-neutral-800"
            role="menu" aria-orientation="vertical" aria-labelledby="hs-dropdown-hover-event">

            <div class="space-y-0.5 p-1">
              <a class="focus:outline-hidden flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                href={{ route('home') }}>
                <i data-lucide="home" class="size-4"></i>
                Home
              </a>
              <a class="focus:outline-hidden flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                href="{{ route('settings.public-profile') }}">
                <i data-lucide="settings" class="size-4"></i>
                Settings
              </a>
            </div>

            <div class="space-y-0.5 p-1">
              <a class="focus:outline-hidden flex items-center gap-x-3.5 rounded-lg px-3 py-2 text-sm text-gray-800 hover:bg-gray-100 focus:bg-gray-100 dark:text-neutral-400 dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700"
                href={{ route('logout') }}>
                <i data-lucide="log-out" class="size-4 stroke-red-700"></i>
                <span class="text-red-700">Logout</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
</header>
