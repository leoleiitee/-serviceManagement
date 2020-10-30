<?php

namespace App\Http\Controllers;

use App\Servicebases;
use Illuminate\Http\Request;

class ServicebasesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        print_r('ServicebasesController');
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
     * @param  \App\Servicebases  $servicebases
     * @return \Illuminate\Http\Response
     */
    public function show(Servicebases $servicebases)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicebases  $servicebases
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicebases $servicebases)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicebases  $servicebases
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicebases $servicebases)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicebases  $servicebases
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicebases $servicebases)
    {
        //
    }
}
