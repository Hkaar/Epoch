<div {{ $attributes->twMerge(["class" => "dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 flex flex-col rounded-xl border border-gray-200 bg-white shadow-sm"]) }}>
  @if (isset($header) && !$header->isEmpty())
    {{ $header }}
  @endif

  <div class="w-full flex-1 p-4 md:p-5">
    {{ $slot }}
  </div>

  @if (isset($footer) && !$footer->isEmpty())
    {{ $footer }}
  @endif
</div>
