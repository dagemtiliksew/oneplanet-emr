<x-patient-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('History') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('store-history', ['id' => request()->id]) }}">
        @csrf

        <div class="bg-gray-50 rounded shadow-lg p-5">
            <div class="flex justify-between">
                <p class="text-2xl text-gray-600 font-bold">
                    History
                </p>
                <div>
                    <button type="submit"
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

            <p class="mb-3 font-semibold text-lg">Past Illnesses</p>
            <div class="ml-2">
                <input type="checkbox" id="diabetes" name="diabetes" value="Diabetes" @checked(old('diabetes', $patient_chart == null ? false : $patient_chart->diabetes))>
                <label for="diabetes">Diabetes</label><br>
                <input type="checkbox" id="hypertension" name="hypertension" value="Hypertension"
                    @checked(old('hypertension', $patient_chart == null ? false : $patient_chart->hypertension))>
                <label for="hypertension">Hypertension</label><br>
                <input type="checkbox" id="asthma" name="asthma" value="Asthma" @checked(old('asthma', $patient_chart == null ? false : $patient_chart->asthma))>
                <label for="asthma">Asthma</label><br>
                <input type="checkbox" id="tb" name="tb" value="tb" @checked(old('tb', $patient_chart == null ? false : $patient_chart->tb))>
                <label for="tb">TB</label><br>
                <input type="checkbox" id="hiv" name="hiv" value="HIV" @checked(old('hiv', $patient_chart == null ? false : $patient_chart->hiv))>
                <label for="hiv">HIV</label><br>
            </div>
        </div>
    </form>
</x-patient-layout>
