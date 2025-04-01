<footer {{ $attributes->twMerge(['class' => 'w-full px-4 py-3']) }}>
  <div class="container flex max-w-[98rem] items-center justify-between">
    <div class="flex flex-wrap items-center justify-between gap-2">
      <p class="text-sm text-gray-400 dark:text-neutral-400">
        Copyright © 2025 {{ config('app.name') }}. All rights reserved.
      </p>
    </div>

    <div class="flex flex-col-reverse gap-x-1.5 sm:flex-row sm:items-center">
      <div>
        <a class="focus:outline-hidden inline-flex size-10 items-center justify-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold disabled:pointer-events-none disabled:opacity-50"
          href="#">
          <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
            viewBox="0 0 16 16">
            <path
              d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
          </svg>
        </a>
      </div>

      <div class="my-2 hidden sm:block md:mx-2 md:my-0">
        <div class="h-px w-full dark:bg-neutral-800 md:h-4 md:w-px md:bg-gray-400"></div>
      </div>

      <div class="flex items-center gap-x-1.5 text-gray-400 dark:text-neutral-400">
        <a class="focus:outline-hidden gap-x-2 whitespace-nowrap rounded-lg border border-transparent text-sm hover:underline focus:underline disabled:pointer-events-none disabled:opacity-50"
          href="#">
          Privacy Policy
        </a>

        <a class="focus:outline-hidden gap-x-2 whitespace-nowrap rounded-lg border border-transparent text-sm hover:underline focus:underline disabled:pointer-events-none disabled:opacity-50"
          href="#">
          Terms of Service
        </a>
      </div>
    </div>
  </div>
</footer>
