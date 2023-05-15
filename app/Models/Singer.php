<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'country',
        'city',
        'albums_sold',
    ];

    public function scopeTopSingers($query,$albums_sold){
     return  $query->where('albums_sold','>',$albums_sold);
    }

    public function getCountryAttribute($value){
        return $value;
    }

    public function getAddressAttribute(){
        return $this->country.' '.$this->city;
    }

    public function user(){
       return $this->belongsTo(User::class);
    }
}
