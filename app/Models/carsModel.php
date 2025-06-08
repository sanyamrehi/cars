<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carsModel extends Model
{
    use HasFactory;
    protected $table = 'vehicles';
    protected $fillable =[
        'colors','name','price','model','company','manufacturing_date','status'
    ];

}
