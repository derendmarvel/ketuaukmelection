<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class UKM extends Model
{
    protected $table = 'ukm';

    use HasFactory;

    protected $fillable = [
        'name',
        'logo',
        'candidate_id',
        'user_id'
    ];

    public function candidates(): HasMany{
        return $this->hasMany(Candidate::class);
    }

    public function users(){
        return $this->belongsToMany(User::class, 'ukm_user', 'ukm_id', 'user_id')
        ->withPivot('can_vote', 'has_voted');
    }

}
