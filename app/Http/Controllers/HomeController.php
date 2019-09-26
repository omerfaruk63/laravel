<?php
/*$users = DB::select('select * from category' );
print_r($users);
die;*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

  public function home(){
      $category = DB::table('category')->get();
        $product = DB::table('product')->get();
    return view('home',['category' => $category,'product' => $product]);
    }

    public function cat($id){
        $category = DB::table('category')->get();
          $product = DB::table('product')->where('categoryid',$id)->get();

      return view('home',['category' => $category,'product' => $product]);
      }


    public function category(){
    $category = DB::table('category')->get();
      return view('category', ['category' => $category]);

    }



      public function categoryadd(){
        return view('categoryadd');
        }

        public function cataddpost(Request $request )
        {

            DB::table('category')->insert([
              'name'=>$request->input('name')
            ]);

            $category = DB::table('category')->get();
              return view('category', ['category' => $category]);
        }

        public function product(){
          $product = DB::table('product')->get();
            return view('product', ['product' => $product]);
          }

        public function productadd(){

          $category = DB::table('category')->get();
            return view('productadd', ['category' => $category]);
          }

          public function proaddpost(Request $request )
          {
            DB::table('product')->insert([
              'name'=>$request->input('name'),
              'description'=>$request->input('description'),
              'price'=>$request->input('price'),
              'stock'=>$request->input('stock'),
              'categoryid'=>$request->input('categoryid')
            ]);
            $product = DB::table('product')->get();
              return view('product', ['product' => $product]);
          }
}
