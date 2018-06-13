<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Watu\Request\Request as WatuRequest;

class TariffsController extends Controller
{
    public function view(){

        $tariff = WatuRequest::get([],env('API_URL').'/api/settings/ViewAllMpesaTariff/');
        
        return view('settings.tariffs.index')->with([
            'tariff'=>$tariff->data,
        ]);
        
    }

    public function Create(Request $request)
    {
        try{
            
            $save = WatuRequest::post([
                'Max'=>$request->max,
                'Min'=>$request->min,
                'tariff_type'=>$request->tariff,
                'amount'=>$request->amount,
            ],env('API_URL').'/api/settings/CreateMpesaTariff/');

            $tariff = WatuRequest::get([],env('API_URL').'/api/settings/ViewAllMpesaTariff/');
    
            return redirect()->back()->withErrors([
                'success'=> 'Tariff Created',
                'tariff'=>$tariff->data,
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
                'Max'=>$request->max,
                'Min'=>$request->min,
                'tariff_type'=>$request->tariff,
                'amount'=>$request->amount,
                //'password'=>$request->email,
            ],env('API_URL').'/api/settings/UpdateMpesaTariff/');
    
            if(json_decode(json_encode($save))->status_code==500){
                return redirect()->back()->withErrors([
                    'error'=> 'Unexpected Error 1',
                ]);
            }

            $tariff = WatuRequest::get([],env('API_URL').'/api/settings/ViewAllMpesaTariff/');

            return redirect()->back()->withErrors([
                'success'=> 'Tariff Updated',
                'tariff'=>$tariff->data,
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
        ],env('API_URL').'/api/settings/DeleteMpesaTariff/');

        $tariff = WatuRequest::get([],env('API_URL').'/api/settings/ViewAllMpesaTariff/');
    
        return view('settings.tariffs.index')->with([
            'tariff'=>$tariff->data,
            'success'=> 'Tariff Deleted',
        ]);
    }

    public function search(Request $request)
    {
        # code...
        $data = WatuRequest::post([
            'amount'=>$request->amount,
        ],env('API_URL').'/api/settings/ViewParticularMpesaTariff/');

        return view('settings.tariffs.SearchResults')->with([
            'search'=>$data->data,
        ]);

    }
}
