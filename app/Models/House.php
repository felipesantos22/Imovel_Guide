<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'city',
        'price',
        'photo',
        'user_id'
    ];

    public $timestamps = false;

    public function getFormattedPriceAttribute()
    {
        return number_format($this->attributes['price'], 0, ',', '.');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
