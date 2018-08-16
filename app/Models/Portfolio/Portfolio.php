<?php

namespace App\Models\Portfolio;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{

    /*
     *  RELATIONS
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'user_id');
    }

    public function category()
    {
        $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function abilities()
    {
        $this->hasMany(Ability::class, 'category_id', 'category_id');
    }
    public function uploads()
    {
        $this->hasMany(Upload::class, 'portfolio_id');
    }
}
