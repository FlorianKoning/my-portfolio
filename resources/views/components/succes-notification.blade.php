@props(['message', 'option'])

<div aria-live="assertive" class="pointer-events-none fixed inset-0 flex items-end px-4 py-12 sm:items-start sm:p-24" x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3500)">
    <div class="flex w-full flex-col items-center space-y-4 sm:items-end">
      <div class="pointer-events-auto w-full max-w-sm overflow-hidden rounded-lg bg-white shadow-lg ring-1 ring-black ring-opacity-5">
        <div class="p-4">
          <div class="flex items-start">
            <div class="flex-shrink-0">
              <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
              </svg>
            </div>
            <div class="ml-3 w-0 flex-1 pt-0.5">
              <p class="text-sm font-medium text-gray-900">Mail has been send</p>
              <p class="mt-1 text-sm text-gray-500">{{ $message }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
