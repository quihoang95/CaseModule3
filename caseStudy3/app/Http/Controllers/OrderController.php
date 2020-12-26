<?php

namespace App\Http\Controllers;

use App\Http\Services\OrderService;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    protected $orderService;
    public function __construct(OrderService $orderService)
    {
        $this->orderService = $orderService;
    }
    public function index()
    {
        $orders = Order::all();
        $customers = Customer::all();
        $products = Product::all();
        return view('admin.orders.order',compact('orders','customers','products'));
    }
    public function orderdetail($id)
    {

        $orders     = Order::where('id',$id)->get();
        $customers  = Customer::all();
        $products   = Product::all();

        return view('admin.orders.orderDetail',compact('orders','customers','products'));
    }
    public function destroy($id)
    {
        $order = $this->orderService->findById($id);
        $order->delete();
        $message = 'Xóa đơn hàng thành công';
        return redirect()->route('orders.index')->with('success',$message);
    }

    public function confirm($id)
    {
        $order = $this->orderService->findById($id);
        if($order ->status == 1) {
            $order->status = 2;
            $order->save();
            foreach ($order ->products as $item){
                $product = Product::find($item->id);
                $product->stock -= $item->pivot->quantity;

                $product->save();
            }

            $message = 'Xác nhận đơn hàng thành công';
            return redirect()->route('orders.index')->with('success',$message);
        }else {
            $message = 'Đơn hàng đã được xác nhận';
            return redirect()->route('orders.index')->with('info',$message);
        }
    }

}
