<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
// LOGIN
Route::get('/', "AuthController@showLogin")->middleware("guest");
Route::post("/", "AuthController@postLoginForm")->middleware("guest");
// auth middelware referer til /login hvis man ikke er logget ind, da vi har vores login på index siden skal den bare navigere der hen
Route::get("/login", function () {
    return redirect("/");
});

// HOME
Route::get("/home", function () {
    return view("home");
})->middleware("auth");



// CAR
Route::get("/cars", ["uses"=>"CarController@showList", "as" => "showCars"])->middleware("auth");
Route::get("/cars_add", ["uses" => "CarController@addCarView", "as" => "addCar"])->middleware("auth");
Route::post("/cars_add", ["uses" => "CarController@addCar"])->middleware("auth");
Route::get("/cars/{car_id}", ["uses"=>"CarController@showCar", "as" => "showCar"])->middleware("auth");
Route::get("/cars_delete/{car_id}", ["uses" => "CarController@deleteCar", "as" => "deleteCar"])->middleware("auth");
Route::get("/cars_edit/{car_id}", ["uses" => "CarController@editCarView", "as" => "editCar"])->middleware("auth");
Route::post("/cars_edit/{car_id}", ["uses" => "CarController@editCar"])->middleware("auth");