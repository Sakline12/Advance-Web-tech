<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    public $timestamps=false;
    protected $fillable = [
        'admin_id',
        'title',
        'drescription',
        'image',
        'quantity',
        'price'


    ];

}
