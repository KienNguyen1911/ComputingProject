<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $guards = [];
    // payDate YYYY-MM-DD HH:MM:SS
    
    // public function formatPayDate($payDate) {
    //     return date('Y-m-d H:i:s', strtotime($payDate));
    // }

}
