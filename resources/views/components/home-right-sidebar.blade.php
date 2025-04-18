<aside {{ $attributes->twMerge(['class' => 'border-l border-gray-200']) }}>
  <div class="sticky top-16 flex flex-col gap-3.5 px-5 py-4">
    <div class="flex flex-col gap-3">
      <span class="font-bold">Following</span>

      <div class="flex max-h-[28rem] flex-col gap-y-1.5 overflow-y-auto pe-1.5">
        <x-mini-profile-card followed></x-mini-profile-card>
        <x-mini-profile-card></x-mini-profile-card>
        <x-mini-profile-card></x-mini-profile-card>
        <x-mini-profile-card></x-mini-profile-card>
        <x-mini-profile-card></x-mini-profile-card>
        <x-mini-profile-card></x-mini-profile-card>
        <x-mini-profile-card></x-mini-profile-card>
      </div>
    </div>
  </div>
</aside>
