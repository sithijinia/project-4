<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/','StudentController@index');

Route::get('/',[

    'uses'=> 'NewShopController@index',
    'as' => '/'
]);


Route::get('/category-product',[

    'uses'=> 'NewShopController@categoryProduct',
    'as' => 'category-product'
]);

Route::get('/mail-us',[

    'uses'=> 'NewShopController@mailUs',
    'as' => 'mail-us'
]);

Route::get('/category/add',[

    'uses'=> 'CategoryController@index',
    'as' => 'add-category'
]);
Route::post('/category/save',[
    'uses'=>'CategoryController@saveCategoryInfo',
    'as' =>'new-category'

]);


Route::get('/category/manage',[
    'uses'=>'CategoryController@manageCategoryInfo',
    'as' =>'manage-category'

]);

Route::get('/category/unpublished/{id}',[
    'uses'=>'CategoryController@unpublishedCategoryInfo',
    'as' =>'unpublished-category'

]);


Route::get('/category/published/{id}',[
    'uses'=>'CategoryController@publishedCategoryInfo',
    'as' =>'published-category'

]);

Route::get('/category/edit/{id}',[
    'uses'=>'CategoryController@editCategoryInfo',
    'as' =>'edit-category'

]);


Route::post('/category/update',[
    'uses'=>'CategoryController@updateCategoryInfo',
    'as' =>'update-category'

]);


Route::get('/category/delete/{id}',[
    'uses'=>'CategoryController@deleteCategoryInfo',
    'as' =>'delete-category'

]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

