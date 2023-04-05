<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use LucasDotVin\Soulbscription\Models\Plan;

class Pricing extends Model
{
    protected $table = 'pricing';

    protected $fillable = [
        'plan_id',
        'currency',
        'price',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'created_at',
        'updated_at',
        'laravel_through_key'

    ];

    public function plan()
    {
        return $this->belongsTo(Plan::class);
    }
}
