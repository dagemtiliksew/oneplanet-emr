<x-patient-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Summary') }}
        </h2>
    </x-slot>

   <div class="bg-white rounded-md p-6">
    <p class="mt-5 text-lg font-semibold">Chief Complaints</p>
    <div>
        {{ $patient_chart == null ? '' : $patient_chart->chief_complaints }}
    </div>

    <p class="mt-5 text-lg font-semibold">Vital Signs</p>
    <div class="grid grid-cols-3 gap-2 ">
        <div>
            <p class="font-semibold text-gray-700">Temperature</p>
            <p class="text-teal-600">{{ $patient_chart == null ? '' : $patient_chart->temperature }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">Pulse</p>
            <p class="text-teal-600">{{ $patient_chart == null ? '' : $patient_chart->pulse }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">Respiratory Rate</p>
            <p class="text-teal-600">{{ $patient_chart == null ? '' : $patient_chart->temperature }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">Oxygen Saturation</p>
            <p class="text-teal-600">{{ $patient_chart == null ? '' : $patient_chart->temperature }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700"> </p>
            <p class="text-teal-600">{{ $patient_chart == null ? '' : $patient_chart->temperature }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700"> </p>
            <p class="text-teal-600">{{ $patient_chart == null ? '' : $patient_chart->temperature }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">Height</p>
            <p class="text-teal-600">{{ $patient_chart == null ? '' : $patient_chart->temperature }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">Weight</p>
            <p class="text-teal-600">{{ $patient_chart == null ? '' : $patient_chart->temperature }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">BMI</p>
            <p class="text-teal-600">{{ $patient_chart == null ? '' : $patient_chart->temperature }}</p>
        </div>

        <p class="mt-5 text-lg font-semibold">History</p>
    <div class="grid grid-cols-3 gap-2 ">
        


        <p class="mt-5 text-lg font-semibold">Past Medications</p>
    <div class="grid grid-cols-3 gap-2 ">


         
         



    </div>
   </div>
</x-patient-layout>

