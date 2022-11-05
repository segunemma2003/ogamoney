<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDeliveryItemRequest;
use App\Http\Requests\UpdateDeliveryItemRequest;
use App\Models\DeliveryItem;
use App\Models\DItem;

class DeliveryItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $deliverys = DeliveryItem::where("account_id", auth()->user()->id)->get();
        if(auth()->user()->user_type=="admin"){
            $deliverys = DeliveryItem::all();
        }
        return response()->json([
            "status"=>true,
            "data"=>$deliverys
        ],200);
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
        try{
          $items = $request->items;
          $delivery = $request->except('items');
          $data = DeliveryItem::create($delivery);
          if($data){
            $id = $data->id;
            foreach($items as $item){
                $item['delivery_item_id']= $id;
                DItem::create($item);

            }
            return response()->json([
                "status"=>true,
                "data"=>"delivery successfully created"
            ],201);
          }

          return response()->json([
            "status"=>false,
            "data"=>"failed to create item"
        ],422);
        }catch(\Exception $e){
            return response()->json([
                "status"=>false,
                "msg"=>$e->getMessage()
            ],402);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DeliveryItem  $deliveryItem
     * @return \Illuminate\Http\Response
     */
    public function show(DeliveryItem $deliveryItem)
    {
        return response()->json([
            "status"=>true,
            "data"=> $deliveryItem
        ]);
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
