@extends('main')

@section('content')
    <main>
        <!-- header -->
        <section class="text-center space-y-8">
            <h1 class="text-3xl sm:text-5xl primary-font-f font-bold">Residential Buildings</h1>
            <h2 class="text-2xl sm:text-4xl primary-font-f font-semibold">A Huge Collection of Houses for your Dream
                Home</h2>
            <p class="text-lg primary-font-s text-gray-400 m-auto w-full sm:w-7/12">Particleboard consists of fine
                wood chips mixed together in an adhesive matrix and allowed to harden under pressure. On top of the wall
                plate
                is placed either a second floor or the roof.</p>
        </section>
        <!-- @header -->

        <!-- plot btn -->
        <section class=" w-full sm:w-8/12 m-auto flex justify-center flex-wrap mt-12 space-y-5 lg:space-y-0 space-x-5">
            <button
                class="w-32 h-10 border-2  border-gray-400 ml-5 mt-5 lg:mt-0 sm:ml-0 rounded hover:border-white hover:text-white font-semibold active-plot-btn capitalize">All</button>
            <button
                class="w-32 h-10 border-2 text-gray-700 border-gray-400 rounded hover:border-white hover:text-white font-semibold plot-btn capitalize">5
                Marla</button>
            <button
                class="w-32 h-10 border-2 text-gray-700 border-gray-400 rounded hover:border-white hover:text-white font-semibold plot-btn capitalize">10
                Marla</button>
            <button
                class="w-32 h-10 border-2 text-gray-700 border-gray-400 rounded hover:border-white hover:text-white font-semibold plot-btn capitalize">1
                kanal</button>
        </section>
        <!-- @plot btn -->

        <!-- plots -->
        <section>
            @foreach (get_blogs_by_limit(10) as $portfolio)
                <div class="text-gray-600 body-font overflow-hidden mt-10">
                    <div class="container px-5 py-6 mx-auto">
                        <div class="lg:w-9/12 mx-auto flex flex-wrap">
                            <img alt="ecommerce" class="lg:w-3/12 w-full h-64 object-cover object-center rounded"
                                src="{{ asset($portfolio['images']['original']) }}">
                            <div class="lg:w-9/12 w-full lg:pl-10 lg:mt-0">
                                <h1 class="text-gray-700 text-3xl title-font font-bold primary-font-f mt-4 md:mt-0 mb-1">
                                    {{ $portfolio['title'] }}
                                </h1>
                                <h3 class="primary-font-s text-gray-500 mt-1">
                                    {{ $portfolio['address'] ?? 'Address not set' }}</h3>
                                <div class="flex mb-2">
                                    <span class="flex items-center">
                                        <span class="text-gray-600 mr-3">Rating</span>
                                        <span>
                                            @if ($portfolio['rating'] > 0)
                                                @for ($i = 0; $i < 5; $i++)
                                                    @if ($portfolio['rating'] > $i)
                                                        <i class="fas fa-star text-yellow-500"></i>
                                                    @else
                                                        <i class="fa-regular fa-star text-yellow-500"></i>
                                                    @endif
                                                @endfor
                                            @else
                                                not avaliable
                                            @endif

                                        </span>
                                        {{-- #FFD700 --}}
                                    </span>
                                    <button class="flex ml-3 pl-3 space-x-2 items-center">
                                        <i class="fas fa-heart"></i> <span>Add to favorite</span>
                                    </button>
                                </div>
                                <p class="leading-relaxed text-gray-400">
                                    {!! $portfolio['detail'] !!}
                                </p>
                                <div class="flex py-2">
                                    <a href="portfolio/{{ $portfolio['slug'] }}"
                                        class="flex text-white primary-bg border-0 py-2 px-6 focus:outline-none hover:bg-sky-800 rounded">Full
                                        Detail</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </section>
        <!-- plots -->

    </main>
@endsection
