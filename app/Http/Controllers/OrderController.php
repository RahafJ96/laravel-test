<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){
        $orders = Order::all();
        return view('orders.index',['orders'=>$orders]);
    }
    public function edit(Order $order){
    
        return view('orders.edit',['order'=>$order]);
    }
    public function update(Order $order){
    
        request()->validate([
            'user_id'=>'required',
            'status'=>'required'
        ]);
        
        $order->update([
            'user_id'=>request('user_id'),
            'status'=>request('status')
        ]);
        return redirect('/orders');



    }
}
