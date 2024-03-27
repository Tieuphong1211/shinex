@extends('layouts.mainLayout')
@section('subTitle')
    Trang chủ |
@endsection
@section('content')
<div class="flex justify-center">
    <img class="w-[70%]" src="{{asset('ImgProduct/Big.jpg')}}" alt="">
</div>

{{--    Sp nổi bật --}}
    <div class="px-80">
        <h1 class="py-8 font-medium text-2xl text-[#7f7f7f] leading-10">KHÁM PHÁ<br><span class="font-bold text-3xl text-[#697ebd]">CÁC SẢN PHẨM NỔI BẬT</span></h1>
        <div class="grid grid-cols-4 gap-6">
            <div class="overflow-hidden">
                <a href="#"><div class="overflow-hidden">
                    <img class="w-full h-96 hover:scale-110 ease-in-out duration-500" src="{{asset('images/products/1.jpg')}}" alt=""></div></a>
                <h1 class="py-2 text-center text-2xl font-semibold">Polypeptide Heal <br>    <span class="text-xl font-medium">Damaged skin Ice crystal</span></h1>
                <p class="pb-2 tracking-tight">Loại bỏ tình trạng ngứa ran, mẩn đỏ, khô, ngứa, rát da. Chăm sóc toàn diện cho làn da bị tổn thương.</p>
                <a href="#">
                    <div>
                        <p class="w-full text-center py-3 border-2 border-blue-500 font-semibold text-xl text-blue-500 hover:text-white hover:bg-blue-500 ease-in-out duration-300">THÀNH PHẦN</p>
                        <P class="my-2 w-full text-center py-3 border-2 border-blue-500 font-semibold text-xl bg-blue-500 text-white hover:text-blue-500 hover:bg-white ease-in-out duration-300">THÊM VÀO GIỎ HÀNG</P>
                    </div>
                </a>
            </div>
            <div class="overflow-hidden">
                <a href="#"><div class="overflow-hidden">
                        <img class="w-full h-96 hover:scale-110 ease-in-out duration-500" src="{{asset('images/products/2.jpg')}}" alt=""></div></a>
                <h1 class="py-2 text-center text-2xl font-semibold"> Essential Oils <br><span class="text-xl font-medium">Soothing and restoring</span></h1>
                <p class="pb-2 tracking-tight">Phục hồi các tế bào cơ bản, thúc đẩy sự phân chia và tái tạo nhanh chóng của nguyên bào sợi, đẩy nhanh quá trình trao đổi chất.</p>
                <a href="#">
                    <div>
                        <p class="w-full text-center py-3 border-2 border-blue-500 font-semibold text-xl text-blue-500 hover:text-white hover:bg-blue-500 ease-in-out duration-300">THÀNH PHẦN</p>
                        <P class="my-2 w-full text-center py-3 border-2 border-blue-500 font-semibold text-xl bg-blue-500 text-white hover:text-blue-500 hover:bg-white ease-in-out duration-300">THÊM VÀO GIỎ HÀNG</P>
                    </div>
                </a>
            </div>
            <div class="overflow-hidden">
                <a href="#"><div class="overflow-hidden">
                        <img class="w-full h-96 hover:scale-110 ease-in-out duration-500" src="{{asset('images/products/3.jpg')}}" alt=""></div></a>
                <h1 class="py-2 text-center text-2xl font-semibold">Soothing Balance<br><span class="text-xl font-medium"> Repair Cream</span></h1>
                <p class="pb-2 tracking-tight">Nhanh chóng thẩm thấu vào sâu trong da, phục hồi làn da vốn đã bị tổn thương, giảm hiện tượng khô ngứa và châm chích.
                </p>
                <a href="#">
                    <div>
                        <p class="w-full text-center py-3 border-2 border-blue-500 font-semibold text-xl text-blue-500 hover:text-white hover:bg-blue-500 ease-in-out duration-300">THÀNH PHẦN</p>
                        <P class="my-2 w-full text-center py-3 border-2 border-blue-500 font-semibold text-xl bg-blue-500 text-white hover:text-blue-500 hover:bg-white ease-in-out duration-300">THÊM VÀO GIỎ HÀNG</P>
                    </div>
                </a>
            </div>
            <div class="overflow-hidden">
                <a href="#"><div class="overflow-hidden">
                        <img class="w-full h-96 hover:scale-110 ease-in-out duration-500" src="{{asset('images/products/4.jpg')}}" alt=""></div></a>
                <h1 class="py-2 text-center text-2xl font-semibold">White Serum<br><span class="text-xl font-medium">Repairing Active</span></h1>
                <p class="pb-2 tracking-tight">Kết hợp nhiều thành phần làm trắng có nguồn gốc từ thực vật để giảm sắc tố và làm sáng da từ trong ra ngoài.</p>
                <a href="#">
                    <div>
                        <p class="w-full text-center py-3 border-2 border-blue-500 font-semibold text-xl text-blue-500 hover:text-white hover:bg-blue-500 ease-in-out duration-300">THÀNH PHẦN</p>
                        <P class="my-2 w-full text-center py-3 border-2 border-blue-500 font-semibold text-xl bg-blue-500 text-white hover:text-blue-500 hover:bg-white ease-in-out duration-300">THÊM VÀO GIỎ HÀNG</P>
                    </div>
                </a>
            </div>
        </div>
    </div>


@endsection
