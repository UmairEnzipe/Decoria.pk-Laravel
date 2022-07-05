@extends('main')
@section('content')
    <main>
        <section class="text-gray-600 body-font">
            @isset($message)
                <div class="flex justify-center">
                    <h1 class="text-lg text-center text-green-500 py-2 px-5 rounded-2xl bg-green-50 w-fit">{{ $message }}
                    </h1>
                </div>
            @endisset
            <div class="container px-5 py-12 mx-auto flex flex-wrap items-center">

                <div class="lg:w-3/5 md:w-1/2 md:pr-16 lg:pr-0 pr-0 flex flex-col items-center">
                    <img class="w-[70%] h-auto" src="{{ asset('web_assets/frontend/assets/contact.png') }}" alt="">
                    <div class="flex w-5/12 justify-between mt-10">
                        <img class="w-[15%] h-auto " src="{{ asset('web_assets/frontend/assets/icons/facebook.svg') }}"
                            alt="">
                        <img class="w-[15%] h-auto " src="{{ asset('web_assets/frontend/assets/icons/twitter.svg') }}"
                            alt="">
                        <img class="w-[15%] h-auto " src="{{ asset('web_assets/frontend/assets/icons/linkedin.svg') }}"
                            alt="">
                        <img class="w-[15%] h-auto " src="{{ asset('web_assets/frontend/assets/icons/pintrest.svg') }}"
                            alt="">
                    </div>
                </div>

                <div class="lg:w-2/6 md:w-1/2 rounded-lg  flex flex-col  w-full mt-10 md:mt-0">
                    <h2 class="text-gray-700 text-3xl sm:text-5xl  font-bold primary-font-f  mb-3">Get in touch</h2>
                    <p class="text-lg text-gray-400 w-full sm:w-4/6 ">Have an inquiry or some feedback for us? Fill
                        out from below to contact our team.</p>
                    <form action="contact" method="POST">
                        @csrf
                        @method('POST')
                        <div class="flex space-x-2 pt-2">
                            <div class="relative mb-4 space-y-1">
                                <label for="full-name" class="leading-7 font-semibold text-md text-gray-500">First
                                    Name</label>
                                <input type="text" id="full-name" name="firstName" placeholder="First Name" required
                                    class="w-full bg-gray-100 rounded focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                            <div class="relative space-y-1">
                                <label for="full-name" class="leading-7 font-semibold text-md text-gray-500">Last
                                    Name</label>
                                <input type="text" id="full-name" name="lastName" placeholder="Last Name"
                                    class="w-full bg-gray-100 rounded focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div>
                            <div class="relative mb-4 space-y-1">
                                <label for="full-name" class="leading-7 font-semibold text-md text-gray-500">Email</label>
                                <input type="email" name="email" placeholder="example@domain.com" required
                                    class="w-full bg-gray-100 rounded focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg mb-2 text-gray-500 font-semibold">Message</h3>
                            <textarea
                                class="w-full bg-gray-100 rounded focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out"
                                name="message" id="" required
                                placeholder="The wise man therefore always holds in these matters to this principle of selection other greater pleasures, or else he endures pains to avoid worse pains."
                                cols="10" rows="3"></textarea>
                        </div>
                        <button
                            class="w-full py-3 text-lg font-bold tracking-wider hover:bg-sky-600 mt-5 primary-bg text-white rounded-2xl shadow ">Submit</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
@endsection
