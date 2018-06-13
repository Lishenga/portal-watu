<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Watu\Request\Request as WatuRequest;

class CountriesController extends Controller
{
    public function view(){

        $country = WatuRequest::get([],env('API_URL').'/api/settings/ViewCountries/');
        
        return view('settings.countries.index')->with([
            'country'=>$country->data,
        ]);
        
    }

    public function Create(Request $request)
    {
        try{
            
            $save = WatuRequest::post([
                'name'=> $request->name,
                'country_code'=>strtoupper ($request->country),
                'currency_code'=>strtoupper($request->currency),
            ],env('API_URL').'/api/settings/CreateCountry/');

            $country = WatuRequest::get([],env('API_URL').'/api/settings/ViewCountries/');
    
            return redirect()->back()->withErrors([
                'success'=> 'Country Created',
                'country'=>$country->data,
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
                'name'=>$request->name,
                'country_code'=>strtoupper ($request->country),
                'currency_code'=>strtoupper($request->currency),
            ],env('API_URL').'/api/settings/UpdateCountry/');
    
            if(json_decode(json_encode($save))->status_code==500){
                return redirect()->back()->withErrors([
                    'error'=> 'Unexpected Error 1',
                ]);
            }

            $country = WatuRequest::get([],env('API_URL').'/api/settings/ViewCountries/');

            return redirect()->back()->withErrors([
                'success'=> 'Country Updated',
                'country'=>$country->data,
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
        ],env('API_URL').'/api/settings/DeleteCountry/');

        $country = WatuRequest::get([],env('API_URL').'/api/settings/ViewCountries/');

        return redirect()->back()->withErrors([
            'success'=> 'Country Deleted',
            'country'=>$country->data,
        ]);
    }
}
