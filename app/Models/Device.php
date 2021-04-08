<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Device extends Model
{
    use HasFactory;

    protected $casts = ['enabled' => 'boolean'];
    protected $guarded = ['id'];

    public function bartender(): BelongsTo
    {
        return $this->belongsTo(Bartender::class);
    }

    public function beverage(): BelongsTo
    {
        return $this->belongsTo(Beverage::class);
    }
}
