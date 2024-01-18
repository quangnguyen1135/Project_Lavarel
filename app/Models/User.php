<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class User extends Model
{
    use HasFactory;
    public function getUser($email , $pass) {
        $user = DB::table('users')
                ->select('*')
                ->where('email', $email)
                ->where('pass', $pass)
                ->first();

        return $user;
    }
}
