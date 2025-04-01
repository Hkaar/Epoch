<header
  class="sticky top-2 z-50 mx-auto my-2 flex w-full max-w-[98rem] flex-wrap rounded-lg bg-white shadow-md dark:bg-neutral-900 md:flex-nowrap md:justify-start">
  <nav class="relative mx-auto w-full px-4 py-2 sm:px-6 md:flex md:items-center md:justify-between md:gap-3 lg:px-8">
    <div class="flex items-center justify-between gap-x-1">
      <a class="focus:outline-hidden flex-none text-xl font-semibold text-black focus:opacity-80 dark:text-white"
        href="#" aria-label="Brand">
        {{ config('app.name') }}
      </a>

      <button type="button"
        class="hs-collapse-toggle focus:outline-hidden relative flex size-9 items-center justify-center rounded-lg border border-gray-200 text-sm font-medium text-gray-800 hover:bg-gray-100 focus:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700 md:hidden"
        id="hs-header-base-collapse" aria-expanded="false" aria-controls="hs-header-base" aria-label="Toggle navigation"
        data-hs-collapse="#hs-header-base">
        <svg class="size-4 hs-collapse-open:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
          viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
          stroke-linejoin="round">
          <line x1="3" x2="21" y1="6" y2="6" />
          <line x1="3" x2="21" y1="12" y2="12" />
          <line x1="3" x2="21" y1="18" y2="18" />
        </svg>
        <svg class="hidden size-4 shrink-0 hs-collapse-open:block" xmlns="http://www.w3.org/2000/svg" width="24"
          height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
          stroke-linecap="round" stroke-linejoin="round">
          <path d="M18 6 6 18" />
          <path d="m6 6 12 12" />
        </svg>
        <span class="sr-only">Toggle navigation</span>
      </button>
    </div>

    <div id="hs-header-base"
      class="hs-collapse hidden grow basis-full overflow-hidden transition-all duration-300 md:block"
      aria-labelledby="hs-header-base-collapse">
      <div
        class="max-h-[75vh] overflow-hidden overflow-y-auto [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 [&::-webkit-scrollbar-track]:bg-gray-100 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 [&::-webkit-scrollbar]:w-2">
        <div class="flex flex-col gap-0.5 py-2 md:flex-row md:items-center md:gap-1 md:py-0">
          <div class="grow">
            <div class="flex flex-col gap-0.5 md:flex-row md:items-center md:justify-end md:gap-1">
              <a class="{{ $path === '' ? 'bg-gray-100 text-gray-700' : 'text-gray-800 hover:bg-gray-100' }} focus:outline-hidden flex items-center gap-x-1.5 rounded-lg p-2 text-sm focus:bg-gray-100 dark:bg-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                @auth href="{{ $path === '' ? '#' : route('home') }}" @endauth
                @guest href="{{ $path === '' ? '#' : route('welcome') }}" @endguest aria-current="page">
                <i data-lucide="home" class="size-4"></i>
                Home
              </a>

              <a class="{{ $path === 'about' ? 'bg-gray-100 text-gray-700' : 'text-gray-800 hover:bg-gray-100' }} focus:outline-hidden flex items-center gap-x-1.5 rounded-lg p-2 text-sm focus:bg-gray-100 dark:bg-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                href="{{ $path === 'about' ? '#' : route('about') }}" aria-current="page">
                <i data-lucide="info" class="size-4"></i>
                About us
              </a>

              <a class="{{ $path === 'careers' ? 'bg-gray-100 text-gray-700' : 'text-gray-800 hover:bg-gray-100' }} focus:outline-hidden flex items-center gap-x-1.5 rounded-lg p-2 text-sm focus:bg-gray-100 dark:bg-neutral-700 dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                href="{{ $path === 'careers' ? '#' : route('careers') }}" aria-current="page">
                <i data-lucide="briefcase-business" class="size-4"></i>
                Careers
              </a>
            </div>
          </div>

          <div class="my-2 md:mx-2 md:my-0">
            <div class="h-px w-full bg-gray-100 dark:bg-neutral-700 md:h-4 md:w-px md:bg-gray-300"></div>
          </div>

          @guest
            <div class="flex flex-wrap items-center gap-x-1.5">
              <a class="shadow-2xs focus:outline-hidden inline-flex items-center rounded-lg border border-gray-200 bg-white px-2.5 py-[7px] text-sm font-medium text-gray-800 hover:bg-gray-50 focus:bg-gray-100 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-800 dark:text-neutral-300 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
                href="#">
                Sign in
              </a>
              <a class="focus:outline-hidden inline-flex items-center rounded-lg bg-primary px-2.5 py-2 text-sm font-medium text-white hover:bg-primary/80 focus:bg-primary/80 disabled:pointer-events-none disabled:opacity-50 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:bg-blue-600"
                href="#">
                Get started
              </a>
            </div>
          @endguest

          @auth
            authorized
          @endauth
        </div>
      </div>
    </div>
  </nav>
</header>
