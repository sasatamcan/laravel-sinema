<?php namespace App\Http\Controllers;
use App\Search;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class SearchController extends Controller {
	 
	public function search()
	{
        $model = new Search;
        $_SESSION['search'] = null;
        if(Input::has('search')){  
           $_SESSION['search'] = Input::post('search');
           $result = $model->search($_SESSION['search']);
        }else{
            $result = $model->search($_SESSION['search']);
        }
		return view('search.index', ['result' => $result]);
	}
} 


