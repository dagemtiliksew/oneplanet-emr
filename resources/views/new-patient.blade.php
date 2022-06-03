<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('New Patient') }}
    </h2>
  </x-slot>



  <form method="POST" action="{{ route('new-patient') }}">
    @csrf

    <div class="py-4">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />


        <div class="bg-gray-50 p-4 rounded-md shadow-lg">
          <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
              <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                  <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Demographic
                  </h3>
                </div>
              </div>
              <div class="mt-5 md:mt-0 md:col-span-2 shadow-md">
                <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-3">
                        <label
                          htmlFor="first_name"
                          class="block text-sm font-medium text-gray-700"
                        >
                          First name <span class="text-red-600">*</span>
                        </label>
                        <input
                          type="text"
                          name="first_name"
                          id="first_name"
                          required
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md capitalize"
                        />
                      </div>
        
                      <div class="col-span-3">
                        <label
                          htmlFor="last_name"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Last name <span class="text-red-600">*</span>
                        </label>
                        <input
                          type="text"
                          name="last_name"
                          id="last_name"
                          required
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md capitalize"
                        />
                      </div>
        
                      <div class="col-span-3">
                        <label
                        htmlFor="date_of_birth"
                        class="block text-sm font-medium text-gray-700"
                      >
                        Date of Birth  <span class="text-red-600">*</span>
                      </label>
                      <input
                        required
                        type="date"
                        name="date_of_birth"
                        id="date_of_birth"
                        class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                      />
                      </div>
        
                      <div class="col-span-3">
                        <label
                          htmlFor="gender"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Gender <span class="text-red-600">*</span>
                        </label>
                        <select
                          id="gender"
                          name="gender"
                          required
                          class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        >
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
        
                      <div class="col-span-3">
                        <label
                          htmlFor="id_no"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Identification number
                        </label>
                        <input
                          type="text"
                          name="id_no"
                          id="id_no"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-3">
                        <label
                          htmlFor="martial_status"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Martial Status
                        </label>
                        <input
                          type="text"
                          name="martial_status"
                          id="martial_status"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-3">
                        <label
                          htmlFor="occupation"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Occupation
                        </label>
                        <input
                          type="text"
                          name="occupation"
                          id="occupation"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-3">
                        <label
                          htmlFor="memo"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Memo
                        </label>
                        <input
                          type="text"
                          name="memo"
                          id="memo"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6">
                        <label
                          htmlFor="credit"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Credit <span class="text-red-600">*</span>
                        </label>
                        <select
                          id="credit"
                          name="credit"
                          required
                          class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                        >
                          <option value="false">No</option>
                          <option value="true">Yes</option>
                        </select>
                      </div>
        
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
              <div class="border-t border-gray-200"></div>
            </div>
          </div>
  
          <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
              <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                  <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Contact information
                  </h3>
                </div>
              </div>
              <div class="mt-5 md:mt-0 md:col-span-2 shadow-md">
                <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="phone_no"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Cell phone <span class="text-red-600">*</span>
                        </label>
                        <input
                          type="tel"
                          name="phone_no"
                          id="phone_no"
                          required
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="phone_no2"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Cell phone 2
                        </label>
                        <input
                          type="tel"
                          name="phone_no2"
                          id="phone_no2"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="home_phone"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Home Phone
                        </label>
                        <input
                          type="tel"
                          name="home_phone"
                          id="home_phone"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="region"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Region <span class="text-red-600">*</span>
                        </label>
                        <input
                          type="text"
                          name="region"
                          required
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="woreda"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Woreda
                        </label>
                        <input
                          type="text"
                          name="woreda"
                          id="woreda"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="zone"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Zone
                        </label>
                        <input
                          type="text"
                          name="zone"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="kebele"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Kebele
                        </label>
                        <input
                          type="text"
                          name="kebele"
                          id="kebele"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="city"
                          class="block text-sm font-medium text-gray-700"
                        >
                          City
                        </label>
                        <input
                          type="text"
                          name="city"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="sub_city"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Sub-City
                        </label>
                        <input
                          type="text"
                          name="sub_city"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="house_no"
                          class="block text-sm font-medium text-gray-700"
                        >
                          House No
                        </label>
                        <input
                          type="text"
                          name="house_no"
                          id="house_no"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-12 sm:col-span-12">
                        <label
                          htmlFor="email"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Email
                        </label>
                        <input
                          type="email"
                          name="email"
                          id="email"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
  
          <div class="hidden sm:block" aria-hidden="true">
            <div class="py-5">
              <div class="border-t border-gray-200"></div>
            </div>
          </div>
    
          <div class="mt-10 sm:mt-0">
            <div class="md:grid md:grid-cols-3 md:gap-6">
              <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                  <h3 class="text-lg font-medium leading-6 text-gray-900">
                    Emergency contact
                  </h3>
                </div>
              </div>
              <div class="mt-5 md:mt-0 md:col-span-2">
                <div class="shadow overflow-hidden sm:rounded-md">
                  <div class="px-4 py-5 bg-white sm:p-6">
                    <div class="grid grid-cols-6 gap-6">
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="emergency_contact_name"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Full name
                        </label>
                        <input
                          type="text"
                          name="emergency_contact_name"
                          id="emergency_contact_name"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="emergency_contact_rel"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Relationship to patient
                        </label>
                        <input
                          type="text"
                          name="emergency_contact_rel"
                          id="emergency_contact_rel"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="emergency_contact_phone"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Contact number
                        </label>
                        <input
                          type="tel"
                          name="emergency_contact_phone"
                          id="emergency_contact_phone"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="emergency_contact_phone_2"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Contact number 2
                        </label>
                        <input
                          type="text"
                          name="emergency_contact_phone_2"
                          id="emergency_contact_phone_2"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
        
                      <div class="col-span-6 sm:col-span-3">
                        <label
                          htmlFor="emergency_contact_memo"
                          class="block text-sm font-medium text-gray-700"
                        >
                          Memo
                        </label>
                        <input
                          type="text"
                          name="emergency_contact_memo"
                          id="emergency_contact_memo"
                          class="mt-1 p-1 pl-4 block w-full sm:text-md border-gray-300 border rounded-md"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
          <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
              <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900"></h3>
              </div>
            </div>
  
            <div class="mt-5 md:mt-0 md:col-span-2 flex space-x-6">
              <div class="py-3 bg-gray-50 w-full">
                <button
                type="submit"
                class="inline-flex justify-center w-full py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 mt-5"
              >
    
                <span class="ml-2">Save</span>
              </button>
              </div>
            </div>
          </div>
    
        </div>
      </div>
    </div>
  </form>
</x-app-layout>