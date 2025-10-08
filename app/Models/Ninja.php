<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ninja extends Model
{
    use HasFactory;

    // This model will interact with a database table named 'ninjas' by default.
    // No specific casts are needed for this simple version, as data is string.
}