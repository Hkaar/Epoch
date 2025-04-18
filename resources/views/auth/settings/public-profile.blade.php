@extends('layouts.app')

@section('title', 'Settings - Public Profile')

@props(['user' => auth()->user()])

@section('content')
  <x-settings-layout path="public-profile">
    <form action="" method="post" class="flex flex-col gap-6">
      @csrf

      <section id="main" class="flex flex-col gap-3.5">
        <span class="mb-0.5 w-full text-2xl font-semibold">
          Public Profile
        </span>

        <x-card>
          <span class="mb-0.5 block text-lg font-medium dark:text-white">Profile picture</span>
          <span class="mb-3.5 block text-sm text-gray-400 dark:text-neutral-500">
            This will be displayed on your profile and posts
          </span>

          <div class="max-w-full">
            <div class="flex items-end gap-x-3.5">
              @if ($user->img)
                <img src="{{ Storage::url($user->img) }}" alt="Image failed to load!" class="size-32 rounded-full">
              @else
                <img src="{{ Vite::asset('resources/images/default-avatar.png') }}" alt="Image failed to load!" class="size-32 rounded-full">
              @endif

              <div class="max-w-sm">
                <label class="block">
                  <span class="sr-only">Choose profile photo</span>
                  <input type="file"
                    class="block w-full text-sm text-gray-500 file:me-4 file:rounded-lg file:border-0 file:bg-blue-600 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-white hover:file:bg-blue-700 file:disabled:pointer-events-none file:disabled:opacity-50 dark:text-neutral-500 dark:file:bg-blue-500 dark:hover:file:bg-blue-400">
                </label>
              </div>
            </div>
          </div>
        </x-card>

        <x-card>
          <span class="mb-0.5 block text-lg font-medium dark:text-white">Profile information</span>
          <span class="mb-3.5 block text-sm text-gray-400 dark:text-neutral-500">
            Update the info related to your profile
          </span>

          <div class="flex flex-col gap-2.5">
            <div class="max-w-full">
              <label for="name-label" class="mb-2 block text-sm font-medium dark:text-white">Name</label>
              <input type="text" id="name-label" name="name"
                class="block w-full rounded-lg border-gray-200 px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 sm:py-3 sm:text-sm"
                placeholder="Your name goes here ...">
            </div>

            <div class="max-w-full">
              <label for="gender-label" class="mb-2 block text-sm font-medium dark:text-white">Pronouns</label>
              <select id="gender-label" name="gender"
                class="block w-full rounded-lg border-gray-200 px-4 py-3 pe-9 text-sm focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600">
                <option selected="">Select a pronoun</option>
                <option>Male</option>
                <option>Female</option>
                <option>Other</option>
                <option>Don't specify</option>
              </select>
            </div>

            <div class="max-w-full">
              <label for="bio-label" class="mb-2 block text-sm font-medium dark:text-white">Bio</label>
              <textarea id="bio-label" name="bio"
                class="block w-full rounded-lg border-gray-200 px-3 py-2 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 sm:px-4 sm:py-3 sm:text-sm"
                rows="3" placeholder="Your bio goes here..."></textarea>
            </div>
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
