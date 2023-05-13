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
            <li> <a href="{{ route('login') }}"
                class="block py-2 pr-4 pl-3 text-gray-700 border-b border-gray-100 hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-gray-300 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Q.A {{
                __('Login') }}</a>

        </li>

        @endguest



        </ul>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2022 <a href="#"
            class="hover:underline"></a>. Brought to you by Quality Assurance, KeHMIS.
    </span>
</footer>
