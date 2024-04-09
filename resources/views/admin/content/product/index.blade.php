@extends('layouts.adminLayout')

@section('product_index')
    <table class="w-[100%] border-2 border-slate-200">
        <tr class="bg-slate-200">
            <th> STT </th>
            <th> id </th>
            <th> Tên </th>
            <th> Hình ảnh </th>
            <th> Miêu tả </th>
            <th> Nội dung </th>
            <th> Hành động </th>
        </tr>
        @php
            $ordinalNumber = 1;
        @endphp
        @foreach ($products as $product)
            <tr class="text-center">
                <td>{{ $ordinalNumber++ }}</td>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->images }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->content }}</td>
                <td class="flex gap-2 justify-center align-center">
                    <button class="button-hover edit-button" data-twe-toggle="modal" data-twe-target="#editModal" data-twe-ripple-init
                        data-twe-ripple-color="light"
                        data-values='{"id": "{{ $product->id }}", "name": "{{ $product->name }}", "image": "{{ $product->images }}", "description": "{{ $product->description }}", "content": "{{ $product->content }}" }'>
                        <i class="fa-solid fa-pen-to-square"></i>
                    </button>
                    <button class="button-hover delete-button" data-twe-toggle="modal"
                        data-product-id="{{ $product->id }}" data-product-name="{{ $product->name }}"
                        data-twe-target="#staticBackdrop" data-twe-ripple-init data-twe-ripple-color="light">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </td>
            </tr>
        @endforeach

    </table>

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
            var imgTag = '<img src="' + productObject.image + '" alt="Thumbnail Image" class="w-[5rem] h-[5rem]" />';
            $("#edit-holder").html(imgTag);

            $('#edit-description').val(productObject.description)
            $('#edit-content').val(productObject.content)

            $("#edit-product-form").attr('action', '/admin/product/edit/' + productObject.id);

        })

    </script>
@endsection
