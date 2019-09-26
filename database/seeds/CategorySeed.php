<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category=['Elektronik','Beyaz Eşya','Kozmetik'];
        foreach ($var as $category) 
        {
          DB::table('category')->insert([
            'name'=>$var
          ]);
        }
    }
}
