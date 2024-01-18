<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\product;

class ProductFrontendController extends Controller
{
  // ProductFrontendController
public function product()
{
    $product_data = new Product();
    return view('frontend.home.index', ['products_home' => $product_data->getProducthome()]);

}


}
