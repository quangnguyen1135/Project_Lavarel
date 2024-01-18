<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth; // Import Auth facade

class ProductController extends Controller
{
    
    public function product()
    {
        $product_data = new Product();
        return view('backend.Product.index', ['products' => $product_data->getProducts()]);
    }

    public function getOneProduct($id)
    {
        $get_one_product = new Product();
        return view('backend.Product.edit', ['product' => $get_one_product->getOneProduct($id)]);
    }

    public function edit(Request $request)
    {
        $str_id = $request->input('id');
        $str_code = $request->input('code');
        $str_name = $request->input('name');
        $str_price = $request->input('price');
        $str_description = $request->input('description');

        $product = [
            'code' => $str_code,
            'name' => $str_name,
            'price' => $str_price,
            'cate_id' => $request->input('cate_id'), // Add this line for cate_id
            'description' => $str_description
        ];


        $prod = new Product();
        if ($prod->updateSP($product, $str_id) == 1) {
            return redirect()->route('product.index')->with("success", "Cập nhật sản phẩm thành công");
        } else {
            return redirect()->route('admin.product.edit', [$str_id])->with("error", "Cập nhật sản phẩm thất bại");
        }
    }

    // Add a new method for displaying the form to add a new product
    public function addProduct()
    {
        return view('backend.Product.add');
    }

    public function doAddProduct(Request $request)
    {
        // Validate the form data
        $request->validate([
            'code' => 'required|numeric',
            'name' => 'required|string',
            'price' => 'required|numeric',
            'cate_id' => 'required|numeric', // Add this line for cate_id validation
            'description' => 'required|string',
        ]);

        // Create a new product
        // Example for inserting a new record
        Product::create([
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'image' => $request->input('image'),
            'price' => $request->input('price'),
            'cate_id' => $request->input('cate_id'), // Add this line for cate_id
            'description' => $request->input('description'),
        ]);


        // Redirect to the product list with a success message
        return redirect()->route('product.index')->with("success", "Thêm sản phẩm mới thành công");
    }
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('product.index')->with("error", "Sản phẩm không tồn tại");
        }
        $product->delete();
        return redirect()->route('product.index')->with("success", "Xóa sản phẩm thành công");
    }
}
