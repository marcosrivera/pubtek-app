<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bartender extends Model
{
    use HasFactory;

    protected $casts = ['active' => 'boolean'];
    protected $guarded = ['id'];
}
