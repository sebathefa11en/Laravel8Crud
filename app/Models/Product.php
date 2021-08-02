<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = ['deleted_at'];

    protected $fillable = [
        'name',
        'price',
        'description',
        'stock',
        'status',
        'warranty',
        'cart_id',
    ];

    public function Images(){
        return $this->hasMany(Image::class);
    }

    public function Carts(){
        return $this->belongsToMany(Cart::class);
    }
}
