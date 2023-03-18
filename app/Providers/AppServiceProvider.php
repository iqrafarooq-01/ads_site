<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Lecture # 7 Populating the area
        \App\Area::creating(function($area) {
            // Parent does exit then we can acces the parent name , here 'name' is column in DB
            //  '' : '';  first indicate the parent name, otherwise 2nd one is for empty string 
            $prefix = $area->parent ? $area->parent->name . '-' : ''; 
            // Set Slug = str_slug{certified version of }Prefix concatinating on the area name
            $area->slug = str_slug($prefix . $area->name);
        });
        // END

         // Lecture #10 Eloquesnt event for category
         \App\Category::creating(function($category) {
            $prefix = $category->parent ? $category->parent->name . '-' : ''; 
            $category->slug = str_slug($prefix . $category->name);
        });
        // END
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
