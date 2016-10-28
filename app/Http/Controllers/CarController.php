<?php

namespace App\Http\Controllers;

use App\Car;
use Illuminate\Http\Request;

use App\Http\Requests;

class CarController extends Controller {
    public function showList(){
        return view("car.list")->with(["car"=>Car::all()]);
    }
    public function showCar($id){
        return view("car.info")->with([
            "car" => Car::findOrFail($id)
        ]);
    }
    public function addCarView(){
        return view("car.dd");
    }
    public function addCar(){
        $validator = \Validator::make(\Input::all(), [
            'price'=>"required",
            'model'=>"required",
            'year'=>"required",
            'mileage'=>"required",
            'insuranceBasePrice'=>"required",
            'seats'=>"required",
            'comments'=>""
        ]);
        if ($validator->fails()) {
            return \Redirect::route("addCar")->withErrors($validator);
        }
        $car = new Car();
        $car->price = \Input::get("price");
        $car->model = \Input::get("model");
        $car->year = \Input::get("year");
        $car->mileage = \Input::get("mileage");
        $car->insuranceBasePrice = \Input::get("insuranceBasePrice");
        $car->seats = \Input::get("seats");
        $car->comments = \Input::get("comments");
        $car->save();
        return \Redirect::route("showCars");

    }

    public function deleteCar($id) {
        Car::findOrFail($id)->delete();
        return \Redirect::route("showCars");
    }

    public function editCarView($id) {
        return view("car.edit")->with(["car"=>Car::findOrFail($id)]);
    }
    public function editCar($id) {
        $car = Car::findOrFail($id);

        $validator = \Validator::make(\Input::all(), [
            'price'=>"required",
            'model'=>"required",
            'year'=>"required",
            'mileage'=>"required",
            'insuranceBasePrice'=>"required",
            'seats'=>"required",
            'comments'=>""
        ]);

        if ($validator->fails()) {
            return \Redirect::route("editCar", [$id])->withErrors($validator);
        }

        $car->price = \Input::get("price");
        $car->model = \Input::get("model");
        $car->year = \Input::get("year");
        $car->mileage = \Input::get("mileage");
        $car->insuranceBasePrice = \Input::get("insuranceBasePrice");
        $car->seats = \Input::get("seats");
        $car->comments = \Input::get("comments");

        $car->save();


        return \Redirect::route("showCar", [$id]);
    }
}
