<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow-md" style="border-bottom-width: 1px; border-color: rgb(229 231 235 / 1);">
                <div class="patients-table-header">
                    <p>Patients</p>
                </div>
                <table class="table">
                    <thead>
                        <tr style="background-color: rgb(243 244 246 / 1);">
                            <th scope="col table-header">Full Name</th>
                            <th scope="col table-header">Phone Number</th>
                            <th scope="col table-header">Age</th>
                            <th scope="col table-header">Gender</th>
                        </tr>
                    </thead>
                    <tbody
                        style="background-color: rgb(255 255 255 / 1); border-top-width: calc(1px * calc(1 - 0)); border-bottom-width: calc(1px * 0); border-color: rgb(229 231 235 / 1);">
                        @foreach ($patients as $patient)
                            <tr onclick="window.location='{{ route('patient', ['id' => $patient->id]) }}'"
                                class="table-row">
                                <td class="table-data">
                                    <div style="display: flex; align-items: center; justify-content: center;">
                                        <div style="flex-shrink: 0; height: 2.5rem; width: 2.5rem">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor"
                                                class="height: 2.5rem; width: 2.5rem; color: rgb(75 85 99 / 1);">
                                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                                    d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            </svg>
                                        </div>
                                        <div style="margin-left: 1rem;">
                                            <p style="color: rgb(17 24 39 / 1)">
                                                {{ $patient->first_name }} {{ $patient->last_name }}
                                            </p>
                                        </div>
                                    </div>
                                </td>
                                <td class="table-data">
                                    {{ $patient->phone_no }}
                                </td>
                                <td class="table-data">{{ \Carbon\Carbon::parse($patient->date_of_birth)->age }}
                                </td>
                                <td class="table-data">
                                    {{ $patient->gender }}
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
