<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App \Repositories\Product;

class FrontController extends Controller 
{
    public static function getIndex()
    {
        $data['product'] = product::getAll();
        return view('front.index',$data);
    }
}