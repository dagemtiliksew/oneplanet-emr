<x-patient-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Summary') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-3 gap-2 bg-white rounded-md p-6">
        <div>
            <p class="font-semibold text-gray-700">Temperature</p>
            <p class="text-teal-600">{{ $patient_chart == null ? '' : $patient_chart->temperature }}</p>
        </div>

    </div>
</x-patient-layout>
