@extends('layouts.app')

@section('title', 'Settings - Account')

@section('content')
  <x-settings-layout path="account">
    <section id="main" class="flex flex-col gap-3.5">
      <span class="w-full border-b border-gray-200 pb-2.5 text-2xl font-semibold">
        Account
      </span>

      <x-card>
        <span class="mb-0.5 block text-lg font-medium dark:text-white">Account information</span>
        <span class="mb-3.5 block text-sm text-gray-400 dark:text-neutral-500">
          Update the info related to your account
        </span>

        <form action="" method="post" class="flex flex-col gap-2.5">
          @csrf

          <div class="max-w-full">
            <label for="email-label" class="mb-2 block text-sm font-medium dark:text-white">Email</label>
            <input type="email" id="email-label" name="email"
              class="block w-full rounded-lg border-gray-200 px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 sm:py-3 sm:text-sm"
              placeholder="Your email goes here ...">
          </div>

          <div class="max-w-full">
            <label for="username-label" class="mb-2 block text-sm font-medium dark:text-white">Username</label>
            <input type="text" id="username-label" name="username"
              class="block w-full rounded-lg border-gray-200 px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 sm:py-3 sm:text-sm"
              placeholder="Your username goes here ...">
          </div>

          <div class="mt-2 flex items-center gap-2">
            <x-button class="w-fit gap-x-2.5 bg-primary text-white">
              <i data-lucide="save"></i>
              Save changes
            </x-button>
          </div>
        </form>
      </x-card>

      <x-card>
        <span class="mb-0.5 block text-lg font-medium dark:text-white">Export data</span>
        <span class="mb-3.5 block text-sm text-gray-400 dark:text-neutral-500">
          Export all data related to your account
        </span>

        <x-link-button to="#" class="w-fit gap-x-2.5 rounded-lg bg-blue-400 text-white">
          <i data-lucide="download"></i>
          Start export
        </x-link-button>
      </x-card>

      <x-card>
        <span class="mb-0.5 block text-lg font-medium dark:text-white">Delete account</span>
        <span class="mb-3.5 block text-sm text-gray-400 dark:text-neutral-500">
          Permanently delete your account and all of your content.
        </span>

        <x-link-button to="#" class="w-fit gap-x-2.5 rounded-lg bg-red-700 text-white">
          <i data-lucide="trash-2"></i>
          Delete account
        </x-link-button>

        <span class="mt-3.5 block text-sm text-gray-400 dark:text-neutral-500">
          Once you delete your account, there is no going back. Please be certain.
        </span>
      </x-card>
    </section>
  </x-settings-layout>
@endsection
