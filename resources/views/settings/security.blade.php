<form
    method="POST"
    action="{{ route('settings.update.security') }}"
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    class="transform ease-in-out duration-300">

    @csrf

    <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
        <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
            <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">
                Change Password
            </h2>
            <div>
                <p class="text-xs text-gray-500">Try to keep your password <b>strong</b> as possible.</p>
            </div>
        </div>


        <div class="md:w-2/3 w-full">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6">
                        <label
                            for="current_password"
                            class="block text-sm font-medium leading-5 text-gray-700">Current Password</label>

                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input
                                type="password"
                                id="current_password"
                                name="current_password"
                                class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none
                                    transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                    {{ $errors->has('current_password')
                                        ? ' focus:shadow-outline-red border-red-300 text-red-900 placeholder-red-300 focus:border-red-300  focus:shadow-error red'
                                        : 'focus:shadow-outline-blue focus:border-blue-300 ' }}" />

                            @error('current_password')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        class="h-5 w-5 text-red-500">
                                        <path
                                            clip-rule="evenodd"
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"  />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('current_password')
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('current_password') }}</p>
                        @enderror
                    </div>

                    <div class="col-span-6">
                        <label
                            for="password"
                            class="block text-sm font-medium leading-5 text-gray-700">New Password</label>

                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input
                                type="password"
                                id="password"
                                name="password"
                                class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none
                                    transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                    {{ $errors->has('password')
                                        ? ' focus:shadow-outline-red border-red-300 text-red-900 placeholder-red-300 focus:border-red-300  focus:shadow-error red'
                                        : 'focus:shadow-outline-blue focus:border-blue-300 ' }}" />

                            @error('password')
                                <div class="absolute inset-y-0 right-0 pr-3 flex items-center pointer-events-none">
                                    <svg
                                        fill="currentColor"
                                        viewBox="0 0 20 20"
                                        class="h-5 w-5 text-red-500">
                                        <path
                                            clip-rule="evenodd"
                                            fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7 4a1 1 0 11-2 0 1 1 0 012 0zm-1-9a1 1 0 00-1 1v4a1 1 0 102 0V6a1 1 0 00-1-1z"  />
                                    </svg>
                                </div>
                            @enderror
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $errors->first('password') }}</p>
                        @enderror

                    </div>

                    <div class="col-span-6">
                        <label
                            for="password_confirmation"
                            class="block text-sm font-medium leading-5 text-gray-700">Confirm New Password</label>

                        <div class="mt-1 relative rounded-md shadow-sm">
                            <input
                                type="password"
                                id="password_confirmation"
                                name="password_confirmation"
                                class="form-input block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:outline-none
                                    transition duration-150 ease-in-out sm:text-sm sm:leading-5
                                    focus:shadow-outline-blue focus:border-blue-300" />
                        </div>
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