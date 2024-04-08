<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;

class AdminProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(): Factory|View|Application
    {
        // Trả về view hiển thị danh sách sản phẩm
        return view('admin.content.product.index', ['page' => "product.index"]);

    }
    public function add(): Factory|View|Application
    {
        // Trả ve view thêm sản phẩm
    }

    public function store(Request $request)
    {
        // post them mới san pham
        // redirect ve trang danh sach san pham
    }
    public function edit($id): Factory|View|Application
    {
        // tra ve view edit san pham
    }
    public function update($id, Request $request)
    {
        // post update san pham
        // redirect ve trang danh sach san pham
    }
    public function destroy($id)
    {
        // xoa san pham
        // redirect ve trang danh sach san pham
    }
}
