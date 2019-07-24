<?php

namespace App;
use Illuminate\Support\Facades\DB;
use App\Category;
class Films
{
    public $pagenum = 4;
    public $pagenumAdmin = 10;

    public function tableName(){
        return 'films';
    }

    public function validateStore(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'url' => 'required|unique:category|max:255',
        ]);
    }

    public function insert($data){
        if(!empty($category_ids)) {
            $category_ids = implode(',', $data['category_ids']);
        }
        else {
            $category_ids = null;
        }
    DB::table($this->tableName())->insert(
        [
            'name' => $data['name'],
            'url' =>$data['url'],
            'short_content' => $data['short_content'],
            'content' => $data['content'],
            'trailer' => $data['trailer'],
            'film' => $data['film'],
            'actor' => $data['actor'],
            'year' => $data['year'],
            'image' => $data['image'],
            'category_ids' => $category_ids

        ]
    );
    return DB::getPdo()->lastInsertId();
}


    public function update($id, $data){

        if(!empty($category_ids)) {
            $category_ids = implode(',', $data['category_ids']);
        }
        else {
                $category_ids = null;
        }

        DB::table($this->tableName())->where('id', $id)->update(
            [
                'name' => $data['name'],
                'url' =>$data['url'],
                'short_content' => $data['short_content'],
                'content' => $data['content'],
                'trailer' => $data['trailer'],
                'film' => $data['film'],
                'actor' => $data['actor'],
                'year' => $data['year'],
                'image' => $data['image'],
                'category_ids' => $category_ids

            ]
        );
        return DB::getPdo()->lastInsertId();
    }

    public function selectAll(){
        return  DB::table($this->tableName())->select('id','name','url','image', 'status')->paginate($this->pagenumAdmin);
    }
    public function getFilm($id){
        return  DB::table($this->tableName())->select()->where('id', $id)->first();
    }
    public function getFilmByCategory($category_ids){
        return  DB::table($this->tableName())->select()->where('category_ids', $category_ids)->get();
    }

    public function selectAllActive(){
        return  DB::table($this->tableName())->select()->where('status',1)->paginate($this->pagenum);
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

    public function delete($id){
        return DB::table($this->tableName())->where('id', $id)->delete();
    }
    public function getLatestFilms()
    {
        return DB::table($this->tableName())->get();
    }
    public function breadcrumbs($id)
    {
        $film = $this->getFilm($id);
        $breadcrumbs[] = ['url' => '/', 'label' => 'Home'];
        if(!empty($film->category_ids)){
            $categoryIds = explode(',', $film->category_ids);
            foreach ($categoryIds as $category)
            {
                $cat = Category::getCat($category);
                $breadcrumbs[] = ['url' => $cat->id, 'label' => $film->name];
            }
        }    
        $breadcrumbs[] = ['label' => $film->name]; 
        return $breadcrumbs;
        
        
    }

}
