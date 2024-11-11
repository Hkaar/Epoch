@extends('layouts.app')

@section('title', 'Epoch')

@section('content')
  <div class="flex min-h-screen">
    <x-dashboard-side-navigation active="home"></x-dashboard-side-navigation>
    <div>
      <div class="py-16 text-center">
        <button type="button"
          class="dark:bg-white dark:text-neutral-800 dark:hover:bg-neutral-200 dark:focus:bg-neutral-200 inline-flex items-center justify-center gap-x-2 rounded-lg border border-gray-800 bg-gray-800 px-3 py-2 text-start align-middle text-sm font-medium text-white shadow-sm hover:bg-gray-950 focus:bg-gray-900 focus:outline-none"
          aria-haspopup="dialog" aria-expanded="false" aria-controls="sidebar"
          aria-label="Toggle navigation" data-hs-overlay="#sidebar">
          Open
        </button>
      </div>

      <h3>sdadsad</h3>
    </div>
</div @endsection
