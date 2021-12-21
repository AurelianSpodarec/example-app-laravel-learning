<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ColorPalette extends Model
{
    use HasFactory;

    protected $casts = [
        'color_palette' => 'array',
    ];

    public function company() {
        return $this->belongsTo(Company::class);
    }
}
