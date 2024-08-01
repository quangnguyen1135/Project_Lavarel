<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('book_tables')->insert([
            'name' => 'Nguyen Van A',
            'email' => 'nguyenvana@gmail.com',
            'phone' => 0347123123,
            'seats' => 1,
            'reservation_time' => '2024-08-01 20:00:00'
        ]);
    }
}
