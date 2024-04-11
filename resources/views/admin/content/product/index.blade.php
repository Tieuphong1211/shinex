@extends('layouts.adminLayout')

@section('product_index')

    <div class="flex flex-col overflow-x-hidden">
        <div class="sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-x-hidden">
                    <table class="min-w-full text-start text-sm font-light text-surface dark:text-white">
                        <thead class="border-b border-neutral-200 font-medium dark:border-white/10">
                            <tr class="bg-slate-200">
                                <th scope="col">#</th>
                                <th scope="col">id</th>
                                <th scope="col" class="min-w-[5rem]">Hình ảnh</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Miêu tả</th>
                                <th scope="col">Nội dung</th>
                                <th scope="col">Hành động</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $product)
                                @php
                                    $ordinalNumber =
                                        $products->perPage() * ($products->currentPage() - 1) + $loop->iteration;
                                    $firstOrdinalNumber = $products->perPage() * ($products->currentPage() - 1) + 1;
                                    $lastOrdinalNumber = $products->perPage() * $products->currentPage();
                                    if ($lastOrdinalNumber > $products->total()) {
                                        $lastOrdinalNumber = $products->total();
                                    }
                                @endphp
                                <tr class="border-b border-neutral-200 dark:border-white/10">
                                    <td class="whitespace-nowrap font-medium"> {{ $ordinalNumber++ }}</td>
                                    <td class="whitespace-nowrap ">
                                        {{ $product->id }}
                                    </td>
                                    <td class="whitespace-nowrap ">
                                        <div class="flex justify-center items-center">
                                            <img src="{{ $product->images }}" class="w-16 h-16" alt="">
                                        </div>
                                    </td>
                                    <td class="text-left align-top max-h-5 max-w-2xl whitespace-normal overflow-y-auto">
                                        <p class="text-left align-top max-h-20">
                                            {{ $product->name }}
                                        </p>
                                    </td>
                                    <td class="text-left align-top max-h-5 max-w-2xl whitespace-normal overflow-y-auto">
                                        <p class="text-left align-top max-w-[100%] max-h-20">
                                            {{ $product->description }}
                                        </p>
                                    </td>
                                    <td class="text-left align-top max-h-5 max-w-2xl whitespace-normal overflow-y-auto">
                                        <p class="text-left align-top max-w-[100%] max-h-20">
                                            {{ $product->content }}
                                        </p>
                                    </td>
                                    <td class="whitespace-nowrap ">
                                        <div class="flex justify-center items-center gap-2">
                                            <button class="button-hover edit-button" data-twe-toggle="modal"
                                                data-twe-target="#editModal" data-twe-ripple-init
                                                data-twe-ripple-color="light"
                                                data-values='{"id": "{{ $product->id }}", "name": "{{ $product->name }}", "image": "{{ $product->images }}", "description": "{{ $product->description }}", "content": "{{ $product->content }}" }'>
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button class="button-hover delete-button" data-twe-toggle="modal"
                                                data-product-id="{{ $product->id }}"
                                                data-product-name="{{ $product->name }}" data-twe-target="#staticBackdrop"
                                                data-twe-ripple-init data-twe-ripple-color="light">
                                                <i class="fa-solid fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="flex justify-end gap-9">
        <button>Số dòng trên trang: <strong>8</strong></button>
        <button><span class="font-bold">{{$firstOrdinalNumber}} - {{$lastOrdinalNumber}}</span> của tổng số <strong>{{ $num_of_records }}</strong></button>
        {{ $products->links('vendor/pagination/tailwind') }}
    </div>

    @include('admin.content.product.delete')
    @include('admin.content.product.add')
    @include('admin.content.product.edit')

    <script>
        var modalBody = document.getElementById("modal-body");

        $(".delete-button").click(function() {

            var productID = $(this).data('productId');
            var productName = $(this).data('productName');

            modalBody.innerHTML = "Bạn có chắc muốn xóa sản phẩm " + productName + " ,id = " + productID;
            $("#delete-form").attr('action', '/admin/product/delete/' + productID);

        })

        $(".edit-button").click(function() {

            var productObject = $(this).data('values');
            console.log(productObject);
            $('#edit-name').val(productObject.name);

            $('#edit-thumbnail').val(productObject.image)
            var imgTag = '<img src="' + productObject.image +
                '" alt="Thumbnail Image" class="w-[5rem] h-[5rem]" />';
            $("#edit-holder").html(imgTag);

            $('#edit-description').val(productObject.description)
            $('#edit-content').val(productObject.content)

            $("#edit-product-form").attr('action', '/admin/product/edit/' + productObject.id);

        })
    </script>
@endsection
