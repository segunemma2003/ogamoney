<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeliveryManRequest;
use App\Http\Requests\UpdateDeliveryManRequest;
use App\Models\DeliveryMan;

class DeliveryManController extends Controller
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
     * @param  \App\Http\Requests\StoreDeliveryManRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeliveryManRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryMan $deliveryMan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryMan $deliveryMan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeliveryManRequest  $request
     * @param  \App\Models\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeliveryManRequest $request, DeliveryMan $deliveryMan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeliveryMan  $deliveryMan
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryMan $deliveryMan)
    {
        //
    }
}
