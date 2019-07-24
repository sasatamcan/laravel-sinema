<?php namespace App\Http\Controllers;
use App\Category;
use App\Films;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
class CategoryController extends Controller {

    public function genre()
    {
        $model = new Category;
        $genres = $model->selectAllActive();
        return view('gener.index',['genres' => $genres]);
    }
    
    public function show($id)
    {
        $model = new Category;
        $genres = $model->getCategory($id);
        $films = new Films;
        $films = $films->getFilmByCategory($id);
        return view('gener.show',['genres' => $genres, 'films' => $films]);
    }
    
}