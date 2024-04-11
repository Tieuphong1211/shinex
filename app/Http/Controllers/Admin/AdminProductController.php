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
        $products = product::paginate(8);
        $num_of_records = product::count();

        return view('admin.content.product.index', ['page' => "product.index", 'products' => $products, 'num_of_records' => $num_of_records]);

    }
    public function add(): Factory|View|Application
    {
        // Trả ve view thêm sản phẩm
    }

    public function store(Request $request)
    {
        // post them mới san pham
        // redirect ve trang danh sach san pham
        $product = new product();
        $product->name = $request->input('product-name');
        $product->images = $request->input('file-path');
        $product->slug = "default";
        $product->description = $request->input('product-description');
        $product->content = $request->input('product-content');

        $product->save();
        
        return redirect()->back();
        
    }
    public function edit($id): Factory|View|Application
    {
        // tra ve view edit san pham
    }
    public function update($id, Request $request)
    {
        // post update san pham
        // redirect ve trang danh sach san pham
        $product = product::find($id);

        $product->name = $request->input('edit-name');
        $product->images = $request->input('file-path');
        $product->description = $request->input('edit-description');
        $product->content = $request->input('edit-content');

        $product->save();

        return redirect()->back();

    }
    public function destroy($id)
    {
        // xoa san pham
        // redirect ve trang danh sach san pham

        $product = product::find($id);
        $product->delete();

        return redirect()->back();

    }
}
