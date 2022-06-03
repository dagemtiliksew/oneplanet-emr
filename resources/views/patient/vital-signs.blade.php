<x-patient-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Vital Signs') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('store-vital-signs', ['id' => request()->id]) }}">
        @csrf
        <div class="bg-gray-50 rounded shadow-lg p-5">
            <div class="flex justify-between">
                <p class="text-2xl text-gray-600 font-bold">
                    Vital Signs
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


            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Temperature</p>
                </div>
                <div class="flex-1">
                    <input type="number" name="temperature" placeholder="C°" value="{{ $patient_chart == null ? '' : $patient_chart->temperature }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>

            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Pulse</p>
                </div>
                <div class="flex-1">
                    <input type="number" name="pulse" placeholder="bpm" value="{{ $patient_chart == null ? '' : $patient_chart->pulse }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>


            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Blood Pressure</p>
                </div>
                <div class="flex-1">
                    <input type="string" name="blood_pressure" placeholder="mmHg" value="{{ $patient_chart == null ? '' : $patient_chart->blood_pressure }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>


            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Respiratory Rate</p>
                </div>
                <div class="flex-1">
                    <input type="number" name="respiratory_rate" placeholder="rpm" value="{{ $patient_chart == null ? '' : $patient_chart->respiratory_rate }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>

            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Oxygen Saturation</p>
                </div>
                <div class="flex-1">
                    <input type="number" name="oxygen_saturation" placeholder="%" value="{{ $patient_chart == null ? '' : $patient_chart->oxygen_saturation }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>

            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Height</p>
                </div>
                <div class="flex-1">
                    <input type="number" name="height" placeholder="cm" value="{{ $patient_chart == null ? '' : $patient_chart->height }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>

            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Weight</p>
                </div>
                <div class="flex-1">
                    <input type="number" name="weight" placeholder="kg" value="{{ $patient_chart == null ? '' : $patient_chart->weight }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>

            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">BMI</p>
                </div>
                <div class="flex-1">
                    <input type="number" name="bmi" placeholder="BMI" value="{{ $patient_chart == null ? '' : $patient_chart->bmi }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>
        </div>
    </form>
</x-patient-layout>
