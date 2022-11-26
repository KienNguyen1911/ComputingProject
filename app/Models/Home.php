<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Home extends Model
{
    use HasFactory;

    /**
P     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $guarded = [];

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
    
    public function images()
    {
        return $this->hasMany(Image::class);
    }
    
}
