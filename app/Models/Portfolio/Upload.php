<?php

namespace App\Models\Portfolio;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Upload extends Model
{
    /*
     *  RELATIONS
     */
    public function portfolio ()
    {
        $this->belongsTo(Portfolio::class,  'id', 'portfolio_id');
    }

    public function user ()
    {
        $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function criterium()
    {
        $this->hasOne(Criterium::class, 'id', 'criteria_id');
    }
}
