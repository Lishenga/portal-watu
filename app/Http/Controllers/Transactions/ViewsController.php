<?php

namespace App\Http\Controllers\Transactions;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ViewsController extends Controller
{
    public function view(){
         # code...
         $transaction = [
            'transaction_code' => 'ERJF68DC',
            'amount' => '50USD',
         ];
        
         return view('transactions.index')->with([
             'transaction'=>$transaction,
         ]);
    }
}
