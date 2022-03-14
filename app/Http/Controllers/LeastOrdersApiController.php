<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class LeastOrdersApiController extends Controller
{
    public function allproducts()
    {
        return Order::all();
    }
    public  function storeproducts(){

        return Order::create([
            'user_id'=> request('user_id'),
            'status'=> request('status')
        ]);
    }

    public function updateproducts(Order $post){
        $success = $post->update([
            'user_id'=> request('user_id'),
            'status'=> request('status')
        ]);
    
        return [ 'success' => $success];
    }

    public function destroyproducts(Order $post){
        $success = $post ->delete();
        return [ 'success' => $success];
    }
}
