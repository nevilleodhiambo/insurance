<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'fname',
        'lname',
        'location_id',
        'email',
        'national',
        'pno',
        'sno',
        'cartype_id',
        'top_id',
        'no_plate',
        'date_issued',
        'date_expire',
    ];
    public function location(){
        return $this->belongsTo(Location::class, 'location_id', 'id');
    }
    public function insurance(){
        return $this->belongsTo(Insurance::class, 'top_id', 'id');
    }
    public function car(){
        return $this->belongsTo(Car::class, 'cartype_id', 'id');
    }
}
