<?php

namespace App\Http\Controllers;

use App\Order;
use App\Models\Restaurant;
use Illuminate\Http\Request;

class RestaurantOrderController extends Controller
{
    public function index($id)
    {
        $resto = Restaurant::find($id);
        if(!$resto){
            abort(404,'the restaurant you are looking does not exists');
        };
        $orders = Order::where('resto_id',$id)
        ->orderBy('isComplete')
        ->paginate(20);
        
        foreach($orders as $key => $value)
        {
            $orders[$key]['order_details'] = json_decode($value['order_details']);
            //echo'<pre>';
            //var_dump($orders[$key]['order_details']);die;
        }
        

        return view('orders.order-index')
                ->with('orders',$orders)
                ->with('resto', $resto);
    }
    public function add($id)
    {
        $resto = Restaurant::find($id);
        return view('orders.order-add')
               ->with('resto',$resto); 
    }
}
