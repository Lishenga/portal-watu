<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Watu\Request\Request as WatuRequest;

class RatesController extends Controller
{
    public function view(){

        $rates = WatuRequest::get([],env('API_URL').'/api/settings/ViewAllRates');
        
        return view('settings.rates.index')->with([
            'rates'=>$rates->data,
        ]);
        
    }

    public function Create(Request $request)
    {
        try{
            
            $save = WatuRequest::post([
                'buying'=>$request->buying,
                'selling'=>$request->selling,
                'high'=>$request->high,
                'low'=>$request->low,
            ],env('API_URL').'/api/settings/CreateRate');

            $rates = WatuRequest::get([],env('API_URL').'/api/settings/ViewAllRates');
    
            return redirect()->back()->withErrors([
                'success'=> 'Rate Created',
                'rates'=>$rates->data,
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
            
            $save = WatuRequest::put([
                'id'=>$request->id,
                'buying'=>$request->buying,
                'selling'=>$request->selling,
                'high'=>$request->high,
                'low'=>$request->low,
                //'password'=>$request->email,
            ],env('API_URL').'/api/settings/UpdateRate');
    
            if(json_decode(json_encode($save))->status_code==500){
                return redirect()->back()->withErrors([
                    'error'=> 'Unexpected Error 1',
                ]);
            }

            $rates = WatuRequest::get([],env('API_URL').'/api/settings/ViewAllRates');

            return redirect()->back()->withErrors([
                'success'=> 'Rate Updated',
                'rates'=>$rates->data,
            ]);
           

        }catch(\Exception $e){

            return redirect()->back()->withErrors([
                'error'=> 'Unexpected Error',
            ]);
        }
        
    }

    public function delete(Request $request)
    {
        # code...
        $data = WatuRequest::delete([
            'id'=>$request->id,
        ],env('API_URL').'/api/settings/DeleteRate');

        $rates = WatuRequest::get([],env('API_URL').'/api/settings/ViewAllRates');

        return redirect()->back()->withErrors([
            'success'=> 'Rate Deleted',
            'rates'=>$rates->data,
        ]);

    }
}
