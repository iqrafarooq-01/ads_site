<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kalnoy\Nestedset\NodeTrait;

class Category extends Model
{
    use NodeTrait;

    protected $fillable = ['name', 'slug'];

    //Pass slug in URL using laravel Eloquent Listner, Here getRouteKeyName{helps customizing to query in the db using that key other than id } 
    public function getRouteKeyName()
    {
        // grab the record out 
        return 'slug';
    }
}
