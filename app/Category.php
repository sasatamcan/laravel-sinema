<?php

namespace App;
use Illuminate\Support\Facades\DB;
class Category
{
    public $pagenum = 4;

    public function tableName(){
        return 'category';
    }

    public function validateStore(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'url' => 'required|unique:category|max:255',
        ]);
    }

    public function insert($data){
        return  DB::table($this->tableName())->insert(
            ['name' => $data['name'],
                'url' =>$data['url'],
                'short_content' => $data['short_content'],
                'content' => $data['content']
            ]
        );
    }
    public function status($status_id){
        switch ($status_id){
           case 1:
               $status_text = 'Active';
               break;
           default:
               $status_text = 'Draft';
          }
       return $status_text;
   }

    public function selectAll(){
        return  DB::table($this->tableName())->select('id','name','url','image', 'status')->get();
    }

    public function selectAllActive(){
        return  DB::table($this->tableName())->select()->where('status',1)->paginate($this->pagenum);
    }
    public function getCategory($id){
        return  DB::table($this->tableName())->select()->where('id', $id)->first();
    }

    public static function getCat($id){
        return  DB::table((new self)->tableName())->select()->where('id', $id)->first();
    }
    public function update($id, $data){
        DB::table($this->tableName())->where('id', $id)->update(
            ['name' => $data['name'],
            'url' =>$data['url'],
            'short_content' => $data['short_content'],
            'content' => $data['content']
        ]
       );
       return DB::getPdo()->lastInsertId();
   }
   public function delete($id){
    return DB::table($this->tableName())->where('id', $id)->delete();
}


}
