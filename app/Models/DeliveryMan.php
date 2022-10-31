<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliveryMan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['delivery', 'cab'];

    public function user(){
        return $this->belongsTo("App\Models\User", "cab_id");
    }

    public function getCabAttribute(){
        return $this->user;
    }

    public function deliverys(){
        return $this->hasMany("App\Models\DeliveryItem", "delivery_id");
    }

    public function getDeliveryAttribute(){
        return $this->deliverys;
    }
}
