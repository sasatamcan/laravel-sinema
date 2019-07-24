<?php
namespace App;
use App\Hall;
use Illuminate\Support\Facades\DB;
class Showtime{

    public $status_text = null;
    public $pagenum = 10;
    public $pagenumAdmin = 10;

    public function tableName(){
        return 'showtime';
    }


    public function insert($data){
        DB::table($this->tableName())->insert(
            [
                'time' => $data['time'],
                'hall_id' =>$data['hall_id'],
                'film_id' =>$data['film_id'],
             ]
        );
        return DB::getPdo()->lastInsertId();
    }


public function update($id, $data){
    DB::table($this->tableName())->where('id', $id)->update(
        [
            'time' => $data['time'],
            'hall_id' =>$data['hall_id'],
            'film_id' =>$data['film_id'],

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

public function getShowtime($id){
    return  DB::table($this->tableName())->select()->where('id', $id)->first();
}


    public function getHallById($id){
        $hallModel = new Hall;
        $result = DB::table($hallModel->tableName())->select('name')->where('id', $id)->first();
        return $result->name;
    }

    public static function getFilmById($id){
        $result = DB::table((new Films)->tableName())->select('name')->where('id', $id)->first();
        return $result->name;
    }

    public static function getTimesByFilmId($id)
    {
        if(!empty($id)){
            return DB::table((new self)->tableName())->select()->where('film_id', $id)->get();
        }
    }
}
