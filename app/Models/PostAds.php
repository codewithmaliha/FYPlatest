<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostAds extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'user_id',
        'vehicle_name',
        'duration',
        'location',
        'weight',
        'description',
        'categories',
        'contact',
        'price'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
