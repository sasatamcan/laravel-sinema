<?php namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use App\Films;

class BookingController extends Controller {

    public function index()
    {
        if(Request::has('booking')){
            $model = new Films;
            $film = $model->getFilm(Request::post('film_id'));
            return view('booking.form', ['film' => $film]);
        }
    }
}