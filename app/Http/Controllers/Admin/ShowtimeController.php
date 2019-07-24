<?php
namespace App\Http\Controllers\Admin;
use Validator;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Showtime;
use App\Hall;
use App\Films;
use Illuminate\Support\Facades\Input;
use Request;


class ShowtimeController extends Controller {

    public function __construct()
    {
        Admin::checkAdmin();
    }

    public function index()
    {
        $model = new Showtime;
        $showtimes = $model->selectAll();
        return view('admin.showtime.index', ['showtimes'=>$showtimes,'model' => $model]);
    }
    public function create(Request $request)
    {
        $hallModel = new Hall;
        $hallList = $hallModel->selectDropdownHall();
        $filmModel = new Films;
        $filmList = $filmModel->selectAllActive();
        if (Input::has('save')){
            $data = Input::post();
            $model = new Showtime;
            $model->insert($data);
            return redirect('/admin/showtime');
        }
        return view('admin.showtime.create',['hallList'=>$hallList,'filmList' => $filmList]);
    }
    public function update($id)
    {

        $hallModel = new Hall;
        $hallList = $hallModel->selectDropdownHall();
        $model = new Showtime;
        $data = $model->getShowtime($id);
        $filmModel = new Films;
        $filmList = $filmModel->selectAllActive();
        if(Input::has('save'))
        {
            $data = Input::post();
            $model->update($id,$data);
            return redirect('/admin/showtime');
        }
        return view('admin.showtime.update',['data' => $data,'hallList'=>$hallList, 'filmList' => $filmList]);
    }
    public function delete($id)
    {

        return view('admin.showtime.delete');
    }

}