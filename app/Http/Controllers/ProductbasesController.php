<?php

namespace App\Http\Controllers;

use App\Productbases;
use Illuminate\Http\Request;

class ProductbasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        print_r('ProductbasesController');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Productbases  $productbases
     * @return \Illuminate\Http\Response
     */
    public function show(Productbases $productbases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Productbases  $productbases
     * @return \Illuminate\Http\Response
     */
    public function edit(Productbases $productbases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Productbases  $productbases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productbases $productbases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Productbases  $productbases
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productbases $productbases)
    {
        //
    }
}
