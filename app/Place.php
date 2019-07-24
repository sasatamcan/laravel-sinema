<?php

namespace App;
use Illuminate\Support\Facades\DB;
class Place
{
    public $status_text = null;
    public $pagenum = 10;
    public $pagenumAdmin = 10;

    public function tableName(){
        return 'place';
    }

     public function insert($data){
        DB::table($this->tableName())->insert(
            [
                'hall_id' => $data['hall_id'],
                'seat_row' =>$data['seat_row'],
                'seat_place' => $data['seat_place'],
                'type' => $data['type']

            ]
        );
        return DB::getPdo()->lastInsertId();
    }


    public function update($id, $data){
        DB::table($this->tableName())->where('id', $id)->update(
            [
                'hall_id' => $data['hall_id'],
                'seat_row' =>$data['seat_row'],
                'seat_place' => $data['seat_place'],
                'type' => $data['type']

            ]
        );
        return DB::getPdo()->lastInsertId();
    }

    public function selectAll(){
        return  DB::table($this->tableName())->select()->paginate($this->pagenumAdmin);
    }
    public function getPlace($id){
        return  DB::table($this->tableName())->select()->where('id', $id)->first();
    }

    public function getPlaceByHallId($hall_id){
        return  DB::table($this->tableName())->select()->where('hall_id', $hall_id)->get();
    }

    public function countMaxRow($hall_id){
        return  DB::table($this->tableName())
            ->select()
            ->where('hall_id', $hall_id)
            ->max('seat_row');
    }

    public function countMaxColumn($hall_id){
        return  DB::table($this->tableName())
            ->select()
            ->where('hall_id', $hall_id)
            ->max('seat_place');
    }

    public function getPlaceList(){
        return  DB::table($this->tableName())->select()->get();
    }

    public function selectAllActive(){
        return  DB::table($this->tableName())->select()->paginate($this->pagenum);
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

