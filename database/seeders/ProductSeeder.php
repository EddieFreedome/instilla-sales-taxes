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
     */
    public function run(): void
    // {
    //     DB::raw("INSERT INTO `instilla-db`.products (title,price,imported,duty,created_at,updated_at) VALUES
	//  ('The Lord of the Rings',50.5,0,0.05,NULL,NULL),
	//  ('Game of Thrones',25.0,0,0.05,NULL,NULL),
	//  ('Chocolate bar',9.99,1,0.05,NULL,NULL),
	//  ('Box of chocolates',14.99,0,0.05,NULL,NULL),
	//  ('Headache pills',15.0,0,0.05,NULL,NULL),
	//  ('Music CD',15.0,0,0.05,NULL,NULL),
	//  ('Bottle of perfume',50.5,1,0.05,NULL,NULL)");

    }
}
