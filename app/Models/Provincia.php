<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Provincia extends Model
{
    use HasFactory;

    protected $table = 'provincies';
    public $timestamps = false;

    /**
     * Get all of the comarques for the Provincia
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comarques(): HasMany
    {
        return $this->hasMany(Comarca::class, 'provincies_id');
    }
}