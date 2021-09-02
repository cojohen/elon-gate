<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Quote;

class QuotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $quotes = Quote::all()
            ->sortDesc();

        return view('quotes.list', ['quotes' => $quotes]);
    }

    /**
     * Display a random single record.
     *
     * @return \Illuminate\Http\Response
     */
    public function random() {

        // Get random quote from model
        $quote = Quote::inRandomOrder()
            ->first()
            ->body;
        
        return view('quotes.home', ['quote' => $quote]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quotes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $quote = Quote::create(
            [
            'body' => $request->input('body')
            ]
        );

        return redirect('/quotes');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quote = Quote::find($id);

        //dd($quote);

        return view('quotes.edit')->with('quote', $quote);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $quote = Quote::where('id', $id)
            ->update(
                [
                'body' => $request->input('body')
                ]
            );

        return redirect('/quotes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quote = Quote::find($id);

        $quote->delete();
    
        return redirect('/quotes');
    }
}
