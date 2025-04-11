<a href="{{ $to }}"
  {{ $attributes->twMerge(['class' => 'btn rounded-lg px-3 py-2 flex hover:opacity-90 justify-center duration-100 ease-in-out active:scale-95 active:opacity-75 disabled:pointer-events-none disabled:opacity-50 w-fit']) }}>
  {{ $slot }}
</a>
