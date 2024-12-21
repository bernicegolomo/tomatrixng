<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OurNumber extends Model
{
    use HasFactory;
    protected $table = "our_numbers";
    protected $fillable = [
        'name', 
        'image', 
    ];
}
