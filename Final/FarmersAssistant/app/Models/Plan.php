<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $table="plans";
    public $timestamps=false;
    protected $fillable = [
        'planName',
        'drescription',
        'price',
        'orderDiscount'
    ];

}
?>
