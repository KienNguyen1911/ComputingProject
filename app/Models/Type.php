<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_id',
        'type_name',
        'type_description',
    ];

    public function homes()
    {
        return $this->hasMany(Home::class);
    }
}
