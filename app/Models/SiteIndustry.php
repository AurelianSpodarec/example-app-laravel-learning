<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteIndustry extends Model
{
    use HasFactory;

    protected $table = 'site_industries';

    public function sites() 
    {
        return $this->hasMany(Companies::class);
    }
}
