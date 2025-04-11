<div {{ $attributes->twMerge(['class' => 'flex max-w-xl flex-col gap-1']) }}>
  <div class="flex items-center gap-x-2.5">
    <label for="{{ "{$name}-label" }}" class="relative inline-block h-6 w-11 cursor-pointer">
      <input type="checkbox" id="{{ "{$name}-label" }}" class="peer sr-only" name="{{ $name }}">
      <span
        class="absolute inset-0 rounded-full bg-gray-200 transition-colors duration-200 ease-in-out peer-checked:bg-blue-600 peer-disabled:pointer-events-none peer-disabled:opacity-50 dark:bg-neutral-700 dark:peer-checked:bg-blue-500"></span>
      <span
        class="shadow-xs absolute start-0.5 top-1/2 size-5 -translate-y-1/2 rounded-full bg-white transition-transform duration-200 ease-in-out peer-checked:translate-x-full dark:bg-neutral-400 dark:peer-checked:bg-white"></span>
    </label>

    @if (isset($label))
      <span class="block text-sm font-medium dark:text-white">{{ $label }}</span>
    @endif
  </div>

  @if (isset($hint))
    <span class="text-sm text-gray-400">
      {{ $hint }}
    </span>
  @endif
</div>
