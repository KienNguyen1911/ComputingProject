<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Home;

class HomeImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'home_image_id',
        'image_id',
        'home_id',
    ];

    public function home()
    {
        return $this->hasMany(Home::class);
    }

    public function image()
    {
        return $this->hasMany(Image::class);
    }

}
