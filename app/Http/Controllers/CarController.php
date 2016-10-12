<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

use App\Http\Requests;

class CarController extends Controller {
    public function showList(){
        return view("car_list")->with(["car"=>Car::all()]);
    }
}
