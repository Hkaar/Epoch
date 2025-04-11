@extends('layouts.app')

@section('title', 'Settings - Privacy Controls')

@section('content')
  <x-settings-layout path="privacy-controls">
    <form action="" method="post" class="flex flex-col gap-6">
      @csrf

      <section id="main" class="flex flex-col gap-3.5">
        <span class="w-full border-b border-gray-200 pb-2.5 text-2xl font-semibold">
          Privacy Controls
        </span>

        <x-card>
          <span class="mb-0.5 block text-lg font-medium dark:text-white">Visibility</span>
          <span class="mb-3.5 block text-sm text-gray-400 dark:text-neutral-500">
            Control the visibility of your account
          </span>

          <div class="flex flex-col gap-2.5">
            <x-form-switch name="username-visibility" label="Visible username"
              hint="Controls whether your username can be seen publicly or not" />

            <x-form-switch name="account-visibility" label="Private Account"
              hint="Control whether public users can see your posts or only your friends can see them." />
          </div>
        </x-card>

        <x-card>
          <span class="mb-0.5 block text-lg font-medium dark:text-white">Telemetry</span>
          <span class="mb-3.5 block text-sm text-gray-400 dark:text-neutral-500">
            Chose what data we collect from you as a user of
            this platform
          </span>

          <div class="-m-1.5 overflow-x-auto">
            <div class="inline-block min-w-full p-1.5 align-middle">
              <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                  <thead>
                    <tr>
                      <th scope="col"
                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-neutral-500">
                        Type of data
                      </th>
                      <th scope="col"
                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-neutral-500">
                        Description
                      </th>
                      <th scope="col"
                        class="px-6 py-3 text-start text-xs font-medium uppercase text-gray-500 dark:text-neutral-500">
                        Status
                      </th>
                    </tr>
                  </thead>
                  <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                    <tr>
                      <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Device data
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">
                        Information about your device type, operating system, and browser to improve compatibility and
                        performance.
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium">
                        <x-form-switch name="telemetry-device-data" />
                      </td>
                    </tr>

                    <tr>
                      <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Crash data
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">
                        Error reports that help us identify and fix problems when the application crashes or experiences
                        issues.
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium">
                        <x-form-switch name="telemetry-crash-data" />
                      </td>
                    </tr>

                    <tr>
                      <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Activity
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">
                        Information about how you use features and interact with the application to improve user
                        experience.
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium">
                        <x-form-switch name="telemetry-activity-data" />
                      </td>
                    </tr>

                    <tr>
                      <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Linked services
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">
                        Data shared with third-party services you've connected to your account for enhanced functionality.
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium">
                        <x-form-switch name="telemetry-linked-services" />
                      </td>
                    </tr>

                    <tr>
                      <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Location data
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">
                        Geographic information that enables location-based features and regional customization.
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium">
                        <x-form-switch name="telemetry-location-data" />
                      </td>
                    </tr>

                    <tr>
                      <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Performance metrics
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">
                        Data about application speed, load times, and resource usage to optimize performance.
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium">
                        <x-form-switch name="telemetry-performance-data" />
                      </td>
                    </tr>

                    <tr>
                      <td class="whitespace-nowrap px-6 py-4 text-sm font-medium text-gray-800 dark:text-neutral-200">
                        Usage analytics
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-sm text-gray-800 dark:text-neutral-200">
                        Anonymized statistics about feature usage and engagement patterns to guide product development.
                      </td>
                      <td class="whitespace-nowrap px-6 py-4 text-end text-sm font-medium">
                        <x-form-switch name="telemetry-usage-analytics" />
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </x-card>
      </section>

      <div class="flex items-center gap-2">
        <x-button class="w-fit gap-x-2.5 bg-primary text-white">
          <i data-lucide="save"></i>
          Save changes
        </x-button>

        <x-button class="w-fit gap-x-2.5 bg-red-700 text-white">
          <i data-lucide="rotate-ccw"></i>
          Reset to default
        </x-button>
      </div>
    </form>
  </x-settings-layout>
@endsection
