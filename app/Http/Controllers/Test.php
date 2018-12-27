<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
   /* public function __construct()
    {

    }*/

    public function getTestHome(){
        return view('test.test0');
    }
    public function getTest1(){
    	return view('test.test1');
    }

    public function getTest2(){
    	return view('test.test2');
    }
    public function getTest3(){
    	return view('test.test3');
    }

    

}
