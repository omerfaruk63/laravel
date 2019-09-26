<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      foreach ($var as $category)
      {
        DB::table('product')->insert([
          'name'=>"Iphone",
          'description'=>"32GB",
          'price'=>2500,
          'stock'=>25,
        ]);
    }
}
