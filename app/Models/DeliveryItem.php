<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryItem extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['account','sender', 'receiver','allproducts', 'payment','mdelivery'];

    public static function boot(){
        parent::boot();

        static::creating(function ($instance){
            $instance->account_id = auth()->user()->id ?? 1;
            // $instance->created_by = auth()->user()->id;
        });

        static::created(function ($instance){
            //
        });

        static::updating(function ($instance){

            // $instance->updated_by = auth()->user()->id;
        });

        static::updated(function ($instance){
            //
        });
    }

    public function user(){
        return $this->belongsTo("App\Models\User", "account_id", "id");
    }

    public function getAccountAttribute(){
        return $this->user;
    }
    public function senders(){
        return $this->belongsTo("App\Models\User", "sender_id");
    }

    public function getSenderAttribute(){
        return $this->senders;
    }

    public function receivers(){
        return $this->belongsTo("App\Models\User", "receiver_id");
    }

    public function payments(){
        return $this->hasMany("App\Models\Payment", "delivery_id");
    }

    public function mdeliverys(){
        return $this->hasOne("App\Models\DeliveryMan", "delivery_id");
    }
    public function getReceiverAttribute(){
        return $this->receivers;
    }
    public function sitem(){
        return $this->hasMany("App\Models\DItem", "item_id");
    }

    public function getAllproductsAttribute(){
        return $this->sitem;
    }
    public function getPaymentAttribute(){
        return $this->payments;
    }

    public function getMdeliveryAttribute(){
        return $this->mdeliverys;
    }
}
