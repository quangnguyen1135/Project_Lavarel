<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    // lấy product  từ database
    public function getProducts()
    {
        //Query Builder
        //$products = DB::table('products')->get();
        //Eloquent ORM
        $products = Product::paginate(10);
        return $products;
    }


    // phuong thuc lay san pham cho trang product
    public function getALLProductsPageFrontend()
    {
        //Query Builder
        //$products = DB::table('products')->get();
        //Eloquent ORM
        $products = Product::paginate(8);
        return $products;
    }
    public function get_ByCategoryId1()
    {
        return Product::where('cate_id', 1)->paginate(8);
    }
    public function get_ByCategoryId2()
    {
        return Product::where('cate_id', 2)->paginate(8);
    }
    public function get_ByCategoryId3()
    {
        return Product::where('cate_id', 3)->paginate(8);
    }
    public function get_ByCategoryId4()
    {
        return Product::where('cate_id', 4)->paginate(8);
    }
    public function getProductsByCategoryId($cate_id)
    {
        return Product::where('cate_id', $cate_id)->paginate(8);
    }
    // phuong thuc lay san pham cho trang product


    // product home
    public function getProducthome()
    {
        return Product::limit(6)->get();
    }

    public function getProductsByCategoryId1()
    {
        return Product::where('cate_id', 1)->limit(6)->get();
    }
    public function getProductsByCategoryId2()
    {
        return Product::where('cate_id', 2)->limit(6)->get();
    }
    public function getProductsByCategoryId3()
    {
        return Product::where('cate_id', 3)->limit(6)->get();
    }
    public function getProductsByCategoryId4()
    {
        return Product::where('cate_id', 4)->limit(6)->get();
    }

    // product home


    // lay id de xuat ra chi tiet san pham
    public function getDetails($id)
    {
        return Product::find($id);
    }

    //Cập nhật sản phẩm vào data base
    public function updateSP($product, $id)
    {
        //Query builder
        //$editSP = DB::table('products')->where('id',$id)->update($product);
        //Eloquent ORM
        $prod = Product::find($id);
        $prod->code = $product['code'];
        $prod->name = $product['name'];
        $prod->price = $product['price'];
        $prod->description = $product['description'];
        return $prod->save();
    }
    protected $fillable = [
        'code', // Add 'code' to the fillable attributes
        'name',
        'price',
        'image',
        'description',
    ];
    // In your Product model
    public function createProduct($productData)
    {
        return Product::created($productData);
    }
}
