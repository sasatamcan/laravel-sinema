<?php namespace App\Http\Controllers;
use App\Films;
class HomeController extends Controller {
	 
	public function index()
	{
        $latesFilms = new Films;
        $latesFilms = $latesFilms->getLatestFilms();
		return view('common.index',['latestFilms' => $latesFilms]);
    }
    
    public function contacts()
    {
        return view('common.contacts');
    }
} 