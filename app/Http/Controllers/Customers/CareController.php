<?php

namespace App\Http\Controllers\Customers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CareController extends Controller
{
    public function view(){
        
        return view('customers.care.index');
        
    }
}
