<?php

namespace App\Models\Test;

use Illuminate\Database\Eloquent\Model;

class QuestionOption extends Model
{
    public function question ()
    {
        $this->belongsTo(Question::class);
    }
}
