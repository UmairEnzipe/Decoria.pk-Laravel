@extends('main')

@section('content')
    <!-- Main -->
    <main class="mx-5 sm:mx-12">

        <section class="text-gray-600 body-font hero-section mx-6 md:h-auto  shadow-2xl relative">
            <div class="container mx-auto flex px-5   pt-20 md:py-32 lg:flex-row flex-col items-center">
                <div
                    class="lg:flex-grow w-full lg:w-1/2 lg:pr-24 flex flex-col lg:items-start lg:text-left mb-16 lg:mb-0 items-center text-center pl-0 lg:px-12">
                    <h1 class="md:text-5xl lg:text-6xl text-4xl mb-4 tracking-wide primary-font-f text-white">We're Help To
                        <br class="hidden lg:inline-block">Build Your Dream
                        <br class="hidden lg:inline-block">Professionally
                    </h1>
                    <p class="mb-8 leading-relaxed text-lg slogen text-gray-300 w-[100%] ">Lorem ipsum dolor sit amet,
                        consectetur adipiscing elit. Nulla ut magna eros. Quisque viverra nibh.</p>
                    <div class="flex justify-center">
                        <a href="#gallery"
                            class="inline-flex text-white primary-bg border-0 py-3 px-8 text-lg focus:outline-none hover:bg-sky-800 rounded">Gallery</a>
                    </div>
                </div>
            </div>


            <!-- Hero White Block -->
            <div class="w-[100%]  flex justify-center h-auto pb-10  md:absolute  md:-bottom-40 ">
                <div class="w-[80w] md:w-[70vw] bg-white rounded-3xl p-8 shadow-2xl md:flex justify-evenly ">
                    <div class="py-10 space-y-2">
                        <h1 class="font-black text-2xl primary-font-f">Buildings</h1>
                        <p>Lorem ipsum dolor sit. <span><i class="fa-solid fa-caret-down primary-bg p-1 sm:p-2 text-white ml-10"
                                    style="clip-path: circle();"></i></span></p>

                    </div>
                    <div class="lg:h-[100%] w-[1.5px] rounded bg-gray-300 h-0 invisible lg:visible"></div>

                    <div class="py-10 space-y-2">
                        <h1 class="font-black text-2xl primary-font-f">Interior</h1>
                        <p>Lorem ipsum dolor sit. <span><i class="fa-solid fa-caret-down primary-bg p-1 sm:p-2 text-white ml-10"
                                    style="clip-path: circle();"></i></span></p>
                    </div>
                    <div class="lg:h-[100%] h-0 invisible lg:visible w-[1.5px] rounded bg-gray-300"></div>
                    <div class="py-10 space-y-2">
                        <h1 class="text-2xl primary-font-f font-bold">Furniture</h1>
                        <p>Lorem ipsum dolor sit. <span><i class="fa-solid fa-caret-down primary-bg p-1 sm:p-2 text-white ml-10"
                                    style="clip-path: circle();"></i></span></p>
                    </div>
                </div>
            </div>
            {{-- <!-- @Hero White Block --> --}}

        </section>
        {{-- <!-- @Hero Section --> --}}


        {{-- <!-- Dream House Text --> --}}
        <section
            class="h-auto w-[100%] mt-32 mb-5 sm:my-52 sm:mt-72 sm:mb-0 flex flex-col justify-center items-center space-y-5 text-center ">
            <h1 class="text-3xl text-left sm:text-center sm:text-5xl font-bold primary-font-f ">
                Why you should buy your dream house from us?
            </h1>
            <p class="w-[90%] sm:w-[80vw] sm:text-center text-left leading-relaxed  text-gray-400 primary-font-s">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ut magna eros. Quisque vel viverra nibh.
                Morbi placerat sed nisi sit amet ultricies. Aliquam ac lacinia elit, quis imperdiet eros. In quis
                pharetra justo, sit amet feugiat dolor. Vestibulum id ante vitae neque viverra tristique. Proin tempor
                risus sit amet dui pretium rutrum. Nunc a nulla nibh. Donec molestie mi condimentum ipsum laoreet
                vehicula luctus ac lorem. Donec porttitor ullamcor nibh malesuada quis. Quisque pretium nunc eu
                vestibulum vehicula.cursus magna pretium, vehicula nunc.
            </p>

            <!-- DREAM HOUSE POINTS -->
            <section class="text-gray-600 body-font">
                <div class="container py-24 mx-auto flex flex-wrap  px-5 md:px-20 justify-center items-center">
                    <div class="lg:w-1/2 w-full mb-10 lg:mb-0 rounded-lg overflow-hidden">
                        <img alt="feature" class="object-cover object-center h-full w-full"
                            src="{{ asset('web_assets/frontend/assets/dream_house.png') }}">
                    </div>
                    <div class="flex flex-col flex-wrap lg:py-6 -mb-10 lg:w-1/2 lg:pl-12 lg:text-left text-center">
                        <div class="flex flex-col mb-10 lg:items-start items-center">
                            <div class=" flex flex-col lg:items-start items-center justify-center ">
                                <div class="flex flex-col justify-center items-center space-x-3 lg:flex-row">
                                    <img class="w-10 h-auto"
                                        src="{{ asset('web_assets/frontend/assets/icons/construction.svg') }}"
                                        alt="">
                                    <h2 class="text-gray-900 mt-2 md:text-3xl text-2xl  font-medium mb-3">Consutruction Map
                                    </h2>
                                </div>
                                <p class="leading-relaxed primary-font-s text-gray-400 w-[100%] md:w-5/6">Blue bottle
                                    crucifix vinyl
                                    post-ironic four dollar
                                    toast vegan
                                    taxidermy. Gastropub indxgo juice poutine.</p>
                            </div>
                        </div>
                        <div class="flex flex-col mb-10 lg:items-start items-center">
                            <div class=" flex flex-col lg:items-start items-center justify-center ">
                                <div class="flex flex-col justify-center items-center space-x-3 lg:flex-row">
                                    <img class="w-10 h-auto"
                                        src="{{ asset('web_assets/frontend/assets/icons/planning.svg') }}" alt="">
                                    <h2 class="text-gray-900 mt-2 md:text-3xl text-2xl  font-medium mb-3">Plannings &
                                        Designing</h2>
                                </div>
                                <p class="leading-relaxed primary-font-s text-gray-400 w-[100%] md:w-5/6">Blue bottle
                                    crucifix vinyl
                                    post-ironic four dollar
                                    toast vegan
                                    taxidermy. Gastropub indxgo juice poutine.</p>
                            </div>
                        </div>
                        <div class="flex flex-col mb-10 lg:items-start items-center">
                            <div class=" flex flex-col lg:items-start items-center justify-center ">
                                <div class="flex flex-col justify-center items-center space-x-3 lg:flex-row">
                                    <img class="w-10 h-auto"
                                        src="{{ asset('web_assets/frontend/assets/icons/building.svg') }}" alt="">
                                    <h2 class="text-gray-900 mt-2 md:text-3xl text-2xl  font-medium mb-3">Buildings Drawing
                                    </h2>
                                </div>
                                <p class="leading-relaxed primary-font-s text-gray-400 w-[100%] md:w-5/6">Blue bottle
                                    crucifix vinyl
                                    post-ironic four dollar
                                    toast vegan
                                    taxidermy. Gastropub indxgo juice poutine.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        {{-- <!-- @Dream House Text --> --}}

        <!-- Services -->
        <section class=" px-5 md:px-20 h-auto sm:py-10">
            <h1 class="text-3xl sm:text-5xl primary-font-f mb-2 ">Our Services</h1>
            <p class="w-[100%] lg:w-4/6 primary-font-s text-gray-400 ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta molestias dolores qui rerum minima minus,
                saepe.
            </p>

            <div class="flex services_slider flex-col text-center  my-20">
                <div class="space-y-2  text-2xl ">
                    <img src="{{ asset('web_assets/frontend/assets/services.png') }}" alt="">
                    <p>Building Design</p>
                </div>
                <div class="space-y-2  text-2xl">
                    <img src="{{ asset('web_assets/frontend/assets/services.png') }}" alt="">
                    <p>Interior Design</p>
                </div>

                <div class="space-y-2  text-2xl">
                    <img src="{{ asset('web_assets/frontend/assets/services.png') }}" alt="">
                    <p>Furnitures</p>
                </div>

                <div class="space-y-2  text-2xl">
                    <img src="{{ asset('web_assets/frontend/assets/services.png') }}" alt="">
                    <p>Sofa Designs</p>
                </div>

                <div class="space-y-2  text-2xl">
                    <img src="{{ asset('web_assets/frontend/assets/services.png') }}" alt="">
                    <p>Service1</p>
                </div>
            </div>
        </section>
        <!--@ Services -->

        <!-- Gallery -->
        <section class="px-5 md:px-20 h-auto" id="gallery">
            <h1 class="text-3xl sm:text-5xl primary-font-f mb-2">Gallery</h1>
            <p class="w-full md:w-4/6 primary-font-s text-gray-400">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta molestias dolores qui rerum minima minus,
                saepe.
            </p>
            <div class="gallery_slider">
                <!-- Gallery First Row -->
                <div class="w-[80vw] h-[100%]">
                    <div class="grid grid-cols-2 gap-5 my-10">
                        <div class="grid grid-cols-2 gap-5">
                            <img class="h-[100%] rounded md:rounded-3xl shadow"
                                style="background-image:url('{{ asset('web_assets/frontend/assets/nature.jpg') }}');background-size: cover; background-position: center;"
                                src="" alt="">
                            <img class="h-[100%] rounded md:rounded-3xl shadow"
                                style="background-image:url('{{ asset('web_assets/frontend/assets/video.png') }}');background-size: cover; background-position: center;"
                                src="" alt="">
                        </div>
                        <img class="rounded md:rounded-3xl shadow "
                            src="{{ asset('web_assets/frontend/assets/nature.jpg') }}" alt="">
                    </div>

                    <!-- Gallery Second Row -->
                    <div class="grid grid-cols-2 gap-5 my-10">
                        <img class="rounded md:rounded-3xl shadow"
                            src="{{ asset('web_assets/frontend/assets/nature2.jpg') }}" alt="">

                        <div class="grid grid-cols-2 gap-5">
                            <img class="h-[100%] rounded md:rounded-3xl shadow"
                                style="background-image:url('{{ asset('web_assets/frontend/assets/nature2.jpg') }}');background-size: cover; background-position: center;"
                                src="" alt="">
                            <img class="h-[100%] rounded md:rounded-3xl shadow"
                                style="background-image:url('{{ asset('web_assets/frontend/assets/video.png') }}');background-size: cover; background-position: center;"
                                src="" alt="">
                        </div>
                    </div>
                </div>

                <div class="w-[80vw] h-auto">
                    <div class="grid grid-cols-2 gap-2 md:gap-5 my-10">
                        <div class="grid grid-cols-2 gap-2 md:gap-5">
                            <img class="h-[100%] rounded md:rounded-3xl shadow"
                                style="background-image:url('{{ asset('web_assets/frontend/assets/nature.jpg') }}');background-size: cover; background-position: center;"
                                src="" alt="">
                            <img class="h-[100%] rounded md:rounded-3xl shadow"
                                style="background-image:url('{{ asset('web_assets/frontend/assets/nature2.jpg') }}');background-size: cover; background-position: center;"
                                src="" alt="">
                        </div>
                        <img class="rounded md:rounded-3xl shadow"
                            src="{{ asset('web_assets/frontend/assets/video.png') }}" alt="">
                    </div>

                    <!-- Gallery Second Row -->
                    <div class="grid grid-cols-2 gap-2 md:gap-5 my-5">
                        <img class="rounded md:rounded-3xl shadow"
                            src="{{ asset('web_assets/frontend/assets/nature.jpg') }}" alt="">

                        <div class="grid grid-cols-2 gap-5">
                            <img class="h-[100%] rounded md:rounded-3xl shadow"
                                style="background-image:url('{{ asset('web_assets/frontend/assets/video.png') }}');background-size: cover; background-position: center;"
                                src="" alt="">
                            <img class="h-[100%] rounded md:rounded-3xl shadow"
                                style="background-image:url('{{ asset('web_assets/frontend/assets/nature.jpg') }}');background-size: cover; background-position: center;"
                                src="" alt="">
                        </div>
                    </div>
                </div>
        </section>
        {{-- <!-- @Gallery --> --}}

        {{-- <!-- Video Section --> --}}
        <section class="h-auto md:h-screen py-10 px-5 md:px-20">
            <h1 class="text-3xl sm:text-5xl primary-font-f mb-2 ">Video</h1>
            <p class="w-[100%] lg:w-4/6 primary-font-s text-gray-400 ">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta molestias dolores qui rerum minima minus,
                saepe.
            </p>
            <div class="py-10 h-auto flex flex-col md:flex-row space-y-5 md:space-y-0">
                <!--  -->
                <div class="w-full  md:w-4/6">
                    <img src="{{ asset('web_assets/frontend/assets/video.png') }}" alt="">
                </div>
                <!--  -->
                <div class="w-full md:w-2/6 px-20 flex md:flex-col justify-evenly items-center text-center">
                    <div class="w-full md:w-2/6">
                        <h1 class="md:border-l-4 px-5 py-2  font-black text-4xl border-indigo-500">15</h1>
                        <p class="text-gray-400">Years<br> Experience</p>
                    </div>
                    <div class="w-full md:w-2/6">
                        <h1 class="md:border-l-4 px-5  font-black py-2 text-4xl border-indigo-500">245</h1>
                        <p class="text-gray-400">Property <br> Build</p>
                    </div>
                    <div class="w-full md:w-2/6">
                        <h1 class="md:border-l-4 font-black px-5 py-2 text-4xl border-indigo-500">15</h1>
                        <p class="text-gray-400">Awards <br> Win</p>
                    </div>
                </div>


            </div>
        </section>
        {{-- <!-- @Video Section --> --}}

        <!-- Client Feedback -->
        <section class="h-auto lg:h-screen py-10 mx-2 lg:mx-20 pl-5 rounded-3xl lg:pl-16 overflow-hidden"
            style="background-color: #F7F9FE;">
            <h1 class="text-3xl md:text-5xl primary-font-f mb-2 ">Our Client's Feedback</h1>
            <div class="flex justify-between w-full  h-auto flex-col lg:flex-row  ">
                <div class="w-full px-3 lg:px-0 lg:w-3/6 flex flex-col">

                    <img class="w-[50%] h-[50%]  lg:w-[40%] lg:h-auto"
                        src="{{ asset('web_assets/frontend/assets/client.PNG') }}" alt="client image">
                    <h1 class="mt-5 text-3xl md:text-4xl primary-font-f">Abdur Rehman</h1>
                    <p class="py-5 primary-font-s text-gray-400">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        Placeat
                        odio cupiditate ipsam? Repellat accusamus
                        maiores illum autem, laboriosam non atque omnis iste repudiandae hic provident rerum eius, fugit
                        labore in?
                    </p>
                    <img class="w-[70%] h-auto mt-10 self-center"
                        src="{{ asset('web_assets/frontend/assets/clients.PNG') }}" alt="clients images">
                </div>
                <div class="w-full  lg:w-3/6 flex items-end">
                    <img class="w-full h-[80%]" src="{{ asset('web_assets/frontend/assets/client_home.png') }}"
                        alt="">
                </div>
            </div>
        </section>
        {{-- <!-- @Client Feedback --> --}}

        <!-- News letter -->
        {{-- <section class="w-auto h-auto secondary-bg my-16 sm:my-24 md:mx-20 rounded-3xl ">
            <div class="text-gray-600 body-font">
                <div class="container px-5 py-16 mx-auto ">
                    <div
                        class="w-full sm:w-11/12 m-auto py-10 flex  flex-col space-y-5 sm:space-y-0 sm:flex-row justify-between">
                        <div
                            class="flex items-center justify-center md:justify-start flex-col md:flex-row space-y-3 md:space-y-0 md:space-x-3 w-full sm:w-6/12">
                            <img class="" src="{{ asset('web_assets/frontend/assets/search.svg') }}"
                                alt=""> <span class="text-2xl text-white">Looking for More?</span>
                        </div>
                        <div class="w-full sm:w-6/12 flex justify-center md:justify-end space-x-5">
                            <a href="#">
                                <i
                                    class="fa-brands fa-facebook-f text-gray-50 hover:text-gray-800 cursor-pointer hover:bg-white w-10 h-10 flex justify-center items-center rounded-3xl shadow"></i>
                            </a>
                            <a href="#">
                                <i
                                    class="fa-brands fa-twitter text-gray-50 hover:text-gray-800 cursor-pointer hover:bg-white w-10 h-10 flex justify-center items-center rounded-3xl shadow"></i>
                            </a>
                            <a href="#">
                                <i
                                    class="fa-brands fa-linkedin text-gray-50 hover:text-gray-800 cursor-pointer hover:bg-white w-10 h-10 flex justify-center items-center rounded-3xl shadow"></i>
                            </a>
                            <a href="#">
                                <i
                                    class="fa-brands fa-pinterest text-gray-50 hover:text-gray-800 cursor-pointer hover:bg-white w-10 h-10 flex justify-center items-center rounded-3xl shadow"></i>
                            </a>

                        </div>
                    </div>
                    <div class="flex flex-col text-left w-full sm:w-8/12 mb-12 sm:px-5 ">
                        <h1
                            class="sm:text-4xl primary-font-f text-bold text-white text-3xl font-medium title-font mb-4 md:px-10 ">
                            Subscribe
                            to get the latest news about us or Browse more properties.</h1>
                    </div>
                    <div
                        class="flex w-full md:w-11/12 md:flex-row flex-col mx-auto  md:space-x-4 md:space-y-0 space-y-4 md:px-0 items-end">
                        <div class="relative flex-grow w-full space-y-3 ">
                            <label for="full-name" class="leading-7 text-lg text-gray-100 font-semibold">Your Name</label>
                            <input type="text" id="full-name" name="full-name" placeholder="Enter your password"
                                class="w-full bg-gray-100 rounded-2xl border border-gray-300 focus:border-indigo-500  focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <div class="relative flex-grow w-full space-y-3">
                            <label for="full-name" class="leading-7 text-lg text-gray-100 font-semibold">Your
                                Email</label>
                            <input type="email" id="email" name="email" placeholder="Enter your email"
                                class="w-full bg-gray-100  rounded-2xl border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-2 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                        <button
                            class="text-white  border-0 py-3 px-12 focus:outline-none hover:bg-sky-800 rounded-2xl text-lg primary-bg">Submit</button>
                    </div>
                </div>
            </div>
        </section> --}}
        {{-- <!-- @News letter --> --}}

    </main>
    {{-- <!-- @Main Container --> --}}
@endsection
