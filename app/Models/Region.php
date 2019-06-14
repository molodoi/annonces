<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    /**
     * Get the ads for the region. Une région a plusieurs (hasMany) annonces
     */
    public function ads()
    {
        return $this->hasMany(Ad::class);
    }
}
