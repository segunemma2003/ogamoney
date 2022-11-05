<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['items'];

    public function item(){
        return $this->hasMany('App\Models\Item', 'service_id');
    }

    public function getItemsAttribute(){
        return $this->item;
    }

}
