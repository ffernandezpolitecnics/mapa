<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Agencia extends Model
{
    use HasFactory;

    protected $table = 'agencies';
    public $timestamps = false;

    /**
     * Get the municipi that owns the Agencia
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function municipi(): BelongsTo
    {
        return $this->belongsTo(Municipi::class, 'municipis_id');
    }
}