<?php
namespace App\Http\Controllers\Admin;
use Validator;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Hall;
use App\Place;
use Request;


class PlaceController extends Controller {

    public function __construct()
    {
        Admin::checkAdmin();
    }

    public function index()
    {
        $model = new Place;
        $places = $model->selectAll();
        return view('admin.place.index', ['places'=>$places, 'model' => $model]);
    }
    public function create(Request $request)
    {
        $hallmodel = new Hall;
        $hallList = $hallmodel->selectDropdownHall();
        if (Request::has('save')){
            $data = Request::post();
            $model = new Place;
            $model->insert($data);
            return redirect('/admin/place');
        }
        return view('admin.place.create', ['hallList' => $hallList]);
    }
    public function update($id)
    {
        $model = new Place;
        $data = $model->getPlace($id);
        $hallmodel = new Hall;
        $hallList = $hallmodel->selectDropdownHall();
        if(Request::has('save'))
        {
            $data = Request::post();
            $model->update($id,$data);
            return redirect('/admin/place');
        }
        elseif(Request::has('apply'))
        {
            $data = Request::post();
            $model->update($id,$data);
            return redirect('/admin/place/update/'.$id);
        }
        return view('admin.place.update', ['data' => $data, 'hallList' => $hallList]);
    }
    public function delete($id)
    {

        $model = new Place;
        $model->delete($id);
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
    }
}
