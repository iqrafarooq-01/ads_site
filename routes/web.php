<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
|
*/

/*
| Home page Route
*/
Route::get('/', 'HomeController@index');

/*
| Area Route
| {area} it will acess the Area Model in were we are passing slug through URL
*/
Route::get('/user/area/{area}', 'User\AreaController@store')->name('user.area.store');
/*
| Category Route
| 
*/
Route::group(['prefix'=> '/{area}'], function() {
/* Category  */
    Route::group(['prefix'=>'/categories'], function() {
        
        Route::get('/', 'Category\CategoryController@index')->name('category.index');
});
/* */


});


Auth::routes();


