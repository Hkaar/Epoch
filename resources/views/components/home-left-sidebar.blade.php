<aside {{ $attributes->twMerge(['class' => 'border-r border-gray-200']) }}>
  <div class="sticky top-16 flex max-h-screen flex-col gap-3.5 px-5 py-4">
    <div class="flex flex-col gap-1.5">
      <a href="{{ route('home') }}" class="{{ $path == '' ? 'bg-gray-100' : 'hover:bg-gray-100' }} flex items-center gap-x-2.5 rounded-lg px-3 py-2">
        <i data-lucide="home" class="size-5"></i>
        Home
      </a>

      <a href="{{ route('for-you') }}" class="{{ $path == 'for-you' ? 'bg-gray-100' : 'hover:bg-gray-100' }} flex items-center gap-x-2.5 rounded-lg px-3 py-2">
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

    <div class="hs-accordion-group">
      <div class="hs-accordion active" id="hs-basic-with-title-and-arrow-stretched-heading-one">
        <button
          class="hs-accordion-toggle dark:focus:outline-hidden inline-flex w-full items-center justify-between gap-x-3 rounded-lg px-3 py-2 text-start font-semibold text-gray-800 hover:bg-gray-100 hover:text-gray-500 disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-blue-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 dark:hs-accordion-active:text-blue-500"
          aria-expanded="true" aria-controls="hs-basic-with-title-and-arrow-stretched-collapse-one">
          Resources
          <svg class="block size-4 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m6 9 6 6 6-6"></path>
          </svg>
          <svg class="hidden size-4 hs-accordion-active:block" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m18 15-6-6-6 6"></path>
          </svg>
        </button>
        <div id="hs-basic-with-title-and-arrow-stretched-collapse-one"
          class="hs-accordion-content w-full overflow-hidden px-2 py-1 transition-[height] duration-300" role="region"
          aria-labelledby="hs-basic-with-title-and-arrow-stretched-heading-one">
          <div class="flex flex-col gap-0.5">
            <a href="#" class="flex items-center gap-x-2.5 rounded-lg px-3 py-2 hover:bg-gray-100">
              <i data-lucide="info" class="size-5"></i>
              About {{ config('app.name') }}
            </a>

            <a href="#" class="flex items-center gap-x-2.5 rounded-lg px-3 py-2 hover:bg-gray-100">
              <i data-lucide="briefcase-business" class="size-5"></i>
              Careers
            </a>

            <a href="#" class="flex items-center gap-x-2.5 rounded-lg px-3 py-2 hover:bg-gray-100">
              <i data-lucide="circle-help" class="size-5"></i>
              Help
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</aside>
