 <?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('public.index');
});



Route::get('/schoolCollege', 'PublicBlogController@schoolCollege')->name('schoolcollege');
Route::get('/argentPost', 'PublicBlogController@argentPost')->name('argentPost');
Route::get('/sliderPost', 'PublicBlogController@sliderPost')->name('sliderPost');
Route::get('/nuPost', 'PublicBlogController@nuPost')->name('nuPost');
Route::get('/puPost', 'PublicBlogController@puPost')->name('puPost');
Route::get('/sportsPost', 'PublicBlogController@sportsPost')->name('sportsPost');
Route::get('/gjPost', 'PublicBlogController@gjPost')->name('gjPost');
Route::get('/pjPost', 'PublicBlogController@pjPost')->name('pjPost');
Route::get('/popularPost', 'PublicBlogController@popularPost')->name('popularPost');
Route::get('/releatedPost', 'PublicBlogController@releatedPost')->name('releatedPost');

Route::get('/singlePost/{slug}', 'PublicBlogController@singlepostById')->name('singlepost');
Route::get('/categoryIdByPost/{id}', 'PublicBlogController@categoryIdByPost')->name('categoryIdByPost');
Route::get('/SearchPost/', 'PublicBlogController@SearchPost')->name('SearchPost');
Route::get('/latestPost', 'PublicBlogController@latestPost')->name('latestpost');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

// Category Route

Route::get('/categoryList', 'CategoryController@index')->name('category.list');
Route::post('/category-add', 'CategoryController@store')->name('category.store');
Route::get('/editCategory/{id}', 'CategoryController@edit')->name('category.edit');
Route::post('/categoryUpdate/{id}', 'CategoryController@update')->name('category.update');
Route::get('/categoryDelete/{id}', 'CategoryController@destroy')->name('category.delete');

// SubCategory Route

Route::get('/subcategoryList', 'SubCategoryController@index')->name('subcategory.list');
Route::post('/subcategory-add', 'SubCategoryController@store')->name('subcategory.store');
Route::get('/editsubCategory/{id}', 'SubCategoryController@edit')->name('subcategory.edit');
Route::post('/subcategoryUpdate/{id}', 'SubCategoryController@update')->name('subcategory.update');
Route::get('/subcategoryDelete/{id}', 'SubCategoryController@destroy')->name('subcategory.delete');

// Content Route

Route::get('/contentList', 'ContentController@index')->name('content.list');
Route::post('/content-add', 'ContentController@store')->name('content.store');
Route::get('/editcontent/{id}', 'ContentController@edit')->name('content.edit');
Route::post('/contentUpdate/{id}', 'ContentController@update')->name('content.update');
Route::get('/contentDelete/{id}', 'ContentController@destroy')->name('content.delete');

// Post Route

Route::get('/postList', 'PostController@index')->name('post.list');
Route::post('/post-add', 'PostController@store')->name('post.store');
Route::get('/editpost/{id}', 'PostController@edit')->name('post.edit');
Route::post('/postUpdate/{id}', 'PostController@update')->name('post.update');
Route::get('/postDelete/{id}', 'PostController@destroy')->name('post.delete');

// get subCategoy From Category
Route::get('/getSubcategoryByCategoryId/{id}', 'ContentController@getSubcategoryByCategoryId')->name('content.getSubcategoryByCategoryId');


// User Route

Route::get('/userList', 'UserController@index')->name('user.list');
Route::post('/user-add', 'UserController@store')->name('user.store');
Route::get('/edituser/{id}', 'UserController@edit')->name('user.edit');
Route::post('/userUpdate/{id}', 'UserController@update')->name('user.update');
Route::get('/userDelete/{id}', 'UserController@destroy')->name('user.delete');





// Role Route

Route::get('/roleList', 'RoleController@index')->name('role.list');
Route::post('/role-add', 'RoleController@store')->name('role.store');
Route::get('/editrole/{id}', 'RoleController@edit')->name('role.edit');
Route::post('/roleUpdate/{id}', 'RoleController@update')->name('role.update');
Route::get('/roleDelete/{id}', 'RoleController@destroy')->name('role.delete');

// Role wise Permission List
Route::get('/rolewisepermissionList/', 'RoleController@rolewisepermissionList')->name('role.rolewisepermissionList');

//Permision Role Route

Route::get('/permissionList', 'RoleController@permissionindex')->name('permission.list');
Route::post('/permission-add', 'RoleController@permissionstore')->name('permission.store');
Route::get('/editrole/{id}', 'RoleController@edit')->name('role.edit');
Route::post('/roleUpdate/{id}', 'RoleController@update')->name('role.update');
Route::get('/roleDelete/{id}', 'RoleController@destroy')->name('role.delete');

// front Header Footer Route

Route::get('/fronthfList', 'FrontendController@index')->name('fronthf.list');
Route::post('/fronthf-add', 'FrontendController@store')->name('fronthf.store');
Route::get('/editfronthf/{id}', 'FrontendController@edit')->name('fronthf.edit');
Route::post('/fronthfUpdate/{id}', 'FrontendController@update')->name('fronthf.update');
Route::get('/fronthfDelete/{id}', 'FrontendController@destroy')->name('fronthf.delete');
Route::get('/{anypath}', 'HomeController@index')->where('path','.*');

