@extends('layout.mainLayout')
@section('subTitle')
    {{$product->name}} |
@endsection
@section('content')
    <div class="w-full grid grid-cols-2 gap-8 py-4 px-8">
        <div class="col-span-1">
            <div
                id="carouselDarkVariant"
                class="relative"
                data-twe-carousel-init
                data-twe-ride="carousel">
                <!-- Carousel indicators -->
                <div
                    class="absolute inset-x-0 bottom-0 z-[2] mx-[15%] mb-4 flex list-none justify-center p-0"
                    data-twe-carousel-indicators>
                    @foreach($product->images as $img)
                    <button
                        data-twe-target="#carouselDarkVariant"
                        data-twe-slide-to="{{$loop->index}}"
                        data-twe-carousel-active
                        class="mx-[3px] box-content h-[3px] w-[30px] flex-initial cursor-pointer border-0 border-y-[10px] border-solid border-transparent bg-black bg-clip-padding p-0 -indent-[999px] opacity-50 transition-opacity duration-[600ms] ease-[cubic-bezier(0.25,0.1,0.25,1.0)] motion-reduce:transition-none"
                        aria-current="true"
                        aria-label="Slide 1"></button>
                    @endforeach
                </div>

                <!-- Carousel items -->
                <div
                    class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                    <!-- First item -->
                    @foreach($product->images as $img)
                        @if($loop->index == 0)
                            <div
                                class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                                data-twe-carousel-fade
                                data-twe-carousel-item
                                data-twe-carousel-active
                            >
                                <img
                                    src="{{asset($img)}}"
                                    class="block w-full"
                                    alt="Motorbike Smoke" />
                            </div>
                        @else
                            <div
                                class="relative float-left -mr-[100%] w-full !transform-none opacity-0 transition-opacity duration-[600ms] ease-in-out motion-reduce:transition-none"
                                data-twe-carousel-fade
                                data-twe-carousel-item
                            >
                                <img
                                    src="{{asset($img)}}"
                                    class="block w-full"
                                    alt="Motorbike Smoke" />
                            </div>
                        @endif
                    @endforeach
                </div>

                <!-- Carousel controls - prev item-->
                <button
                    class="absolute bottom-0 left-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-twe-target="#carouselDarkVariant"
                    data-twe-slide="prev">
                    <span class="inline-block h-8 w-8 dark:grayscale">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="h-6 w-6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M15.75 19.5L8.25 12l7.5-7.5" />
                      </svg>
                    </span>
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                    >Previous</span
                    >
                </button>
                <!-- Carousel controls - next item-->
                <button
                    class="absolute bottom-0 right-0 top-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none"
                    type="button"
                    data-twe-target="#carouselDarkVariant"
                    data-twe-slide="next">
                    <span class="inline-block h-8 w-8 dark:grayscale">
                      <svg
                          xmlns="http://www.w3.org/2000/svg"
                          fill="none"
                          viewBox="0 0 24 24"
                          stroke-width="1.5"
                          stroke="currentColor"
                          class="h-6 w-6">
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                      </svg>
                    </span>
                    <span
                        class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]"
                    >Next</span
                    >
                </button>
            </div>
        </div>

        <div class="col-span-1">
            <h1 class="mb-2 mt-0 text-2xl font-bold leading-tight text-orange-500">
                {{$product->name}}
            </h1>
            <p class="mb-4 text-md text-black/60 dark:text-white/60 mt-4 italic">
                {{$product->description}}
            </p>
        </div>
    </div>
    <div class="mt-2 text-lg">
        <div class="w-full grid grid-cols-3 gap-8 py-4 px-8">
            <div class="col-span-2">
                {!! $product->content !!}
            </div>
            <div class="col-span-1">

            </div>
        </div>
    </div>
@endsection
