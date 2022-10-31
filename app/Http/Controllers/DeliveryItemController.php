<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeliveryItemRequest;
use App\Http\Requests\UpdateDeliveryItemRequest;
use App\Models\DeliveryItem;

class DeliveryItemController extends Controller
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
     * @param  \App\Http\Requests\StoreDeliveryItemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDeliveryItemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryItem  $deliveryItem
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryItem $deliveryItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DeliveryItem  $deliveryItem
     * @return \Illuminate\Http\Response
     */
    public function edit(DeliveryItem $deliveryItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDeliveryItemRequest  $request
     * @param  \App\Models\DeliveryItem  $deliveryItem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDeliveryItemRequest $request, DeliveryItem $deliveryItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DeliveryItem  $deliveryItem
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeliveryItem $deliveryItem)
    {
        //
    }
}
