<?php

namespace App;
use Illuminate\Support\Facades\DB;
class Hall
{
    public $status_text = null;
    public $pagenum = 10;
    public $pagenumAdmin = 10;

    public function tableName(){
        return 'hall';
    }

    public function validateStore(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'url' => 'required|unique:category|max:255',
        ]);
    }

    public function insert($data){
          DB::table($this->tableName())->insert(
            [
                'name' => $data['name'],
                'url' =>$data['url'],
                'status' => $data['status']
             ]
        );
        return DB::getPdo()->lastInsertId();
    }


    public function update($id, $data){
         DB::table($this->tableName())->where('id', $id)->update(
            [
                'name' => $data['name'],
                'url' =>$data['url'],
                'status' => $data['status']

            ]
        );
        return DB::getPdo()->lastInsertId();
    }

    public function selectAll(){
        return  DB::table($this->tableName())->select()->paginate($this->pagenumAdmin);
    }

    public function selectDropdownHall(){
        return  DB::table($this->tableName())->select()->get();
    }

    public function getHall($id){
        return  DB::table($this->tableName())->select()->where('id', $id)->first();
    }

    public function selectAllActive(){
        return  DB::table($this->tableName())->select()->where('status',1)->paginate($this->pagenum);
    }

    public function status($status_id){
        switch ($status_id){
            case 1:
                $this->status_text = 'Active';
                break;
            default:
                $this->status_text = 'Draft';
        }
        return $this->status_text;
    }
    public function delete($id){
        return DB::table($this->tableName())->where('id', $id)->delete();
    }

}
