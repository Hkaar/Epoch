@extends('layouts.app')

@section('title', 'Privacy Policy')

@section('content')
  <x-header path="privacy-policy" />

  <main class="my-4 flex min-h-screen flex-col gap-y-4">
    <section class="container">
      <h1 class="text-4xl font-bold uppercase">PRIVACY POLICY</h1>
    </section>

    <section class="container grid grid-cols-3">
      <x-card class="border-l-4 border-l-blue-400">
        <span class="flex items-center gap-x-2.5">
          <i data-lucide="info" class="stroke-blue-400"></i>

          <h3 class="text-lg font-bold text-gray-800 dark:text-white">
            Still a work in progress
          </h3>
        </span>
      </x-card>
    </section>
  </main>

  <x-footer path="privacy-policy" />
@endsection
