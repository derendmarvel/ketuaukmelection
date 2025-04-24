<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Candidate extends Model
{
    use HasFactory;

    protected $fillable = ['names', 'number_of_votes', 'photo', 'ukm_id'];

    public function users(): HasMany{
        return $this->hasMany(User::class);
    }

    public function ukm(): BelongsTo{
        return $this->belongsTo(UKM::class, 'ukm_id', 'id');
    }

}
