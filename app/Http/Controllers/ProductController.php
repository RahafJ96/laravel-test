<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.index',['products'=>$products]);
    }


    public function search(Request $request){

        $fromDate= $request->input('fromDate');
        $toDate=$request->input('toDate');
     $query = DB::table('products')->select()
     ->where("(created_at >= ? AND created_at <= ?)",[$fromDate."00:00:00",$toDate."23:59:59"])
     ->get();
     
    //  dd($query); 

 

     return view('report.report',compact('query','role'));
     
    }


}
