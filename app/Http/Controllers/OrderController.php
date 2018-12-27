<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;


class OrderController extends Controller
{
	public function displayViewOrder(){
    	return view('test.list_order');
    }
    public function getViewOrder(){
    	$list_order = Order::get();
    	return $this->successResponse($list_order, 'Get List Orders successfully');
    }
    public function postEditOrder(Request $request){
    	$order_id = $request->id;
    	$order_code = $request->order_code;
    	$user_name = $request->user_name;
    	$phone = $request->phone;
    	$email = $request->email;
    	

    	Order::where('id', $order_id)
    		->update(['order_code' => $order_code, 'name' => $user_name, 'phone'=>$phone, 'email'=>$email]);

    	return $this->successResponse([], 'Update successfully!'); 
    }



}
