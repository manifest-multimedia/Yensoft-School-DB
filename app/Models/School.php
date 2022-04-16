<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    protected $fillable=[

        'school_name', 
        'postal_address_id', 
        'created_by', 
        'date_registered'


    ]; 

}
