<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('subTitle')| Admin Manager</title>
    <meta name="robots" content="noindex, nofollow" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <link rel="stylesheet" href="{{ asset('css/frontend-custom.css') }}">
    <!-- CSRF Token -->
    @yield('head')

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>

<body>
    <div class="w-full h-screen bg-[#E9E9E9]">
        <div class="grid grid-cols-6 h-full p-4 pr-4 gap-4">
            <div class="col-span-1 h-full">
                @include('partial.adminSidebar')
            </div>
            <div class="col-span-5 h-full flex flex-col gap-4">
                @include('partial.adminHeader')
                <div class="w-full h-full">
                    <div class="w-full h-full bg-white rounded-xl p-8">
                        <!--content wrapper devided into 3 section-->
                        <div class="w-full h-full flex flex-col gap-4">
                            <!--First section-->
                            <div class="flex justify-between">
                                <div class="page-index capitalize text-2xl">
                                    @isset($page)
                                        {{ $page }}
                                    @endisset
                                </div>
                                <div class="flex gap-2">
                                    <div class="search">
                                        <div class="searchbar-wrapper border-gray-300 border-2 bg-slate-100 py-1 px-2 rounded-md">
                                            <i class="fa-solid fa-magnifying-glass"></i>
                                            <input class="bg-transparent focus:outline-none ml-1" type="text" placeholder="Tìm kiếm">
                                        </div>
                                    </div>
                                    <div class="filter-button ">
                                        <button class="flex justify-center items-center w-[100%] h-[100%] py-1 px-2 border-gray-300 border-2 rounded-md gap-1">
                                            Filter
                                            <i class="fa-solid fa-filter"></i>
                                        </button>
                                    </div>
                                    <div class="add-new-button">
                                        <button class="flex justify-center items-center w-[100%] h-[100%] py-1 px-2 text-white bg-main-color rounded-md gap-1" data-twe-toggle="modal" data-twe-target="#exampleModalVarying" data-twe-whatever="@mdo" data-twe-ripple-init data-twe-ripple-color="light">
                                            Thêm sản phẩm
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!--Second section-->
                            <div>
                                @yield('content')
                                @yield('product_index')
                                @include('admin.content.product.add')
                            </div>
                            <!--Third section-->
                            <div class="flex justify-end gap-9">
                                <button>Số dòng trên trang</button>
                                <button>1-?? của tổng số ???</button>
                                <div class="flex gap-5">
                                    <button><</button>
                                    <button>></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
