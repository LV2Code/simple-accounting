<form
    method="POST"
    action="{{ route('settings.update.general') }}"
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


                <div class="grid grid-cols-6 gap-6 mt-6">

                    <div class="col-span-6">
                        <label
                            for="company_name"
                            class="block text-sm font-medium leading-5 text-gray-700">Company name</label>

                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input
                                type="text"
                                id="company_name"
                                name="company_name"
                                value="{{ old('company_name') ?: $settings['company_name']['value'] }}"
                                class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none
                                    transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                    {{ $errors->has('company_name')
                                        ? ' focus:shadow-outline-red border-red-300 text-red-900 placeholder-red-300 focus:border-red-300  focus:shadow-error red'
                                        : 'focus:shadow-outline-blue focus:border-blue-300 ' }}" />

                            @error('company_name')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            clip-rule="evenodd"
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"  />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('company_name')
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('company_name') }}</p>
                        @enderror
                    </div>

                    <?php $address = json_decode($settings['company_address']['value']); ?>

                    <div class="col-span-6 sm:col-span-4">
                        <label
                            for="country"
                            class="block text-sm font-medium leading-5 text-gray-700">Country / Region</label>

                        <select
                            id="country"
                            name="country"
                            class="block form-select w-full py-2 px-3 py-0 border border-gray-200 bg-white rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                            <option value="IN" {{ $address->country === 'IN' ? 'selected' : '' }}>India</option>
                            <option value="US" {{ $address->country === 'US' ? 'selected' : '' }}>United States</option>
                        </select>
                    </div>

                    <div class="col-span-6">
                        <label
                            for="street"
                            class="block text-sm font-medium leading-5 text-gray-700">Street address</label>

                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input
                                id="street"
                                name="street"
                                value="{{ old('street') ?: $address->street }}"
                                class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none
                                    transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                    {{ $errors->has('company_name')
                                        ? ' focus:shadow-outline-red border-red-300 text-red-900 placeholder-red-300 focus:border-red-300  focus:shadow-error red'
                                        : 'focus:shadow-outline-blue focus:border-blue-300 ' }}">

                            @error('street')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            clip-rule="evenodd"
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"  />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('street')
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('street') }}</p>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                        <label
                            for="city"
                            class="block text-sm font-medium leading-5 text-gray-700">City</label>
                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input
                                id="city"
                                name="city"
                                value="{{ old('city') ?: $address->city }}"
                                class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none
                                    transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                    {{ $errors->has('company_name')
                                        ? ' focus:shadow-outline-red border-red-300 text-red-900 placeholder-red-300 focus:border-red-300  focus:shadow-error red'
                                        : 'focus:shadow-outline-blue focus:border-blue-300 ' }}">

                            @error('city')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            clip-rule="evenodd"
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"  />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('city')
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('city') }}</p>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label
                            for="state"
                            class="block text-sm font-medium leading-5 text-gray-700">State / Province</label>

                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input
                                id="state"
                                name="state"
                                value="{{ old('state') ?: $address->state }}"
                                class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none
                                    transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                    {{ $errors->has('company_name')
                                        ? ' focus:shadow-outline-red border-red-300 text-red-900 placeholder-red-300 focus:border-red-300  focus:shadow-error red'
                                        : 'focus:shadow-outline-blue focus:border-blue-300 ' }}">

                            @error('state')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            clip-rule="evenodd"
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"  />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('state')
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('state') }}</p>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label
                            for="zip_code"
                            class="block text-sm font-medium leading-5 text-gray-700">ZIP / Postal</label>

                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input
                                id="zip_code"
                                name="zip_code"
                                value="{{ old('zip_code') ?: $address->zip_code }}"
                                class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none
                                    transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                    {{ $errors->has('zip_code')
                                        ? ' focus:shadow-outline-red border-red-300 text-red-900 placeholder-red-300 focus:border-red-300  focus:shadow-error red'
                                        : 'focus:shadow-outline-blue focus:border-blue-300 ' }}">

                            @error('zip_code')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            clip-rule="evenodd"
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"  />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('zip_code')
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('zip_code') }}</p>
                        @enderror
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

                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input
                                id="first_name"
                                name="first_name"
                                value="{{ old('first_name') ?: $settings['first_name']['value'] }}"
                                class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none
                                    transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                    {{ $errors->has('first_name')
                                        ? ' focus:shadow-outline-red border-red-300 text-red-900 placeholder-red-300 focus:border-red-300  focus:shadow-error red'
                                        : ' focus:shadow-outline-blue focus:border-blue-300 ' }}">

                            @error('first_name')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            clip-rule="evenodd"
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"  />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('first_name')
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('first_name') }}</p>
                        @enderror
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label
                            for="last_name"
                            class="block text-sm font-medium leading-5 text-gray-700">Last name</label>

                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input
                                id="last_name"
                                name="last_name"
                                value="{{ old('last_name') ?: $settings['last_name']['value'] }}"
                                class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none
                                    transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                    {{ $errors->has('last_name')
                                        ? ' focus:shadow-outline-red border-red-300 text-red-900 placeholder-red-300 focus:border-red-300  focus:shadow-error red'
                                        : ' focus:shadow-outline-blue focus:border-blue-300 ' }}">

                            @error('last_name')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            clip-rule="evenodd"
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"  />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('last_name')
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('last_name') }}</p>
                        @enderror
                    </div>

                    <div class="col-span-6">
                        <label
                            for="email"
                            class="block text-sm font-medium leading-5 text-gray-700">Email address</label>

                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') ?: $settings['email']['value'] }}"
                                class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none
                                    transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                    {{ $errors->has('email')
                                        ? ' focus:shadow-outline-red border-red-300 text-red-900 placeholder-red-300 focus:border-red-300  focus:shadow-error red'
                                        : ' focus:shadow-outline-blue focus:border-blue-300 ' }}">

                            @error('email')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            clip-rule="evenodd"
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"  />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('email') }}</p>
                        @enderror
                    </div>


                    <div class="col-span-6">
                        <label
                            for="contact_number"
                            class="block text-sm font-medium leading-5 text-gray-700">Contact Number</label>

                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input
                                id="contact_number"
                                name="contact_number"
                                value="{{ old('contact_number') ?: $settings['contact_number']['value'] }}"
                                class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none
                                    transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                    {{ $errors->has('contact_number')
                                        ? ' focus:shadow-outline-red border-red-300 text-red-900 placeholder-red-300 focus:border-red-300  focus:shadow-error red'
                                        : ' focus:shadow-outline-blue focus:border-blue-300 ' }}">

                            @error('contact_number')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg class="h-5 w-5 text-red-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            clip-rule="evenodd"
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"  />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('contact_number')
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('contact_number') }}</p>
                        @enderror
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
