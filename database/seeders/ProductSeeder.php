<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $limit = 100;
        for($i=0; $i<$limit; $i++)
        {
            $cate_ids = DB::table('categories')->pluck('id');
            $product =[
                'code'=>fake()->numerify('300-####-###'),//300-1234-123
                'name'=>fake()->name(),
                'price'=>fake()->numerify('####'),
                'cate_id'=>fake()->randomElement($cate_ids),
                'image'=>fake()->imageUrl($width=400, $height=400),
                'description'=>fake()->paragraph(3)
            ];
           //Insert dữ liệu vừa tự động vào db
           Product::create($product);
        }
    }
}
