<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Repositories\customers;
use Hash;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('front.login');

    }
      
    public function postLogin(Request $request)
    {
        $Validator::make( $request-> all(),
        [
            'email' => 'required|email',
            'password' => 'min:6|required',
        ]
        );
        if ($validaotr->fails()) {
            $message = $b=validator->errors()->all();
            return redirect()->back()-with('danger',imploade(',',$message));

        }
        $customers = Customers::findby('email', $request->email);

        if($customers->id == null) {
            return redirect()->back()->with('danger', 'customers not found');
            
        }
    }
}
