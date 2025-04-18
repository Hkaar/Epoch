<aside {{ $attributes->twMerge(['class' => 'flex flex-col gap-y-3.5 overflow-y-auto bg-white']) }}>
  <a href="{{ route('home') }}" class="flex items-center gap-x-2.5 rounded-lg px-4 py-3 transition-all delay-75 ease-in-out hover:bg-red-700 hover:text-white">
    <i data-lucide="arrow-left"></i>

    Back to home
  </a>

  <div class="flex flex-col gap-y-0.5">
    <a href="{{ $path === 'public-profile' ? '#' : route('settings.public-profile') }}"
      class="{{ $path === 'public-profile' ? 'bg-gray-200 stroke-white' : 'hover:bg-gray-200 hover:stroke-white active:opacity-90 active:scale-95' }} flex items-center gap-x-2.5 rounded-lg px-4 py-3 transition-all delay-75 ease-in-out">
      <i data-lucide="user"></i>

      Public Profile
    </a>

    <a href="{{ $path === 'account' ? '#' : route('settings.account') }}"
      class="{{ $path === 'account' ? 'bg-gray-200 stroke-white' : 'hover:bg-gray-200 hover:stroke-white active:opacity-90 active:scale-95' }} easeinease-in-outr flex items-center gap-x-2.5 rounded-lg px-4 py-3 transition-all delay-150">
      <i data-lucide="settings"></i>

      Account
    </a>

    <a href="{{ $path === 'appearance' ? '#' : route('settings.appearance') }}"
      class="{{ $path === 'appearance' ? 'bg-gray-200 stroke-white' : 'hover:bg-gray-200 hover:stroke-white active:opacity-90 active:scale-95' }} flex items-center gap-x-2.5 rounded-lg px-4 py-3 transition-all delay-75 ease-in-out">
      <i data-lucide="brush"></i>

      Appearance
    </a>

    <a href="{{ $path === 'privacy-controls' ? '#' : route('settings.privacy-controls') }}"
      class="{{ $path === 'privacy-controls' ? 'bg-gray-200 stroke-white' : 'hover:bg-gray-200 hover:stroke-white active:opacity-90 active:scale-95' }} flex items-center gap-x-2.5 rounded-lg px-4 py-3 transition-all delay-75 ease-in-out">
      <i data-lucide="lock"></i>

      Privacy Controls
    </a>

    <a href="{{ $path === 'security' ? '#' : route('settings.security') }}"
      class="{{ $path === 'security' ? 'bg-gray-200 stroke-white' : 'hover:bg-gray-200 hover:stroke-white active:opacity-90 active:scale-95' }} easeinease-in-outr flex items-center gap-x-2.5 rounded-lg px-4 py-3 transition-all delay-150">
      <i data-lucide="shield"></i>

      Security
    </a>
  </div>
</aside>
