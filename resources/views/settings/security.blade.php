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
                            for="street_address"
                            class="block text-sm font-medium leading-5 text-gray-700">Current Password</label>
                        <input
                            id="street_address"
                            class="mt-1 form-input block w-full py-2 px-3 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>

                    <div class="col-span-6">
                        <label
                            for="street_address"
                            class="block text-sm font-medium leading-5 text-gray-700">New Password</label>
                        <input
                            id="street_address"
                            class="mt-1 form-input block w-full py-2 px-3 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
                    </div>

                    <div class="col-span-6">
                        <label
                            for="street_address"
                            class="block text-sm font-medium leading-5 text-gray-700">Confirm New Password</label>
                        <input
                            id="street_address"
                            class="mt-1 form-input block w-full py-2 px-3 border border-gray-200 rounded-md shadow-sm focus:outline-none focus:shadow-outline-blue focus:border-indigo-500 transition duration-150 ease-in-out sm:text-sm sm:leading-5">
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