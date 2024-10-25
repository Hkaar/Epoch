@extends('layouts.app')

@section('title', 'Dashboard - Users')

@php
  $title = 'user';

  $columns = [
    ['width' => 5, 'name' => 'ID'],
    'Username',
    'Email',
    'Role',
    ['width' => 18, 'name' => 'Actions']
  ];

  $routes = [
    'create' => route('admin.users.create'),
  ];
@endphp

@section('content')
<x-dashboard-layout active="user">
  <x-data-table :columns="$columns" :title="$title" :routes="$routes">
    @foreach ($users as $i => $user)
      <tr
        class="dark:odd:bg-neutral-800 dark:even:bg-neutral-700 dark:hover:bg-neutral-700 odd:bg-white even:bg-gray-100 hover:bg-gray-100">
        <td class="dark:text-neutral-200 whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-800">
          {{ $i + 1 }}
        </td>
        <td class="dark:text-neutral-200 whitespace-nowrap px-6 py-4 text-sm text-gray-800">
          {{ $user->username }}
        </td>
        <td class="dark:text-neutral-200 whitespace-nowrap px-6 py-4 text-sm text-gray-800">
          {{ $user->email }}
        </td>
        <td class="dark:text-neutral-200 whitespace-nowrap px-6 py-4 text-sm text-gray-800">
          {{ $user->role->name }}
        </td>
        <td class="whitespace-nowrap flex gap-2 px-6 py-4 text-end text-sm font-medium">
          <a href="{{ route('admin.users.edit', $user->id) }}" class="btn bg-caution text-white flex items-center gap-2">
            <i class="material-symbols-outlined font-var-light">edit</i>
            Edit
          </a>

          <button type="button" class="btn bg-danger text-white flex items-center gap-2"
            hx-confirm="user" hx-headers='{"X-CSRF-TOKEN": "{{ csrf_token() }}"}'
            hx-delete="{{ route('admin.users.destroy', $user->id) }}" hx-target="closest tr" hx-swap="outerHTML"
            delete-confirmation>
            <i class="material-symbols-outlined font-var-light">delete</i>
            Hapus
          </button>

          <a href="{{ route('admin.users.show', $user->id) }}" class="btn bg-info text-white flex items-center gap-2">
            <i class="material-symbols-outlined font-var-light">info</i>
            Info
          </a>
        </td>
      </tr>
    @endforeach

    <x-slot name="footer">
      <div class="flex justify-between">
        <x-paginate-links :links="$users"></x-paginate-links>

        <x-paginate-counter :items="$users"></x-paginate-counter>
      </div>
    </x-slot>
  </x-data-table>
</x-dashboard-layout>
@endsection