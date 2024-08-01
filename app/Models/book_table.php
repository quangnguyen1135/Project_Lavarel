<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class book_table extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'email', 'phone', 'seats', 'reservation_time'];
}
