<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cart extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [
        'deleted_at'
    ];

    protected $fillable = [
        'total_prices'
    ];

    public function Request(){
        return $this->belongsTo(Request::class);
    }

    public function User(){
        return $this->hasOne(User::class);
    }

    public function Products(){
        return $this->belongsToMany(Product::class);
    }
}
