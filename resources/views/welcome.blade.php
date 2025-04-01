@extends('layouts.app')

@section('title', 'Epoch')

@section('content')
  <x-header />

  <main class="mb-8 min-h-screen space-y-6 md:space-y-8 lg:space-y-12 xl:space-y-24">
    <section id="hero" class="container grid min-h-[50rem] grid-cols-2">
      <div class="flex flex-col justify-center gap-4">
        <h1 class="text-7xl font-black">
          Discuss without worries
        </h1>

        <p class="text-xl font-medium text-gray-400">
          Discuss & talk to people around the world without worrying about your privacy being violated
        </p>

        <div class="mt-2 flex items-center gap-2">
          <x-button class="gap-x-2.5 bg-primary px-4 text-white">
            Get Started
            <i data-lucide="rocket"></i>
          </x-button>
        </div>
      </div>
    </section>

    <section id="about" class="container grid grid-cols-2 items-center">
      <div></div>

      <div class="flex flex-col gap-4">
        <div class="flex items-center gap-x-2.5">
          <i data-lucide="box" class="size-10 stroke-[2]"></i>

          <h2 class="text-5xl font-bold">
            What is Epoch?
          </h2>
        </div>

        <p class="w-11/12 text-lg tracking-wide text-gray-400">
          Epoch is a social discussion platform focused on providing a place
          where users from all over the world can talk about their ideas and thoughts,
          without having to worry about their privacy.
        </p>

        <div class="flex items-center gap-x-2.5">
          <x-button class="gap-x-2.5 bg-blue-300 text-white">
            Learn more

            <i data-lucide="arrow-up-right"></i>
          </x-button>
        </div>
      </div>
    </section>

    <section id="features" class="container grid grid-cols-1 items-center space-y-6">
      <div class="flex items-center justify-center gap-x-2.5">
        <i data-lucide="layout-grid" class="size-10 stroke-[2]"></i>

        <h2 class="text-5xl font-bold">
          Features
        </h2>
      </div>

      <div class="grid grid-cols-4 gap-3.5">
        <x-card>
          <div class="flex items-center gap-x-1.5">
            <i data-lucide="lock"></i>
            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
              Privacy focused
            </h3>
          </div>
          <p class="mt-2 text-gray-500 dark:text-neutral-400">
            Some quick example text to build on the card title and make up the bulk of the card's content.
          </p>
        </x-card>

        <x-card>
          <div class="flex items-center gap-x-1.5">
            <i data-lucide="carrot"></i>
            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
              Easy to use
            </h3>
          </div>
          <p class="mt-2 text-gray-500 dark:text-neutral-400">
            Some quick example text to build on the card title and make up the bulk of the card's content.
          </p>
        </x-card>

        <x-card>
          <div class="flex items-center gap-x-1.5">
            <i data-lucide="zap"></i>
            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
              Fast
            </h3>
          </div>
          <p class="mt-2 text-gray-500 dark:text-neutral-400">
            Some quick example text to build on the card title and make up the bulk of the card's content.
          </p>
        </x-card>

        <x-card>
          <div class="flex items-center gap-x-1.5">
            <i data-lucide="earth"></i>
            <h3 class="text-lg font-bold text-gray-800 dark:text-white">
              Anywhere
            </h3>
          </div>
          <p class="mt-2 text-gray-500 dark:text-neutral-400">
            Some quick example text to build on the card title and make up the bulk of the card's content.
          </p>
        </x-card>
      </div>
    </section>

    <section id="testimonials" class="container grid grid-cols-1 items-center gap-y-5">
      <div class="flex items-center justify-center gap-x-2.5">
        <i data-lucide="message-circle" class="size-10 stroke-[2]"></i>

        <h2 class="text-5xl font-bold">
          Testimonials
        </h2>
      </div>

      <div class="grid grid-cols-3 gap-2.5">
        <x-card>
          <p class="text-base italic text-gray-800 dark:text-neutral-200 md:text-lg">
            " With Preline, we're able to easily track our performance in full detail. It's become an essential tool for
            us to grow and engage with our audience. "
          </p>

          <x-slot name="footer">
            <div class="rounded-b-xl bg-gray-100 p-4 dark:bg-neutral-800 md:px-7">
              <div class="flex items-center gap-x-3">
                <div class="shrink-0">
                  <img class="sm:size-11.5 size-8 rounded-full"
                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                    alt="Avatar">
                </div>

                <div class="grow">
                  <p class="text-sm font-semibold text-gray-800 dark:text-neutral-200 sm:text-base">
                    Josh Tyson
                  </p>
                  <p class="text-xs text-gray-500 dark:text-neutral-400">
                    Product Manager | Capsule
                  </p>
                </div>
              </div>
            </div>
          </x-slot>
        </x-card>

        <x-card>
          <p class="text-base italic text-gray-800 dark:text-neutral-200 md:text-lg">
            " With Preline, we're able to easily track our performance in full detail. It's become an essential tool for
            us to grow and engage with our audience. "
          </p>

          <x-slot name="footer">
            <div class="rounded-b-xl bg-gray-100 p-4 dark:bg-neutral-800 md:px-7">
              <div class="flex items-center gap-x-3">
                <div class="shrink-0">
                  <img class="sm:size-11.5 size-8 rounded-full"
                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                    alt="Avatar">
                </div>

                <div class="grow">
                  <p class="text-sm font-semibold text-gray-800 dark:text-neutral-200 sm:text-base">
                    Josh Tyson
                  </p>
                  <p class="text-xs text-gray-500 dark:text-neutral-400">
                    Product Manager | Capsule
                  </p>
                </div>
              </div>
            </div>
          </x-slot>
        </x-card>

        <x-card>
          <p class="text-base italic text-gray-800 dark:text-neutral-200 md:text-lg">
            " With Preline, we're able to easily track our performance in full detail. It's become an essential tool for
            us to grow and engage with our audience. "
          </p>

          <x-slot name="footer">
            <div class="rounded-b-xl bg-gray-100 p-4 dark:bg-neutral-800 md:px-7">
              <div class="flex items-center gap-x-3">
                <div class="shrink-0">
                  <img class="sm:size-11.5 size-8 rounded-full"
                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80"
                    alt="Avatar">
                </div>

                <div class="grow">
                  <p class="text-sm font-semibold text-gray-800 dark:text-neutral-200 sm:text-base">
                    Josh Tyson
                  </p>
                  <p class="text-xs text-gray-500 dark:text-neutral-400">
                    Product Manager | Capsule
                  </p>
                </div>
              </div>
            </div>
          </x-slot>
        </x-card>
      </div>
    </section>

    <section id="faq" class="container grid grid-cols-2 items-center">
      <div class="flex flex-col gap-4">
        <div class="flex items-center gap-x-2.5">
          <i data-lucide="circle-help" class="size-10 stroke-[2]"></i>

          <h2 class="text-5xl font-bold">
            FAQ
          </h2>
        </div>

        <p class="w-11/12 text-lg tracking-wide text-gray-400">
          Some of the more frequently asked questions about Epoch.
        </p>
      </div>

      <div class="hs-accordion-group">
        <div
          class="hs-accordion rounded-xl border border-transparent bg-white hs-accordion-active:border-gray-200 dark:border-transparent dark:bg-neutral-800 dark:hs-accordion-active:border-neutral-700"
          id="hs-active-bordered-heading-one">
          <button
            class="hs-accordion-toggle dark:focus:outline-hidden inline-flex w-full items-center justify-between gap-x-3 px-5 py-4 text-start font-semibold text-gray-800 hover:text-gray-500 disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-blue-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 dark:hs-accordion-active:text-blue-500"
            aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-one">
            Why create this?
            <svg class="block size-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5v14"></path>
            </svg>
            <svg class="hidden size-3.5 hs-accordion-active:block" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
            </svg>
          </button>
          <div id="hs-basic-active-bordered-collapse-one"
            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region"
            aria-labelledby="hs-active-bordered-heading-one">
            <div class="px-5 pb-4">
              <p class="text-gray-800 dark:text-neutral-200">
                <em>This is the third item's accordion body.</em> It is hidden by default, until the collapse plugin adds
                the appropriate classes that we use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions.
              </p>
            </div>
          </div>
        </div>

        <div
          class="hs-accordion active rounded-xl border border-transparent bg-white hs-accordion-active:border-gray-200 dark:border-transparent dark:bg-neutral-800 dark:hs-accordion-active:border-neutral-700"
          id="hs-active-bordered-heading-two">
          <button
            class="hs-accordion-toggle dark:focus:outline-hidden inline-flex w-full items-center justify-between gap-x-3 px-5 py-4 text-start font-semibold text-gray-800 hover:text-gray-500 disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-blue-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 dark:hs-accordion-active:text-blue-500"
            aria-expanded="true" aria-controls="hs-basic-active-bordered-collapse-two">
            What's the platform about?
            <svg class="block size-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5v14"></path>
            </svg>
            <svg class="hidden size-3.5 hs-accordion-active:block" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
            </svg>
          </button>
          <div id="hs-basic-active-bordered-collapse-two"
            class="hs-accordion-content w-full overflow-hidden transition-[height] duration-300" role="region"
            aria-labelledby="hs-active-bordered-heading-two">
            <div class="px-5 pb-4">
              <p class="text-gray-800 dark:text-neutral-200">
                <em>This is the second item's accordion body.</em> It is hidden by default, until the collapse plugin adds
                the appropriate classes that we use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions.
              </p>
            </div>
          </div>
        </div>

        <div
          class="hs-accordion rounded-xl border border-transparent bg-white hs-accordion-active:border-gray-200 dark:border-transparent dark:bg-neutral-800 dark:hs-accordion-active:border-neutral-700"
          id="hs-active-bordered-heading-three">
          <button
            class="hs-accordion-toggle dark:focus:outline-hidden inline-flex w-full items-center justify-between gap-x-3 px-5 py-4 text-start font-semibold text-gray-800 hover:text-gray-500 disabled:pointer-events-none disabled:opacity-50 hs-accordion-active:text-blue-600 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 dark:hs-accordion-active:text-blue-500"
            aria-expanded="false" aria-controls="hs-basic-active-bordered-collapse-three">
            Why should i use this?
            <svg class="block size-3.5 hs-accordion-active:hidden" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
              <path d="M12 5v14"></path>
            </svg>
            <svg class="hidden size-3.5 hs-accordion-active:block" xmlns="http://www.w3.org/2000/svg" width="24"
              height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
              stroke-linecap="round" stroke-linejoin="round">
              <path d="M5 12h14"></path>
            </svg>
          </button>
          <div id="hs-basic-active-bordered-collapse-three"
            class="hs-accordion-content hidden w-full overflow-hidden transition-[height] duration-300" role="region"
            aria-labelledby="hs-active-bordered-heading-three">
            <div class="px-5 pb-4">
              <p class="text-gray-800 dark:text-neutral-200">
                <em>This is the first item's accordion body.</em> It is hidden by default, until the collapse plugin adds
                the appropriate classes that we use to style each element. These classes control the overall appearance,
                as well as the showing and hiding via CSS transitions.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="contact" class="container grid grid-cols-1 gap-8">
      <div class="flex flex-col gap-4">
        <div class="flex items-center gap-x-2.5">
          <i data-lucide="phone" class="size-10 stroke-[2]"></i>

          <h2 class="text-5xl font-bold">
            Contact us!
          </h2>
        </div>

        <p class="text-lg tracking-wide text-gray-400">
          Need help or have any questions? you can contact us with the info below.
        </p>
      </div>

      <div class="grid grid-cols-2 items-center gap-8">
        <form action="" method="POST" class="flex flex-col gap-4 rounded-xl border border-gray-200 px-6 py-5">
          <div class="max-w-full">
            <label for="input-label" class="mb-2 block text-sm font-medium dark:text-white">Name</label>
            <input type="text" id="input-label"
              class="block w-full rounded-lg border-gray-200 px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 sm:py-3 sm:text-sm"
              placeholder="Ex: John Doe">
          </div>

          <div class="max-w-full">
            <label for="input-label" class="mb-2 block text-sm font-medium dark:text-white">Email</label>
            <input type="email" id="input-label"
              class="block w-full rounded-lg border-gray-200 px-4 py-2.5 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 sm:py-3 sm:text-sm"
              placeholder="Ex: john@example.com">
          </div>

          <div class="max-w-full">
            <label for="textarea-label" class="mb-2 block text-sm font-medium dark:text-white">Message</label>
            <textarea id="textarea-label"
              class="block w-full rounded-lg border-gray-200 px-3 py-2 focus:border-blue-500 focus:ring-blue-500 disabled:pointer-events-none disabled:opacity-50 dark:border-neutral-700 dark:bg-neutral-900 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600 sm:px-4 sm:py-3 sm:text-sm"
              rows="3" placeholder="Ex: Hello! i have a question about ..."></textarea>
          </div>

          <x-button class="mt-2 w-fit items-center gap-x-2.5 bg-primary text-white">
            Submit
            <i data-lucide="send"></i>
          </x-button>
        </form>

        <div class="grid grid-cols-2 gap-3">
          <x-card>
            <div class="flex items-center gap-x-2.5">
              <i data-lucide="phone"></i>
              <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                Phone
              </h3>
            </div>
            <p class="mt-2 text-gray-500 dark:text-neutral-400">
              +62 08294453423
            </p>
          </x-card>

          <x-card>
            <div class="flex items-center gap-x-2.5">
              <i data-lucide="mail"></i>
              <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                Email
              </h3>
            </div>
            <p class="mt-2 text-gray-500 dark:text-neutral-400">
              support@epoch.com
            </p>
          </x-card>

          <x-card>
            <div class="flex items-center gap-x-2.5">
              <svg role="img" class="size-5 stroke-[1.5]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>YouTube</title>
                <path
                  d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z" />
              </svg>
              <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                Youtube
              </h3>
            </div>
            <p class="mt-2 text-gray-500 dark:text-neutral-400">
              @epoch_platform
            </p>
          </x-card>

          <x-card>
            <div class="flex items-center gap-x-2.5">
              <svg role="img" class="size-5 stroke-[1.5]" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <title>GitHub</title>
                <path
                  d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12" />
              </svg>
              <h3 class="text-lg font-bold text-gray-800 dark:text-white">
                Github
              </h3>
            </div>
            <p class="mt-2 text-gray-500 dark:text-neutral-400">
              @epoch
            </p>
          </x-card>
        </div>
      </div>
    </section>
  </main>

  <x-footer />
@endsection
