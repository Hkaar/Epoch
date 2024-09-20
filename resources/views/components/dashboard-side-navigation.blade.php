<aside id="sidebar" {{ $attributes->merge([ 'class' => 'hs-overlay [--auto-close:lg] hs-overlay-open:translate-x-0 -translate-x-full transition-all duration-300 transform hidden fixed lg:relative top-0 start-0 bottom-0 z-[60] w-64 bg-white border-e border-gray-200 pt-7 pb-10 overflow-y-auto lg:block lg:translate-x-0 lg:end-auto lg:bottom-0 [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-500 dark:bg-neutral-800 dark:border-neutral-700' ]) }} tabindex="-1" aria-label="Sidebar">
  <div class="px-6">
    <a class="flex-none font-semibold text-xl text-black focus:outline-none focus:opacity-80 dark:text-white" href="#" aria-label="Brand">
      Epoch
    </a>
  </div>
  <nav class="hs-accordion-group p-6 w-full flex flex-col flex-wrap" data-hs-accordion-always-open>
    <ul class="space-y-1.5">
      <li>
        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-sm text-gray-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-700 dark:text-white {{ $active === 'home' ? 'bg-gray-100' : '' }}" 
          href="{{ $active === 'home' ? '#' : route('admin.home') }}">
          <i class="material-symbols-outlined font-var-light">home</i>
          Dashboard
        </a>
      </li>

      <li>
        <a class="flex items-center gap-x-3.5 py-2 px-2.5 text-gray-700 rounded-lg hover:bg-gray-100 dark:bg-neutral-700 dark:text-white {{ $active === 'user' ? 'bg-gray-100' : '' }}" 
          href="{{ $active === 'user' ? '#' : route('admin.users.index') }}">
          <i class="material-symbols-outlined font-var-light">person</i>
          Users
        </a>
      </li>

      <li class="hs-accordion" id="content-accordion">
        <button type="button"
          class="hs-accordion-toggle dark:bg-neutral-800 dark:text-neutral-400 dark:hs-accordion-active:text-white dark:hover:bg-neutral-700 dark:hover:text-neutral-300 dark:focus:bg-neutral-700 dark:focus:text-neutral-300 flex w-full items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-start text-sm text-gray-700 hover:bg-gray-100 focus:bg-gray-100 focus:outline-none hs-accordion-active:text-blue-600 hs-accordion-active:hover:bg-transparent"
          aria-expanded="true" aria-controls="content-accordion">
          <i class="material-symbols-outlined font-var-light">folder</i>
          Content

          <svg
            class="size-4 dark:text-neutral-400 ms-auto hidden text-gray-600 group-hover:text-gray-500 hs-accordion-active:block"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m18 15-6-6-6 6" />
          </svg>

          <svg
            class="size-4 dark:text-neutral-400 ms-auto block text-gray-600 group-hover:text-gray-500 hs-accordion-active:hidden"
            xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
            stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
            <path d="m6 9 6 6 6-6" />
          </svg>
        </button>

        <div id="content-accordion"
          class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region"
          aria-labelledby="content-accordion">
          <ul class="ps-2 pt-2">
            <li>
              <a class="dark:bg-neutral-800 dark:text-neutral-400 flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-700 focus:outline-none {{ $active === 'posts' ? 'bg-gray-100' : 'hover:bg-gray-100 focus:bg-gray-100 dark:hover:text-neutral-300 dark:focus:text-neutral-300' }}"
                href="{{ $active === 'post' ? '#' : route('admin.posts.index') }}">
                <i class="material-symbols-outlined font-var-light">message</i>
                Posts
              </a>
            </li>
            <li>
              <a class="dark:bg-neutral-800 dark:text-neutral-400 flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-700  focus:outline-none {{ $active === 'comments' ? 'bg-gray-100' : 'hover:bg-gray-100 focus:bg-gray-100 dark:hover:text-neutral-300 dark:focus:text-neutral-300' }}"
                href="{{ $active === 'comment' ? '#' : route('admin.comments.index') }}">
                <i class="material-symbols-outlined font-var-light">comment</i>
                Comments
              </a>
            </li>
            <li>
              <a class="dark:bg-neutral-800 dark:text-neutral-400 flex items-center gap-x-3.5 rounded-lg px-2.5 py-2 text-sm text-gray-700 focus:outline-none {{ $active === 'replies' ? 'bg-gray-100' : 'hover:bg-gray-100 focus:bg-gray-100 dark:hover:text-neutral-300 dark:focus:text-neutral-300' }}"
                href="{{ $active === 'reply' ? '#' : route('admin.replies.index') }}">
                <i class="material-symbols-outlined font-var-light">mode_comment</i>
                Replies
              </a>
            </li>
          </ul>
        </div>
      </li>
    </ul>
  </nav>
</aside>
