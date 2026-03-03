<?php

namespace App\Models;

use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    // /**
    //  * The attributes that are mass assignable.
    //  *
    //  * @var list<string>
    //  */
    protected $fillable = [
        'user_id',
    ];


    /**
     * Get the associated user.
     */
    public function user(): HasOne
    {
        return $this->hasOne(User::class);
    }
    /**
     * Many to many relationship with items
     */
    public function items()
    {
        return $this->belongsToMany(Item::class, 'order_item');
    }

}
