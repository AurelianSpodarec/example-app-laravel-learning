<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function siteIndustry()
    {
        return $this->belongsTo(SiteIndustry::class);
    }

    public function colorPalette()
    {
        return $this->belongsTo(ColorPalette::class);
    }


}
