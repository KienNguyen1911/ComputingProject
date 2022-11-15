<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Home extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function types()
    {
        return $this->belongsTo(Type::class);
    }

    public function discounts()
    {
        return $this->belongsTo(Discount::class);
    }
    
    // public function homeimage()
    // {
    //     return $this->hasMany(HomeImage::class);
    // }
    
}
