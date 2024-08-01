<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ProductFrontendController extends Controller
{
    // ProductFrontendController
    public function productHome()
    {
        $product_data = new Product();
        return view('frontend.home.index', [
            'products_home' => $product_data->getProducthome(),
            'products_home1' => $product_data->getProductsByCategoryId1(),
            'products_home2' => $product_data->getProductsByCategoryId2(),
            'products_home3' => $product_data->getProductsByCategoryId3(),
            'products_home4' => $product_data->getProductsByCategoryId4()
        ]);
    }
  // ProductFrontendController.php
    public function getProductsByCategory($cate_id = null)
        {
            $product_data = new Product();
            $products = ($cate_id) ? $product_data->getProductsByCategoryId($cate_id) : $product_data->getALLProductsPageFrontend();

            if (request()->ajax()) {
                return response()->json(view('frontend.productFrontend.productFrontendPage', compact('products'))->render());
            }

            return view('frontend.productFrontend.productFrontendPage', compact('products', 'cate_id'));
        }



    // chi tet san pham
    public function showDetails($id)
    {
        $productModel = new Product();
        $product = $productModel->getDetails($id);
        return view('frontend.productFrontend.productInfor', compact('product'));
    }
}
