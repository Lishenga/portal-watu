<?php

namespace App\Http\Controllers\Customers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Watu\Request\Request as WatuRequest;

class ViewsController extends Controller
{
    //
    public function index(Request $request)
    {
        # code...
        $customers = WatuRequest::get([],env('API_URL').'/api/GetAllCustomers/');
        
        return view('customers.index')->with([
            'customers'=>$customers->data,
        ]);
    }
}
