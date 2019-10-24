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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/product', 'ProductController@index');
// Route::get('/', function(){
//     echo "<h2>Đây là Home</h2>";
// });
// Route::get('/about', function(){
//     echo "<h2>Đây là About</h2>";
// });
// Route::get('/contact', function(){
//     echo "<h2>Đây là Contact</h2>";
// });
// Route::get('/test', function(){
//     return view('test', ['name'=> 'Lê Trung Hải']);
// });
// Route::get('students/{name}', function($name){
//     echo 'Students name is' . ' ' . $name;
// });
// Route::get('user/{name?}', function($name="Trung"){
//     echo 'User name is' . ' ' . $name;
// });

// Route::get('/hello', 'hihello@index');


Route::get('/calculate', 'CalculatorController@index');
Route::post('/calculate', 'CalculatorController@calculate');

// Route::get('/test1', function(){
//     return view('test.test1');
// });

Route::get('/productcatelogy/create', 'ProductCatelogyController@create');
Route::post('/productcatelogy', 'ProductCatelogyController@create');

Route::get('/array', function(){
    $drink = ['Volka', 'Gin', 'Brandy'];
    return view('array.page', array('name' => 'Le Trung Hai', 'day' => 'Sunday', 'drink' => $drink));
});

//lab5
Route::get('/validation', 'ValidationController@showform');
Route::post('/validation', 'ValidationController@validateform');

Route::get('/custom-validation', ['as'=>'custom-validation.get', 'uses'=>'CustomValidatorController@getCustomValidation']);
Route::post('/custom-validation', ['as'=>'custom-validation.post', 'uses'=>'CustomValidatorController@postCustomValidation']);

//lab6
Route::get('/insert', function(){
    App\Category::create(array('name' => 'Music', 'name' => 'Rock'));
    return 'category added';
});

Route::get('/read', function(){
    $category = new App\Category();
     
    $data = $category -> all(array('name', 'id'));
    
    foreach($data as $list){
        echo $list -> id. ' ' . $list -> name . '';
    }
});

Route::get('/update', function(){
    $category = App\Category::find(1);
    $category -> name = 'Le Trung Hai';
    $category -> save();

    $data = $category -> all(array('name', 'id'));

    foreach($data as $list){
        echo $list -> id. ' ' . $list -> name . '';
    }
});

