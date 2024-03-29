<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\models\User;
use App\models\Product;

class HomeController extends Controller
{
    public function index()
    {
        $product=Product::paginate(3);
        return view('home.userpage',compact('product'));
    }

    public function redirect()
    {
        $usertype=Auth::user()->usertype;

        if($usertype =='1')
        {
            return view('admin.home');
        }
        else
        {
            return view('dashboard');
        }
    }

    public function product_details($id)
    {
        $product=Product::find($id);

        return view('home.product_details',compact('product'));
    }
}

