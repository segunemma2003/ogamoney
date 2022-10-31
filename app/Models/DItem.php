<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DItem extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $appends = ['item', 'order'];



}