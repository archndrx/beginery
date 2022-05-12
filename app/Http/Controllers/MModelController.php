<?php

namespace App\Http\Controllers;

use App\Models\M_model;
use App\Http\Requests\StoreM_modelRequest;
use App\Http\Requests\UpdateM_modelRequest;

class MModelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreM_modelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreM_modelRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\M_model  $m_model
     * @return \Illuminate\Http\Response
     */
    public function show(M_model $m_model)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\M_model  $m_model
     * @return \Illuminate\Http\Response
     */
    public function edit(M_model $m_model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateM_modelRequest  $request
     * @param  \App\Models\M_model  $m_model
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateM_modelRequest $request, M_model $m_model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\M_model  $m_model
     * @return \Illuminate\Http\Response
     */
    public function destroy(M_model $m_model)
    {
        //
    }
}
