<?php
namespace App\Http\Controllers\Admin;
use Validator;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Hall;
use Request;


class HallController extends Controller {

    public function __construct()
    {
        Admin::checkAdmin();
    }

    public function index()
    {
        $model = new Hall;
        $halls = $model->selectAll();
        return view('admin.hall.index', ['halls'=>$halls, 'model' => $model]);
    }
    public function create(Request $request)
    {
         if (Request::has('name')){
            $data = Request::post();
            $model = new Hall;
            $model->insert($data);
            return redirect('/admin/hall');
        }
        return view('admin.hall.create');
    }
    public function update($id)
    {
        $model = new Hall;
        $data = $model->getHall($id);
        if(Request::has('save'))
        {
            $data = Request::post();
            $model->update($id,$data);
            return redirect('/admin/hall');
        }
        elseif(Request::has('apply'))
        {
            $data = Request::post();
            $model->update($id,$data);
            return redirect('/admin/hall/update/'.$id);
        }
        return view('admin.hall.update', ['data' => $data]);
    }
    public function delete($id)
    {
        $model = new Hall;
        $model->delete($id);
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
     }
}