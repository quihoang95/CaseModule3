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

}
