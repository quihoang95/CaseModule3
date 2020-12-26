<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Http\Requests\CartRequest;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $oldCart = session('cart');
        $cart = new Cart($oldCart);
        $cart->add($product);
        session()->put('cart',$cart);
        return back()->with('success','Thêm thành công');
    }
    public function  minusToCar($id)
    {
        $product = Product::findOrFail($id);
        $oldCart = session('cart');
        $cart = new Cart($oldCart);
        $cart->minus($product);
        session()->put('cart',$cart);
        return back()->with('successAddToCart','Giảm thành công');
    }
    public function showCart(){
        $cart = session('cart');
        return view('web.cart.cart',compact('cart'));
    }
    public function deleteCart(){
        session()->forget('cart');
        $message = "Xóa giỏ hàng thành công";
        return redirect()->route('cart.show')->with('success',$message);
    }
    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);
        $oldCart = session('cart');
        $cart = new Cart($oldCart);
        $cart->remove($product);
        session()->put('cart',$cart);
        $message = 'Xóa sản phẩm thành công';
        return back()->with('success',$message);
    }
    public function checkout(CartRequest $request)
    {
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->phoneNumber = $request->input('phoneNumber');
        $customer->address = $request->input('address');
        $customer->email = $request->input('email');
        $customer->save();

        $order = new Order();
        $order->customer_id = $customer->id;
        $order->comment = $request->input('comment');
        $order->status = 1;
        $order->save();
        $orders_id = $order->id;

        $oldCart = session('cart') ? session('cart'): null;
        $cart = new Cart($oldCart);
        foreach ($cart->items as $item) {
            $product_id = $item['product']->id;
            $quantity = $item['totalQty'];
            $priceEach = $item['product']->priceEach;
            DB::table('order_detail')->insert([
               'orders_id'=>$orders_id,
                'product_id'=>$product_id,
                'quantity'=> $quantity,
                'priceEach'=>$priceEach
            ]);
        }
        session()->forget('cart');
        $message = 'Đặt hàng thành công';
        return redirect()->route('cart.show')->with('success',$message);
    }
}
