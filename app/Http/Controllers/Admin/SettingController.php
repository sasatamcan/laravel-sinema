<?php
namespace App\Http\Controllers\Admin;
use Validator;
use App\Http\Controllers\Controller;
use App\Admin;
use App\Setting;
use Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class SettingController extends Controller {

    public function __construct()
    {
        Admin::checkAdmin();
    }
    public function index()
    {
        $model = new Setting;
        if (Request::has('save')){
            $data = Request::post();
            unset($data['save']);
            unset($data['_token']);
            $model->insertOrUpdate($data);
            return redirect('/admin/setting');
        }
        return view('admin.setting.index', ['model'=>$model]);
    }
}
