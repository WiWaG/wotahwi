<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Room extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'price_night',
        'description',
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function facilities()
    {
        return $this->belongsToMany(Facility::class)->withPivot('quantity');
    }

    public function reservations()
    {
        return $this->belongsToMany(Reservation::class, 'reservation_details')->withPivot('unit_price', 'vat', 'quantity')->withTimestamps();
    }
}
