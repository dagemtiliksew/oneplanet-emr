<x-patient-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Patient Dashboard') }}
        </h2>
    </x-slot>

    <div class="grid grid-cols-3 gap-2 bg-white rounded-md p-6">
        <div>
            <p class="font-semibold text-gray-700">ID</p>
            <p class="text-teal-600">{{ $patient[0]->id }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">Full Name</p>
            <p class="text-teal-600">{{ $patient[0]->first_name }} {{ $patient[0]->last_name }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">Age</p>
            <p class="text-teal-600">{{ \Carbon\Carbon::parse($patient[0]->date_of_birth)->age }} years old</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">Gender</p>
            <p class="text-teal-600">{{ $patient[0]->gender }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">Region</p>
            <p class="text-teal-600">{{ $patient[0]->region }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">Woreda</p>
            <p class="text-teal-600">{{ $patient[0]->woreda }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">Zone</p>
            <p class="text-teal-600">{{ $patient[0]->zone }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">Phone Number</p>
            <p class="text-teal-600">{{ $patient[0]->phone_no }}</p>
        </div>
        <div>
            <p class="font-semibold text-gray-700">Email</p>
            <p class="text-teal-600">{{ $patient[0]->email }}</p>
        </div>
    </div>
</x-patient-layout>
