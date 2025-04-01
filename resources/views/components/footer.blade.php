<footer class="mt-auto w-full bg-gray-900 dark:bg-neutral-950">
  <div class="mx-auto mt-auto w-full max-w-[98rem] px-4 py-10 sm:px-6 lg:px-8 lg:pt-20">
    <div class="grid grid-cols-2 gap-6 md:grid-cols-4 lg:grid-cols-5">
      <div class="col-span-full lg:col-span-1">
        <a class="focus:outline-hidden flex-none text-xl font-semibold text-white focus:opacity-80" href="#"
          aria-label="Brand">
          {{ config('app.name') }}
        </a>
      </div>

      <div class="col-span-1">
        <h4 class="font-semibold text-gray-100">Platform</h4>

        <div class="mt-3 grid space-y-3">
          <p>
            <a class="focus:outline-hidden inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
              href="#">
              Features
            </a>
          </p>
          <p>
            <a class="focus:outline-hidden inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
              href="#">
              Changelog
            </a>
          </p>
        </div>
      </div>

      <div class="col-span-1">
        <h4 class="font-semibold text-gray-100">Company</h4>

        <div class="mt-3 grid space-y-3">
          <p>
            <a class="focus:outline-hidden inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
              href="#">
              About us
            </a>
          </p>
          <p>
            <a class="focus:outline-hidden inline-flex gap-x-2 text-gray-400 hover:text-gray-200 focus:text-gray-200 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200"
              href="#">
              Careers
            </a>
          </p>
        </div>
      </div>

      <div class="col-span-2">
        <h4 class="font-semibold text-gray-100">Stay up to date</h4>

        <form>
          <div
            class="mt-4 flex flex-col items-center gap-2 rounded-lg bg-white p-2 dark:bg-neutral-900 sm:flex-row sm:gap-3">
            <div class="w-full">
              <label for="hero-input" class="sr-only">Subscribe</label>
              <input type="text" id="hero-input" name="hero-input"
                class="block w-full rounded-lg border-transparent px-4 py-2.5 focus:border-secondary focus:ring-secondary disabled:pointer-events-none disabled:opacity-50 dark:border-transparent dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 sm:py-3 sm:text-sm"
                placeholder="Enter your email">
            </div>
            <a class="focus:outline-hidden inline-flex w-full items-center justify-center gap-x-2 whitespace-nowrap rounded-lg border border-transparent bg-blue-600 p-3 text-sm font-medium text-white hover:bg-blue-700 focus:bg-blue-700 disabled:pointer-events-none disabled:opacity-50 sm:w-auto"
              href="#">
              Subscribe
            </a>
          </div>
          <p class="mt-3 text-sm text-gray-400">
            Just updates & announcements. No spam.
          </p>
        </form>
      </div>
    </div>

    <div class="mt-5 grid gap-y-2 sm:mt-12 sm:flex sm:items-center sm:justify-between sm:gap-y-0">
      <div class="flex flex-wrap items-center justify-between gap-2">
        <p class="text-sm text-gray-400 dark:text-neutral-400">
          Copyright © 2025 {{ config('app.name') }}. All rights reserved.
        </p>
      </div>

      <div class="flex flex-col-reverse gap-x-1.5 sm:flex-row sm:items-center">
        <div>
          <a class="focus:outline-hidden inline-flex size-10 items-center justify-center gap-x-2 rounded-lg border border-transparent text-sm font-semibold text-white hover:bg-white/10 focus:bg-white/10 disabled:pointer-events-none disabled:opacity-50"
            href="#">
            <svg class="size-4 shrink-0" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
              fill="currentColor" viewBox="0 0 16 16">
              <path
                d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
            </svg>
          </a>
        </div>

        <div class="my-2 hidden sm:block md:mx-2 md:my-0">
          <div class="h-px w-full bg-gray-100 dark:bg-neutral-700 md:h-4 md:w-px md:bg-gray-300"></div>
        </div>

        <div class="flex items-center gap-x-1.5 text-gray-400 dark:text-neutral-400">
          <a class="focus:outline-hidden gap-x-2 whitespace-nowrap rounded-lg border border-transparent text-sm font-semibold hover:underline focus:underline disabled:pointer-events-none disabled:opacity-50"
            href="#">
            Privacy Policy
          </a>

          <a class="focus:outline-hidden gap-x-2 whitespace-nowrap rounded-lg border border-transparent text-sm font-semibold hover:underline focus:underline disabled:pointer-events-none disabled:opacity-50"
            href="#">
            Terms of Service
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
