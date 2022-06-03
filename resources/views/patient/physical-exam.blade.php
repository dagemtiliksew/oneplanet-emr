<x-patient-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Physical Examination') }}
        </h2>
    </x-slot>

    <form method="POST" action="{{ route('store-physical-exam', ['id' => request()->id]) }}">
        @csrf
        <div class="bg-gray-50 rounded shadow-lg p-5">
            <div class="flex justify-between">
                <p class="text-2xl text-gray-600 font-bold">
                    Physical Examination
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
                    <p class="text-gray-900 tracking-wide">General Appearance</p>
                </div>
                <div class="flex-1">
                    <input type="text" name="general_appearance"
                        value="{{ $patient_chart == null ? '' : $patient_chart->general_appearance }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>

            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">HEENT</p>
                </div>
                <div class="flex-1">
                    <input type="string" name="heent" value="{{ $patient_chart == null ? '' : $patient_chart->heent }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>


            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Neck</p>
                </div>
                <div class="flex-1">
                    <input type="text" name="neck"
                        value="{{ $patient_chart == null ? '' : $patient_chart->neck }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>


            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Chest & Lungs</p>
                </div>
                <div class="flex-1">
                    <input type="text" name="chest_and_lung"
                        value="{{ $patient_chart == null ? '' : $patient_chart->chest_and_lung }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>

            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Cardiovascular</p>
                </div>
                <div class="flex-1">
                    <input type="text" name="cardiovascular"
                        value="{{ $patient_chart == null ? '' : $patient_chart->cardiovascular }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>

            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Abdomen</p>
                </div>
                <div class="flex-1">
                    <input type="text" name="abdomen" value="{{ $patient_chart == null ? '' : $patient_chart->abdomen }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>

            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Genitourinary</p>
                </div>
                <div class="flex-1">
                    <input type="string" name="genitourinary" value="{{ $patient_chart == null ? '' : $patient_chart->genitourinary }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>

            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Rectal</p>
                </div>
                <div class="flex-1">
                    <input type="text" name="rectal" value="{{ $patient_chart == null ? '' : $patient_chart->rectal }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>

            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Musculoskeletal</p>
                </div>
                <div class="flex-1">
                    <input type="string" name="musculoskeletal" value="{{ $patient_chart == null ? '' : $patient_chart->musculoskeletal }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>

            <div class="flex space-x-8 items-center mt-4">
              <div class="w-1/6">
                  <p class="text-gray-900 tracking-wide">Lymph Nodes</p>
              </div>
              <div class="flex-1">
                  <input type="string" name="lymph_nodes" value="{{ $patient_chart == null ? '' : $patient_chart->lymph_nodes }}"
                      class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
              </div>
          </div>

            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Extremities/Skin</p>
                </div>
                <div class="flex-1">
                    <input type="string" name="extremities" value="{{ $patient_chart == null ? '' : $patient_chart->extremities }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>


            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Neurological</p>
                </div>
                <div class="flex-1">
                    <input type="string" name="neurological" value="{{ $patient_chart == null ? '' : $patient_chart->neurological }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>

            <div class="flex space-x-8 items-center mt-4">
                <div class="w-1/6">
                    <p class="text-gray-900 tracking-wide">Other</p>
                </div>
                <div class="flex-1">
                    <input type="text" name="other" value="{{ $patient_chart == null ? '' : $patient_chart->other }}"
                        class="p-1 pl-4 sm:text-md w-full border-gray-300 border rounded-md" />
                </div>
            </div>
        </div>
    </form>
</x-patient-layout>
