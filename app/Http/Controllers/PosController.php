<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class PosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
    	$product=DB::table('products')
		    	->join('categories','products.cat_id','categories.id')
		    	->select('categories.cat_name','products.*')
		    	->get();
    	$categories=DB::table('categories')->get();
    	return view('pos', compact('product','categories'));
    }
}
