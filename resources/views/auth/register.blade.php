@extends('layouts.app')

@section('title', 'Register')

@section('content')
  <main class="flex min-h-screen flex-col">
    <section class="grid flex-1 grid-cols-2 items-center">
      <div class="flex flex-col items-center gap-4">
        <i data-lucide="box" class="size-96"></i>

        <a href="{{ route('/') }}">
          <h1 class="text-5xl font-extrabold uppercase">{{ config('app.name') }}</h1>
        </a>
      </div>

      <form action="{{ route('register.post') }}" method="POST" class="flex flex-col gap-3.5">
        @csrf

        <div class="max-w-lg">
          <label for="username-label" class="mb-2 block text-sm font-medium dark:text-white">Username</label>
          <input type="text" id="username-label" name="username"
            class="block w-full rounded-lg border-gray-200 px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 sm:py-3 sm:text-sm"
            placeholder="Enter a username">
        </div>

        <div class="max-w-lg">
          <label for="email-label" class="mb-2 block text-sm font-medium dark:text-white">Email</label>
          <input type="email" id="email-label" name="email"
            class="block w-full rounded-lg border-gray-200 px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 sm:py-3 sm:text-sm"
            placeholder="Enter a valid email">
        </div>

        <div class="max-w-lg">
          <label class="mb-2 block text-sm dark:text-white">Password</label>

          <div class="relative">
            <input id="hs-toggle-password" type="password" name="password"
              class="block w-full rounded-lg border-gray-200 py-2.5 pe-10 ps-4 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 sm:py-3 sm:text-sm"
              placeholder="Enter a password">
            <button type="button" data-hs-toggle-password='{
        "target": "#hs-toggle-password"
      }'
              class="focus:outline-hidden absolute inset-y-0 end-0 z-20 flex cursor-pointer items-center rounded-e-md px-3 text-gray-400 focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
              <svg class="size-3.5 shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                <path class="hs-password-active:hidden"
                  d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                <path class="hs-password-active:hidden"
                  d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22">
                </line>
                <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
              </svg>
            </button>
          </div>
        </div>

        <div class="max-w-lg">
          <label class="mb-2 block text-sm dark:text-white">Re-enter password</label>

          <div class="relative">
            <input id="hs-toggle-password" type="password" name="password_confirmation"
              class="block w-full rounded-lg border-gray-200 py-2.5 pe-10 ps-4 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 sm:py-3 sm:text-sm"
              placeholder="Re-enter your password">
            <button type="button" data-hs-toggle-password='{
        "target": "#hs-toggle-password"
      }'
              class="focus:outline-hidden absolute inset-y-0 end-0 z-20 flex cursor-pointer items-center rounded-e-md px-3 text-gray-400 focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
              <svg class="size-3.5 shrink-0" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                <path class="hs-password-active:hidden"
                  d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                <path class="hs-password-active:hidden"
                  d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22">
                </line>
                <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
              </svg>
            </button>
          </div>
        </div>


        <p class="tracking-wide text-gray-400">
          Already have an account?
          <a class="text-blue-400 underline" href="{{ route('login') }}">
            login
          </a>
          now!
        </p>

        <div class="mt-3.5 flex items-center gap-x-2.5">
          <x-button class="gap-x-2.5 bg-primary text-white">
            Register

            <i data-lucide="log-in" class="size-5"></i>
          </x-button>
        </div>
      </form>
    </section>

    <x-simple-footer class="col-span-2" />
  </main>
@endsection
