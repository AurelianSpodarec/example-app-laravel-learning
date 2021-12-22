<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function siteIndustry()
    {
        return $this->hasOne(SiteIndustry::class);
    }

    public function colorPalette()
    {
        return $this->hasOne(ColorPalette::class);
    }


}
