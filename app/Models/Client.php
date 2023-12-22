<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'email',
    ];

    /**
     * Relationship with conferences.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function conferences(): BelongsToMany
    {
        return $this->belongsToMany(Conference::class);
    }
}
