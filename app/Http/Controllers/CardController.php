<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCardRequest;
use App\Http\Requests\UpdateCardRequest;
use App\Models\Card;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cards = Card::with('users')->where("user_id", auth()->user()->id)->get();
        if(auth()->user()->user_type=="admin"){
            $deliverys = Card::with('users')->all();
        }
        return response()->json([
            "status"=>true,
            "data"=>$cards
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
     * @param  \App\Http\Requests\StoreCardRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCardRequest $request)
    {
        try{
            $items = $request->all();
            $data = Card::create($items);

              return response()->json([
                  "status"=>true,
                  "data"=>"item successfully created"
              ],201);


          }catch(\Exception $e){
              return response()->json([
                  "status"=>false,
                  "msg"=> $e->getMessage()
              ],402);
          }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        return response()->json([
            "status"=>true,
            "data"=>$card::with('users')->get()
        ],200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $card)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCardRequest  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCardRequest $request, Card $card)
    {
        try{
            $items = $request->all();
            $data = $card->update($items);
            if($data){
              return response()->json([
                  "status"=>true,
                  "data"=>"item successfully updated"
              ],202);
            }

            return response()->json([
              "status"=>false,
              "data"=>"failed to create item"
          ],422);
          }catch(\Exception $e){
              return response()->json([
                  "status"=>false,
                  "msg"=>"error occurred"
              ],402);
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        $card->delete();
        return response()->json([
            "status"=>true,
            "item"=>"deleted successfully"
        ],204);
    }
}
