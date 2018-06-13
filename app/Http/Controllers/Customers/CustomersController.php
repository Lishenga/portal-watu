<?php

namespace App\Http\Controllers\Customers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Watu\Request\Request as WatuRequest;


class CustomersController extends Controller
{
    
    public function index()
    {
        return view('customers.create');
    }


    public function Create(Request $request)
    {
        try{
            
            $save = WatuRequest::post([
                'fname'=>$request->fname,
                'lname'=>$request->lname,
                'email'=>$request->email,
                'msisdn'=>$request->msisdn,
                'password'=>$request->email,

            ],env('API_URL').'/api/CreateCustomer/');
    
            return redirect()->back()->withErrors([
                'success'=> 'User Created',
            ]);
           
        }catch(\Exception $e){

            return redirect()->back()->withErrors([
                'error'=> 'Unexpected Error',
            ]);
        }
        
    }


    public function customer_cards(Request $request)
    {
        try{

            $save = WatuRequest::post([
                'email'=>$request->email,
                'number'=>$request->number,
                'exp_month'=>$request->exp_month,
                'exp_year'=>$request->exp_year,
                'cvc'=>$request->cvc

            ],env('API_URL').'/api/CreateStripeCard/');
    
            return redirect()->back()->withErrors([
                'success'=> 'User Created',
            ]);
        
        }catch(\Exception $e){

            return redirect()->back()->withErrors([
                'error'=> 'Unexpected Error',
            ]);
        }

    }

    public function update(Request $request)
    {
        # code...
        try{
            
            $save = WatuRequest::post([
                'fname'=>$request->fname,
                'lname'=>$request->lname,
                'email'=>$request->email,
                'msisdn'=>$request->msisdn,
                //'password'=>$request->email,
            ],env('API_URL').'/api/UpdateCustomer/');
    
            if(json_decode(json_encode($save))->status_code==500){
                return redirect()->back()->withErrors([
                    'error'=> 'Unexpected Error 1',
                ]);
            }

            return redirect()->back()->withErrors([
                'success'=> 'User Updated',
            ]);
           

        }catch(\Exception $e){

            return redirect()->back()->withErrors([
                'error'=> 'Unexpected Error',
            ]);
        }
        
    }
    
    public function ViewCustomer(Request $request)
    {
        # code...
        $data = WatuRequest::post([
            'id'=>$request->id,
        ],env('API_URL').'/api/GetParticularCustomer/');
        
        $cards = WatuRequest::post([
            'stripe_id'=>$data->data->stripe_id,
        ],env('API_URL').'/api/ViewAllCustomerCards/');
        
      
        
        return view('customers.details',[
            'customer'=>$data->data,
            'cards'=> $cards->data
        ]);

    }

    public function delete(Request $request)
    {
        # code...
        $data = WatuRequest::delete([
            'id'=>$request->id,
        ],env('API_URL').'/api/DeleteCustomer/');

        return redirect('/customers')->withErrors([
            'success'=> 'User deleted',
        ]);

    }

    public function customer_transactions(Request $request)
    {
        $data = WatuRequest::post([
            'number'=>$request->number,
        ],env('API_URL').'/api/ViewParticularCustomersTransactions/');
       
        return view('customers.transactions',[
            'transactions'=>$data->data,
        ]);
    }


    public function registerStripe(Request $request)
    {
        # code...
        $data = WatuRequest::post([
            'email'=>$request->email,
        ],env('API_URL').'/api/CreateStripeCustomer/');

        if(json_decode(json_encode($data))->status_code==500){
            return redirect()->back()->withErrors([
                'error'=> 'Unexpected Error',
            ]);
        }

        return redirect()->back()->withErrors([
            'success'=> 'User Created',
        ]);

    }
}
