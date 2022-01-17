<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function tags()
    {
        //Eloquent will search pivot table naming convention with alphabetical order of two related model name.For this example Eloquent will search "blog_tag"
        return $this->belongsToMany(Tag::class);
    }
}
