@extends('layouts.app')

@section('title', 'Register')

@section('content')
  <section class="flex min-h-screen">
    <div class="container grid flex-1 place-items-center">
      <form action="{{ route('register.post') }}" method="post"
        class="flex flex-col gap-6 rounded-md border border-neutral-700 bg-neutral-950 px-6 py-10 shadow">
        @csrf

        <div class="flex flex-col items-center gap-1">
          <h1 class="text-center text-4xl font-bold">
            EPOCH
          </h1>
  
          <span class="text-center text-neutral-600 w-2/3">
            Fill out the details below for your new account
          </span>
        </div>

        <div class="flex flex-col gap-3">
          <div class="w-full">
            <label class="dark:text-white mb-2 block text-sm">Username</label>

            <div class="relative">
              <input type="text" name="username"
                class="peer block w-full rounded-lg border-neutral-700 bg-neutral-900 px-4 py-3 ps-11 text-sm text-neutral-400 placeholder-neutral-500 focus:ring-neutral-600 disabled:pointer-events-none disabled:opacity-50"
                placeholder="Username">

              <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-4 peer-disabled:pointer-events-none peer-disabled:opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
              </div>
            </div>
          </div>

          <div class="w-full">
            <label class="dark:text-white mb-2 block text-sm">Email</label>

            <div class="relative">
              <input type="email" name="email"
                class="peer block w-full rounded-lg border-neutral-700 bg-neutral-900 px-4 py-3 ps-11 text-sm text-neutral-400 placeholder-neutral-500 focus:ring-neutral-600 disabled:pointer-events-none disabled:opacity-50"
                placeholder="Email">

              <div class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-4 peer-disabled:pointer-events-none peer-disabled:opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                </svg>
              </div>
            </div>
          </div>

          <div class="w-full">
            <label class="dark:text-white mb-2 block text-sm">Password</label>

            <div class="relative">
              <div class="relative">
                <input id="password" type="password" name="password"
                  class="block w-full rounded-lg border-neutral-700 bg-neutral-900 py-3 pe-10 ps-11 text-sm text-neutral-400 placeholder-neutral-500 focus:ring-neutral-600 disabled:pointer-events-none disabled:opacity-50"
                  placeholder="Password">

                <button type="button" data-hs-toggle-password='{"target": "#password"}'
                  class="absolute inset-y-0 end-0 z-20 flex cursor-pointer items-center rounded-e-md px-3 text-neutral-600 focus:text-blue-500 focus:outline-none">

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

              <div
                class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-4 peer-disabled:pointer-events-none peer-disabled:opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                </svg>
              </div>
            </div>
          </div>

          <div class="w-full">
            <label class="dark:text-white mb-2 block text-sm">Password Confirmation</label>

            <div class="relative">
              <div class="relative">
                <input id="hs-password-confirmation" type="password" name="password_confirmation"
                  class="block w-full rounded-lg border-neutral-700 bg-neutral-900 py-3 pe-10 ps-11 text-sm text-neutral-400 placeholder-neutral-500 focus:ring-neutral-600 disabled:pointer-events-none disabled:opacity-50"
                  placeholder="Password Confirmation">

                <button type="button" data-hs-toggle-password='{"target": "#hs-password-confirmation"}'
                  class="absolute inset-y-0 end-0 z-20 flex cursor-pointer items-center rounded-e-md px-3 text-neutral-600 focus:text-blue-500 focus:outline-none">

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

              <div
                class="pointer-events-none absolute inset-y-0 start-0 flex items-center ps-4 peer-disabled:pointer-events-none peer-disabled:opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                  stroke="currentColor" class="size-4">
                  <path stroke-linecap="round" stroke-linejoin="round"
                    d="M15.75 5.25a3 3 0 0 1 3 3m3 0a6 6 0 0 1-7.029 5.912c-.563-.097-1.159.026-1.563.43L10.5 17.25H8.25v2.25H6v2.25H2.25v-2.818c0-.597.237-1.17.659-1.591l6.499-6.499c.404-.404.527-1 .43-1.563A6 6 0 1 1 21.75 8.25Z" />
                </svg>
              </div>
            </div>
          </div>

          <span class="text-gray-300">Already have an account? go on and
            <a href="{{ route('login') }}" class="text-blue-600 underline transition-colors duration-150 ease-in-out hover:text-blue-300">login straight away!</a>
          </span>
        </div>

        <x-button type="submit" class="bg-neutral-800 text-white hover:rounded-none px-4 py-3">
          Register

          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
          </svg>          
        </x-button>
      </form>
    </div>
  </section>
@endsection
