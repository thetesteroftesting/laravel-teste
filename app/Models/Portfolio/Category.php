<?php

namespace App\Models\Portfolio;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function abilities()
    {
        $this->belongsToMany(Ability::class, 'abilities', 'category_id');
    }
    public function portfolios()
    {
        $this->belongsToMany(Portfolio::class, 'portfolios', 'category_id');
    }
}
