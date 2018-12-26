<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function getListUser(){
    	$list_user = json_encode(User::get());
    	return view('users.list_user')->with('list_user', $list_user);
    }
    public function displaytestAngular(){
    	return view('users.angular');
    }
    public function testAngular(){
    	$list_user = User::get();
    	return $this->successResponse($list_user, 'Get List Users successfully');
    }
    public function postSaveUserEdited(Request $request) {
    	$user_id = $request->id;
    	$username = $request->username;
    	$email = $request->email;
    	

    	User::where('id', $user_id)
    		->update(['name' => $username, 'email' => $email]);

    	return $this->successResponse([], 'Update successfully!');  
    }
}
