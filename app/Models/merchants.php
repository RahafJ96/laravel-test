<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merchants extends Model
{
    use HasFactory;
    protected $fillable = [

        'merchant_name'
    ];
}
