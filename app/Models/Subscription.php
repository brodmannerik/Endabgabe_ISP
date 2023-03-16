<?php

namespace App\Models;

use App\Casts\PriceCast;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;

    const Table = 'subscriptions';

    protected $table = self::Table;

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'stripe_id',
        'stripe_status',
        'stripe_price',
        'created_at',
        'updated_at'
    ];

    /*protected $casts = [
        'price' => PriceCast::class,
    ];

    public function getRoutekeyName()
    {
        return 'slug';
//        return parent::getRouteKeyName();
    }*/
}
