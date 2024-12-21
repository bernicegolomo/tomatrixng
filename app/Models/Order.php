<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = "orders";
    protected $fillable = [
        'fullname',          
        'email',          
        'phone',          
        'country',          
        'state',          
        'address',          
        'items',          
        'amount',          
        'date',  
        'ref',        
        'status',
    ];
}
