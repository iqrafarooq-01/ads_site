<?php

namespace App;

use Kalnoy\Nestedset\NodeTrait;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
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
 