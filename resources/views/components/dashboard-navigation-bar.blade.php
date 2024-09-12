<header class="flex flex-wrap sm:justify-start sm:flex-nowrap w-full bg-white shadow-sm text-sm py-3 dark:bg-neutral-800">
  <nav class="w-full mx-auto px-6 sm:flex sm:items-center sm:justify-between">
    <div class="flex items-center justify-between">
      <span class="flex gap-3 items-center">
        <button type="button" class="btn side-bar-toggle border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:border-neutral-700 dark:text-white dark:hover:bg-white/10 p-2">
          <i class="material-symbols-outlined font-var-light">menu</i>
        </button>

        {{-- <x-breadcrumb></x-breadcrumb> --}}
      </span>

      <div class="sm:hidden">
        <button type="button" class="hs-collapse-toggle p-2 inline-flex justify-center items-center gap-x-2 rounded-lg bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-transparent dark:text-white dark:hover:bg-white/10" data-hs-collapse="#navbar-collapse-with-animation" aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
          <i class="material-symbols-outlined">more_vert</i>
        </button>
      </div>
    </div>

    <div id="navbar-collapse-with-animation" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
      <div class="flex flex-col gap-5 mt-5 sm:flex-row sm:items-center sm:justify-end sm:mt-0 sm:ps-5">

        <a class="font-medium text-red-600 hover:text-gray-400 dark:text-red-400 dark:hover:text-neutral-500 flex items-center gap-1" href="{{ route('logout') }}">
          <i class="material-symbols-outlined font-var-light">
            logout
          </i>
          Logout
        </a>
      </div>
    </div>
  </nav>
</header>