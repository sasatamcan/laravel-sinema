<?php
namespace App\Http\Controllers;
use App\Hall;
use App\Place;
class HallsController extends Controller {

    public function index()
    {
        $hallModel = new Hall;
        $hallList = $hallModel->selectDropdownHall();
        $placeModel = new Place;
        return view('halls.index', ['hallList' => $hallList, 'placeModel' => $placeModel]);
    }
}