<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Attributes\UseFactory;
use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// #[UseFactory(ItemFactory::class)]
class Item extends Model
{

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'description',
        'price',
        'image',
    ];

    /**
     * Many to many relationship with orders
     */
    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_item');
    }
}
