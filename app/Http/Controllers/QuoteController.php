<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuoteController extends Controller
{
    
    public function index() {

        $quote = DB::table('quotes')
            ->inRandomOrder()
            ->first();

        return view('home', ['quote' => $quote->body]);
    }
}
