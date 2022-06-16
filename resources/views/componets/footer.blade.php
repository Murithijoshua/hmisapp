<footer class="p-4 bg-white shadow md:px-6 md:py-8 dark:bg-gray-800 mb-0">
    <div class="sm:flex sm:items-center sm:justify-between">
        <a href="https:prod.khmis.org:8181" class="flex items-center mb-4 sm:mb-0">
            <img src="{{ asset('images/KeHMIS_Logo.svg') }}" class="mr-3 h-8" alt="Flowbite Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">.org</span>
        </a>
        <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-500 sm:mb-0 dark:text-gray-400">
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6 ">About</a>
            </li>
            <li>
                <a href="#" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
            </li>
            @guest
                
            
            <li> <button
                class="px-3 py-2 text-sm font-medium text-center float-right text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button" data-modal-toggle="authentication-modal">
                Q.A

            </button>
        </li>
                
        @endguest
           


        </ul>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="#"
            class="hover:underline"></a>. Brought to you by Quality Assurance, KeHMIS.
    </span>
</footer>