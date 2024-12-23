<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'detail','duration','bookingdate','traveldate','totalcost','paymentstatus','travelernameage','phones','tourid'
    ];
}
