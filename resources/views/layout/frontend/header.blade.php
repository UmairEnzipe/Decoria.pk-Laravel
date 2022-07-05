{{-- <!-- Navbar --> --}}
<header class="text-gray-600 mx-12 body-font py-5">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
            <img class="w-[60%] ml-5" src="{{ asset('web_assets/frontend/assets/logo.svg') }}" alt="">
        </a>
        <nav class="md:ml-auto md:mr-auto flex flex-wrap items-center justify-center space-x-12 text-lg font-semibold">
            <a class="mr-5 hover:text-gray-900 cursor-pointer" href='/'>Home</a>
            <a class="mr-5 hover:text-gray-900 cursor-pointer" href="/portfolio">Portfolio</a>
            <a class="mr-5 hover:text-gray-900 cursor-pointer">Projects</a>
            <a class="mr-5 hover:text-gray-900 cursor-pointer">Awards</a>
        </nav>
        <a href="/contact-us"
            class="inline-flex items-center  border-0 py-2 px-5 focus:outline-none hover:bg-sky-800 rounded text-base mt-4 md:mt-0 primary-bg text-white ">Contact
            Us
        </a>
    </div>
</header>
{{-- <!-- @Navbar --> --}}
