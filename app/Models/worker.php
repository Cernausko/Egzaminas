<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class worker extends Model
{
    use HasFactory;

    protected $fillable = ['firstname', 'lastname', 'specialization','picture', 'city', 'service'];

}
