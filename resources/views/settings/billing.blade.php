<form
    x-transition:enter-start="-translate-x-full"
    x-transition:enter-end="translate-x-0"
    x-transition:leave-start="translate-x-0"
    x-transition:leave-end="-translate-x-full"
    class="transform ease-in-out duration-300">

    @csrf

    <div class="w-full bg-white rounded-lg mx-auto mt-8 flex overflow-hidden rounded-b-none">
        <div class="w-1/3 bg-gray-100 p-8 hidden md:inline-block">
            <h2 class="font-medium text-md text-gray-700 mb-4 tracking-wide">
                Billing Information
            </h2>
            <div>
                <p class="text-xs text-gray-500">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur cum voluptas, illum odit enim, expedita quisquam suscipit adipisci nulla dolorum sit blanditiis libero neque dolorem harum autem maxime ab voluptatum.
                </p>
            </div>
        </div>

        <div class="md:w-2/3 w-full">
            <div class="px-4 py-5 bg-white sm:p-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                    Work In Progress
                </h3>

                <div class="mt-2 max-w-xl text-sm leading-5 text-gray-500">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, totam at reprehenderit maxime aut beatae ad.
                    </p>
                </div>
            </div>
        </div>
    </div>
{{--
    <div class="p-6 py-8 bg-gray-300 clearfix rounded-b-lg border-t border-gray-200">
        <p class="float-left text-xs text-gray-500 tracking-tight mt-2">
            Click on Save to update <b>settings</b>
        </p>

        <button
            type="submit"
            class="inline-flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out float-right"> Save </button>
    </div> --}}
</form>