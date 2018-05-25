<?php

namespace Gestor_Matrimonial\Http\Controllers;

use Gestor_Matrimonial\Models\Payment;
use Gestor_Matrimonial\Models\Product;
use Gestor_Matrimonial\Models\Shopping_Cart;
use Gestor_Matrimonial\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function index()
    {
        $count_shop = Shopping_Cart::where([
            ['id_user', '=', Auth::id()],
            ['id_pay', '=', Null],
        ])->count();

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

        return view('shop/tiendaHome', ['categorias' => $categorias, 'destacados' => $destacados, 'count_shop' => $count_shop]);
    }

    public function ShopB(){
        $count_shop = Shopping_Cart::where([
            ['id_user', '=', Auth::id()],
            ['id_pay', '=', Null],
        ])->count();
        return view('shop/tiendaBodas', ['count_shop' => $count_shop]);
    }

    public function categoryView($id){
        $category = DB::table('categories')->where('id', $id)->first();
        $productos = DB::table('products')->where('id_category', $id)->get();
        return view('shop/categoryView', ['productos' => $productos, 'category' => $category]);
    }

    public function productView($id){
        $count_shop = Shopping_Cart::where([
            ['id_user', '=', Auth::id()],
            ['id_pay', '=', Null],
        ])->count();
        $product_added = false;
        if (Shopping_Cart::where([
                ['id_product', '=', $id],
                ['id_user', '=', Auth::id()],
                ['id_pay', '=', Null],
            ])->count() != 0){
            $product_added = true;
        }
        $producto = DB::table('products')->where('id', $id)->first();
        $category = DB::table('categories')->where('id', $producto->id_category)->first();
        return view('shop/product', ['producto' => $producto, 'product_added' => $product_added, 'count_shop' => $count_shop, 'category' => $category]);
    }

    public function productAdd($id){
        Shopping_Cart::create(['id_user'=>Auth::id(), 'id_product' => $id]);
        return redirect(url('product/'.$id));
    }

    public function productRemove($id){
        Shopping_Cart::where([
            ['id_product', '=', $id],
            ['id_user', '=', Auth::id()],
            ['id_pay', '=', Null],
        ])->delete();
        return redirect(url('product/'.$id));
    }

    public function productRemove_p($id){
        Shopping_Cart::where([
            ['id_product', '=', $id],
            ['id_user', '=', Auth::id()],
            ['id_pay', '=', Null],
        ])->delete();
        return redirect(url('shopping_cart'));
    }

    public function shoppingCart(){
        $count_shop = Shopping_Cart::where([
            ['id_user', '=', Auth::id()],
            ['id_pay', '=', Null],
        ])->count();
        $shops = Shopping_Cart::where([
            ['id_user', '=', Auth::id()],
            ['id_pay', '=', Null],
        ])->get();
        $total = 0;
        foreach ($shops as $shop){
            $prod = Product::find($shop->id_product);
            $shop->name = $prod->name;
            $shop->description = $prod->description;
            $shop->price = $prod->price;
            $total += $prod->price;
        }
        return view('shop/shopping_cart', ['shops' => $shops, 'count_shop' => $count_shop, 'total' => $total]);
    }

    public function showPay($id){
        $count_shop = 0;
        $shops = Shopping_Cart::where([
            ['id_user', '=', Auth::id()],
            ['id_pay', '=', $id],
        ])->get();
        $total = 0;
        foreach ($shops as $shop){
            $prod = Product::find($shop->id_product);
            $shop->name = $prod->name;
            $shop->description = $prod->description;
            $shop->price = $prod->price;
            $total += $prod->price;
        }
        return view('shop/show_pay', ['shops' => $shops, 'count_shop' => $count_shop, 'total' => $total]);
    }

    public function Pay(){
        $count_shop = Shopping_Cart::where([
            ['id_user', '=', Auth::id()],
            ['id_pay', '=', Null],
        ])->count();
        if ($count_shop == 0){
            return redirect(url('/'));
        }

        $shops = Shopping_Cart::where([
            ['id_user', '=', Auth::id()],
            ['id_pay', '=', Null],
        ])->get();

        $total = 0;
        $uid = uniqid();

        $pay = Payment::create([
            'id_user' => Auth::id(),
            'reference_pay' => $uid,
            'accept_pay' => 0,
            'value_pay' => $total,
            'signature' => md5("4Vj8eK4rloUd272L48hsrarnUA~508029~$uid~$total~COP")
        ]);

        foreach ($shops as $shop){
            $price = Product::find($shop->id_product)->price;
            $shop->id_pay = $pay->id;
            $shop->update();
            $total += $price;
        }

        $pay->value_pay = $total;
        $pay->update();

        $user = User::find(Auth::id());
        return view('shop/redirect_pay', ['pay' => $pay, 'user' => $user]);
    }

    public function go_to_payu($pay_id){
        $pay = Payment::find($pay_id);
        $user = User::find(Auth::id());
        return view('shop/redirect_pay', ['pay' => $pay, 'user' => $user]);
    }

    public function payHistory(){
        $payments = Payment::where([
            ['id_user', '=', Auth::id()]
        ])->get();

        return view('shop/pay_history', ['payments' => $payments]);
    }

}
