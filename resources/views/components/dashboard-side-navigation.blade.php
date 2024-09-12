<aside id="sideBar" class="min-w-16 fixed top-0 z-20 h-screen -translate-x-full overflow-y-auto bg-white px-6 py-4 shadow-xl transition-all duration-300 ease-in-out dark:bg-gray-600 dark:text-white md:h-auto md:min-h-screen md:w-auto lg:relative lg:translate-x-0">
  <!-- This div is here because of tailwind not registering classes properly -->

  <div class="lg:min-w-72 hidden h-screen min-w-full ps-3"></div>

  <div class="flex flex-col justify-center gap-4">
    <div class="flex items-center justify-between">
      <span class="flex items-center gap-2">
        @if (auth()->check() && auth()->user()->img)
          <img src="{{ Storage::url(auth()->user()->img) }}" alt="Image not available" class="size-12 rounded-full">
        @else
          <img src="{{ Vite::asset('resources/images/default-avatar.png') }}" alt="Image not available"
            class="size-12 rounded-full">
        @endif

        @if (auth()->user())
          <a href="{{ route('/') }}" class="menu-text hidden">{{ auth()->user()->username }}</a>
        @else
          <a href="{{ route('/') }}" class="menu-text hidden">User</a>
        @endif
      </span>

      <button class="side-bar-toggle btn lg:hidden">
        <i class="material-symbols-outlined font-var-light">close</i>
      </button>
    </div>

    <hr>

    <div class="space-y-8">
      <a href="{{ $active === 'home' ? '#' : route('admin.home') }}" class="side-nav-item {{ $active === 'home' ? 'active' : '' }}">
        <i class="material-symbols-outlined font-var-light">home</i>
        <span class="menu-text me-auto hidden">Home</span>
      </a>

      <div class="flex flex-col justify-center gap-2">
        <span class="menu-text hidden font-medium">
          Management
        </span>

        <a href="{{ $active === 'user' ? '#' : route('admin.users.index') }}" class="side-nav-item {{ $active === 'user' ? 'active' : '' }}">
          <i class="material-symbols-outlined font-var-light">person</i>
          <span class="menu-text me-auto hidden">Users</span>
        </a>
      </div>

      <div class="flex flex-col justify-center gap-2">
        <span class="menu-text hidden font-medium">
          Content
        </span>

        <a href="{{ $active === 'post' ? '#' : route('admin.posts.index') }}" class="side-nav-item {{ $active === 'post' ? 'active' : '' }}">
          <i class="material-symbols-outlined font-var-light">message</i>
          <span class="menu-text me-auto hidden">Posts</span>
        </a>

        <a href="{{ $active === 'comment' ? '#' : route('admin.comments.index') }}" class="side-nav-item {{ $active === 'comment' ? 'active' : '' }}">
          <i class="material-symbols-outlined font-var-light">comment</i>
          <span class="menu-text me-auto hidden">Comments</span>
        </a>

        <a href="{{ $active === 'reply' ? '#' : route('admin.replies.index') }}" class="side-nav-item {{ $active === 'reply' ? 'active' : '' }}">
          <i class="material-symbols-outlined font-var-light">mode_comment</i>
          <span class="menu-text me-auto hidden">Replies</span>
        </a>
      </div>
    </div>
  </div>
</aside>
