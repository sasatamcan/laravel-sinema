<?php
namespace App\Http\Controllers\Admin;
use Validator;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Category;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class CategoryController extends Controller {

    public function __construct()
    {
        Admin::checkAdmin();
    }

    public function index()
    {
        $model = new Category;
        $categories = $model->selectAll();
        return view('admin.category.index', ['model' => $model,'categories'=>$categories]);
    }
    public function create(Request $request)
    {
        if (Input::has('name')){
        $data = Input::post();
        $model = new Category;
        $model-> insert($data);
         }
        return view('admin.category.create');
    }
    public function update($id)
    {
        $model = new Category;
        $data = $model->getCategory($id);
        if (Request::has('save'))
        {
            $data = Request::post();
            $model->update($id, $data);
            return redirect('/admin/category');
        }
            elseif (Request::has('apply')){
                $data = Request::post();
                $model->update($id,$data);
                return redirect('/admin/category/update/'.$id);
        }
        return view('admin.category.update', ['id' => $id, 'data' => $data]);
    }

    public function delete($id)
    {
        $model = new Category;
        $model->delete($id);
        return response()->json([
            'success' => 'Record deleted successfully!'
        ]);
     }
}
