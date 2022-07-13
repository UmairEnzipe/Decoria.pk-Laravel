@extends('main')
@section('content')
    <style>
        h1 {
            font-size: 32px;
            font-weight: 800;
        }

        h2 {
            font-size: 24px;
            font-weight: 700
        }
    </style>
    @php
    $imagesList = json_decode($blog['images_list']);
    @endphp

    {{-- $blog means $portfolio --}}
    <!-- main -->
    <main>
        <section class="bg-gray-50 rounded-3xl p-5">
            <div class="slider">
                <div class="flex justify-center">
                    <div class="plot-detail-div w-11/12 sm:w-9/12 md:w-4/12">
                        @foreach ($imagesList as $image)
                            <img class="w-96 h-96 rounded-3xl" style="object-fit: contain" src="{{ asset('web_assets/admin/images/blogImages/' . $image) }}" alt="">
                        @endforeach
                    </div>
                </div>
                <div class="flex justify-center my-5">
                    <div class="plot-detail-slider w-11/12 md:w-6/12">
                        @foreach ($imagesList as $image)
                        <div class="">
                            <img class="w-20 h-20 sm:w-40 sm:h-40 rounded" style="object-fit: cover;" src="{{ asset('web_assets/admin/images/blogImages/' . $image) }}" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="text-center mt-10">
                <h1 class="text-3xl sm:text-5xl text-gray-700 primary-font-f font-bold">{{ $blog['title'] }}</h1>
                <h2 class="text-2xl sm:text-3xl mt-5 text-gray-600">{{ $blog['address'] ?? 'Address not set' }}</h2>
                <div class="flex justify-evenly flex-wrap space-x-5 w-full m-auto mt-10 sm:w-8/12">
                    <!-- review -->
                    <div class="flex mb-2">
                        <span class="flex items-center">
                            <span class="text-gray-600 mr-3">Reviews</span>
                            <span>
                                @if ($blog['rating'] > 0)
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($blog['rating'] > $i)
                                            <i class="fas fa-star text-yellow-500"></i>
                                        @else
                                            <i class="fa-regular fa-star text-yellow-500"></i>
                                        @endif
                                    @endfor
                                @else
                                    not avaliable
                                @endif

                            </span>
                        </span>
                    </div>
                    <!-- @review -->

                    <!-- favorite -->
                    <div>
                        <button class="flex space-x-1 items-center">
                            <i class="fas fa-heart"></i> <span>Add to favorite</span>
                        </button>
                    </div>
                    <!-- favorite -->
                    @php
                        $date = strtotime($blog['created_at']);
                    @endphp
                    <div>
                        <p class="text-lg text-gray-400">{{ date('d-m-Y') }}</p>
                    </div>
                </div>
                <div class="w-full m-auto text-left space-y-2 mt-5 sm:w-8/12">{!! $blog['detail'] !!}</div>
            </div>
        </section>
    </main>
    <!-- @main -->
@endsection
