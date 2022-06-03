<x-patient-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Diagnosis') }}
      </h2>
  </x-slot>

  <form method="POST" action="{{ route('store-diagnosis', ['id' => request()->id]) }}">
      @csrf
      <div class="bg-gray-50 rounded shadow-lg p-5">
          <div class="flex justify-between">
              <p class="text-2xl text-gray-600 font-bold">
                  Diagnosis
              </p>
              <div>
                  <button
                      class="border border-teal-600 text-teal-800 hover:bg-teal-800 hover:text-white px-3 py-1 rounded-lg flex space-x-1 items-center">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                          stroke="currentColor" stroke-width="2">
                          <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
                      </svg>
                      <p>Save</p>
                  </button>
              </div>
          </div>
          <hr class="mt-4 mb-4" />

          <textarea placeholder="Enter Diagnosis" name="diagnosis" rows="3"
              class="p-1 pl-4 sm:text-md border-gray-300 border rounded-md h-44 w-full">{{ $patient_chart == null ? '' : $patient_chart->diagnosis }}</textarea>
      </div>
  </form>
</x-patient-layout>
