<?php namespace App\Http\Controllers;
use App\Films;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class FilmController extends Controller {

    public function index()
    {
        $model = new Films;
        $films = $model->selectAllActive();
        return view('films.index',['films' => $films]);
    }
    public function detail($id)
    {
        $model = new Films;
        $result = $model->getFilm($id);
        $breadcrumbs = $model->breadcrumbs($id);
        return view('films.detail',['result' => $result, 'breadcrumbs'=>$breadcrumbs]);
    }
    

}