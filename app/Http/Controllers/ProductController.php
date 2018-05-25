<?php

namespace Gestor_Matrimonial\Http\Controllers;

use Gestor_Matrimonial\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $categories = DB::table('categories')->get();
        $products = DB::table('products')->get();
        $user = User::find(Auth::id());
        return view('product/product', ['products' => $products, 'user_role' => $user->role, 'categories' => $categories]);
    }

    public function newProductView(){
        $categories = DB::table('categories')->get();
        $user = User::find(Auth::id());
        return view('product/create', ['user_role' => $user->role, 'categories' => $categories]);
    }

    public function newProduct(){
        $data = Request()->validate([
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category' => 'required',
            'imageURL' => 'required'
        ], [
            'category.required' => 'El campo es obligatorio',
            'name.required' => 'El campo es obligatorio',
            'description.required' => 'El campo es obligatorio',
            'price.required' => 'El campo es obligatorio',
            'category.required' => 'El campo es obligatorio',
            'imageURL.required' => 'El campo es obligatorio'
        ]);

        DB::table('products')->insert([
            'id_category' => $data['category'],
            'name' => $data['name'],
            'description' => $data['description'],
            'price' => $data['price'],
            'imageURL' => $data['imageURL'],
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect('product');
    }

    public function deleteProduct($id){
        DB::delete('DELETE FROM `products` WHERE `products`.`id` = '.$id);

        return redirect()->route('product');
    }
}
