<form
    method="POST"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    class="transform ease-in-out duration-300"
    enctype="multipart/form-data">

    @csrf

    <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
        <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
            <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">
                Company Information
            </h2>
            <div>
                <p class="text-xs text-gray-500">Update comapny information,</p>
                <p class="text-xs text-gray-500">which will use on <b>Invoice</b> and <b>Estimate</b></p>
            </div>
        </div>

        <div class="md:w-2/3 w-full">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="first_name" class="block text-sm font-medium leading-5 text-gray-700">Logo</label>
                        <div class="mt-2 flex items-center">
                            <span class="h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                <svg
                                    class="h-full w-full text-gray-300"
                                    fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                </svg>
                            </span>

                            <span class="ml-5 rounded-md shadow-sm">
                                <button
                                    type="button"
                                    class="py-2 px-3 border border-gray-200 rounded-md text-sm leading-4 font-medium text-gray-700 hover:text-gray-500 focus:outline-none focus:border-indigo-500 focus:shadow-outline-blue active:bg-gray-50 active:text-gray-800 transition duration-150 ease-in-out"> Change </button>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-4 mt-6">
                        <label
                            for="country"
                            class="block text-sm font-medium leading-5 text-gray-700">Country / Region</label>
                        <select
                            id="country"
                            class="mt-1 block form-select w-full py-2 px-3 py-0 border border-gray-200 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            <option>United States</option>
                            <option>Canada</option>
                            <option>Mexico</option>
                        </select>
                    </div>

                    <div class="col-span-6">
                        <label
                            for="street_address"
                            class="block text-sm font-medium leading-5 text-gray-700">Street address</label>
                        <input
                            id="street_address"
                            class="mt-1 form-input block w-full py-2 px-3 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>

                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                        <label
                            for="city"
                            class="block text-sm font-medium leading-5 text-gray-700">City</label>
                        <input
                            id="city"
                            class="mt-1 form-input block w-full py-2 px-3 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label
                            for="state"
                            class="block text-sm font-medium leading-5 text-gray-700">State / Province</label>
                        <input
                            id="state"
                            class="mt-1 form-input block w-full py-2 px-3 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label
                            for="postal_code"
                            class="block text-sm font-medium leading-5 text-gray-700">ZIP / Postal</label>
                        <input
                            id="postal_code"
                            class="mt-1 form-input block w-full py-2 px-3 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="w-full bg-white mx-auto mt8 flex overflow-hidden  border-t border-gray-400">
        <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
            <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">
                Contact Information
            </h2>
            <div>
                <p class="text-xs text-gray-500">Update contact information</p>
                <p class="text-xs text-gray-500">which will use on <b>Invoice</b> and <b>Estimate</b></p>
            </div>
        </div>

        <div class="md:w-2/3 w-full">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label
                            for="first_name"
                            class="block text-sm font-medium leading-5 text-gray-700">First name</label>
                        <input
                            id="first_name"
                            class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                    <div class="col-span-6 sm:col-span-3">
                        <label
                            for="last_name"
                            class="block text-sm font-medium leading-5 text-gray-700">Last name</label>
                        <input
                            id="last_name"
                            class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>

                    <div class="col-span-6">
                        <label
                            for="email_address"
                            class="block text-sm font-medium leading-5 text-gray-700">Email address</label>
                        <input
                            type="email"
                            id="email_address"
                            class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                    <div class="col-span-6">
                        <label
                            for="contact_number"
                            class="block text-sm font-medium leading-5 text-gray-700">Contact Number</label>
                        <input
                            id="contact_number"
                            class="mt-1 form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="p-6 py-8 bg-gray-300 clearfix rounded-b-lg border-t border-gray-200">
        <p class="float-left text-xs text-gray-500 tracking-tight mt-2">
            Click on Save to update <b>settings</b>
        </p>

        <button
            type="submit"
            class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out float-right"> Save </button>
    </div>
</form>
