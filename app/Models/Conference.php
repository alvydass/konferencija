<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Conference extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'description',
        'lecturer',
        'date',
        'time',
        'address',
    ];

    protected $casts = [
        'date' => 'date',
        'time' => 'datetime',
    ];

    /**
     * Relationship with clients.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function clients(): BelongsToMany
    {
        return $this->belongsToMany(Client::class);
    }
}
