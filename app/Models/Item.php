<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['owner','service'];

    public static function boot(){
        parent::boot();

        static::creating(function ($instance){
            $instance->vendor_id = auth()->user()->id ?? 1;
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
        return $this->belongsTo('App\Models\User', 'vendor_id');
    }

    public function getOwnerAttribute(){
        return $this->user;
    }

    public function services(){
        return $this->belongsTo('App\Models\User', 'vendor_id');
    }

    public function getServiceAttribute(){
        return $this->services;
    }
}
