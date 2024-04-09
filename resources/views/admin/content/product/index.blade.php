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
            $ordinalNumber = 1
        @endphp
        @foreach($products as $product)
            <tr class="text-center">
                <td>{{ $ordinalNumber++ }}</td>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->images }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->content }}</td>
                <td class="flex gap-2 justify-center align-center">
                    <button class="button-hover"><i class="fa-solid fa-pen-to-square"></i></button>
                    <button class="button-hover"><i class="fa-solid fa-trash"></i></button>
                </td>
            </tr>
        @endforeach
        
    </table>
@endsection