<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class EffectsOfProgress extends Model
{
    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
}
