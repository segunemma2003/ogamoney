<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{

    use HasFactory;

    protected $appends = ['user'];



    public function users() {
        return $this->belongsTo("App\Models\User", "user_id");
    }

    public function getUserAttribute() {
        return $this->users;
    }

    public static function boot(){
        parent::boot();

        static::creating(function ($instance){
            $instance->user_id = auth()->user()->id ?? 1;
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
}
