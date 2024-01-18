<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;
    // lấy product  từ database
    public function getProducts(){
        //Query Builder
        //$products = DB::table('products')->get();
        //Eloquent ORM
        $products = Product::paginate(10);
        return $products;
    }
 // product home
 public function getProducthome(){
    return Product::limit(6)->get();
}
    public function getOneProduct($id)
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
