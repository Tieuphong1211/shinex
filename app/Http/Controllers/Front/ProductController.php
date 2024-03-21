<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function detail($slug)
    {
        $product = [];
        switch ($slug){
            case 'whitening-remove-freckle-cream':
                $product = [
                    'name' => 'SHINEX Whitening Remove Freckle Cream',
                    'price' => 100000,
                    'description' => 'This is product 1'
                ];
                break;
            case 'product-2':
                $data = [
                    'name' => 'Product 2',
                    'price' => 200000,
                    'description' => 'This is product 2'
                ];
                break;
            case 'product-3':
                $data = [
                    'name' => 'Product 3',
                    'price' => 300000,
                    'description' => 'This is product 3'
                ];
                break;
            default:
                return false;
        }
        return view('front.product.detail');
    }
}
