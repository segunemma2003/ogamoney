<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DItem extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['item'];


    public function items(){
        return $this->belongsTo('App\Models\Item', 'item_id');

    }

    public function getItemAttribute(){
        return $this->items;
    }

    // public function orders(){
    //     return $this->belongsTo('App\Models\DeliveryItem', 'delivery_item_id');

    // }

    // public function getOrderAttribute(){
    //     return $this->orders;
    // }

}
