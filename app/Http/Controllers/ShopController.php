<?php

namespace Gestor_Matrimonial\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index()
    {
        $categorias = DB::table('categories')->get();

        $productos = DB::table('products')->get();

        $categoriasDes = array();

        $destacados = array();

        foreach ($productos as $producto){
            if (!in_array($producto->id_category, $categoriasDes)){
                array_push($categoriasDes, $producto->id_category);
                array_push($destacados, $producto);
            }
        }

        return view('shop/tiendaHome', ['categorias' => $categorias, 'destacados' => $destacados]);
    }

    public function ShopB(){
        return view('shop/tiendaBodas');
    }

    public function productView($id){
        $producto = DB::table('products')->where('id', $id)->first();
        return view('shop/product', ['producto' => $producto]);
    }

    public function categoryView($id){
        $category = DB::table('categories')->where('id', $id)->first();
        $productos = DB::table('products')->where('id_category', $id)->get();
        return view('shop/categoryView', ['productos' => $productos, 'category' => $category]);
    }
}
