@extends('layouts.app')

@section('title', 'Settings - Appearance')

@section('content')
  <x-settings-layout path="appearance">
    <form action="" method="post" class="flex flex-col gap-6">
      @csrf

      <section id="main" class="flex flex-col gap-3.5">
        <span class="mb-0.5 w-full text-2xl font-semibold">
          Appearance
        </span>

        <x-card>
          <span class="mb-0.5 block text-lg font-medium dark:text-white">Theme</span>
          <span class="mb-3.5 block text-sm text-gray-400 dark:text-neutral-500">
            Customize the theme of the app
          </span>

          <div class="grid grid-cols-3 gap-2.5">
            <x-button class="w-full flex-col items-center gap-y-3.5 border border-gray-200 px-4 py-4">
              <i data-lucide="monitor" class="size-16"></i>
              <span>Device</span>
            </x-button>

            <x-button class="w-full flex-col items-center gap-y-3.5 border border-gray-200 px-4 py-4">
              <i data-lucide="sun" class="size-16"></i>
              <span>Light</span>
            </x-button>

            <x-button class="w-full flex-col items-center gap-y-3.5 border border-gray-200 px-4 py-4">
              <i data-lucide="moon" class="size-16"></i>
              <span>Dark</span>
            </x-button>
          </div>
        </x-card>
      </section>

      <div class="flex items-center gap-2">
        <x-button class="w-fit gap-x-2.5 bg-primary text-white">
          <i data-lucide="save"></i>
          Save changes
        </x-button>
      </div>
    </form>
  </x-settings-layout>
@endsection
