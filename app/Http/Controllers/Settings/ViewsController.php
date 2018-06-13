<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewsController extends Controller
{
    //
    public function index(Request $request)
    {
        # code...
        return view('settings.index');
    }
}
