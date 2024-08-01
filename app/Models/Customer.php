<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function getName($email) {
        $customer_name = Customer::where('email', $email)->first();
        return $customer_name;
    }
}
