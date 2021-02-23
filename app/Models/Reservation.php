<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Reservation extends Model
{
    use HasFactory, SoftDeletes;

    /**
    * The attributes that are mass assignable.
    *
    * @var array
    */
    protected $fillable = [
        'start_date',
        'end_date',
        'price_total',
        'user_id',
        'is_payed'
    ];

    public function room()
    {
        return $this->belongsToMany(Room::class, 'reservation_details')->withPivot('unit_price', 'vat', 'quantity')->withTimestamps();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
