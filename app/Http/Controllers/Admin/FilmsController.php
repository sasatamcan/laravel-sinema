<?php
namespace App\Http\Controllers\Admin;
use Validator;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Films;
use App\Category;
use App\FileUpload;
use Request;


class FilmsController extends Controller {

    public function __construct()
    {
        Admin::checkAdmin();
    }

    public function index()
    {
        $model = new Films;
        $films = $model->selectAll();
        return view('admin.films.index', ['films'=>$films, 'model' => $model]);
    }
    public function create(Request $request)
    {
        $categories = new Category;
        $categories = $categories->selectAll();

        if (Request::has('name')){
            $data = Request::post();
            $data['image'] = FileUpload::upload();
            $model = new Films;
            $model->insert($data);
            return redirect('/admin/films');
        }
        return view('admin.films.create', ['categories' =>  $categories]);
    }
    public function update($id)
    {
        $categories = new Category;
        $model = new Films;
        $data = $model->getFilm($id);
        $data->image = FileUpload::getImage($data->image);

        $categories = $categories->selectAll();
        if(Request::has('save'))
        {
            $data = Request::post();
            if(!@getimagesize(FileUpload::path().$data['imageHidden'])){
                $data['image'] = FileUpload::upload();
            }
            else{
                $data['image'] = basename($data['imageHidden']);
            }
            $model->update($id,$data);
            return redirect('/admin/films');
        }
        elseif(Request::has('apply'))
        {
            $data = Request::post();
            if(!@getimagesize(FileUpload::path().$data['imageHidden'])){
                $data['image'] = FileUpload::upload();
            }
            else{
                $data['image'] = basename($data['imageHidden']);
            }
            $model->update($id,$data);
            return redirect('/admin/films/update/'.$id);
        }
        return view('admin.films.update', ['data' => $data,'categories' =>  $categories]);
    }
    public function delete($id)
    {
        $model = new Films;
        $model->delete($id);
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
     }
}
