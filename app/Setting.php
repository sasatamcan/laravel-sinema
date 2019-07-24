<?php
namespace App;
use Illuminate\Support\Facades\DB;
class Setting
{
    public function tableName()
    {
        return 'setting';
    }

    public function getSetting($name)
    {
        $result = DB::table($this->tableName())
            ->select()
            ->where('name', $name)
            ->first();
            if(!empty($result->value)){
                return $result->value;
            }
            return false;
    }

    public function checkSetting($name)
    {
        return DB::table($this->tableName())
            ->select()
            ->where('name',$name)
            ->first();
    }

    public function insertSetting($name,$value){
        return  DB::table($this->tableName())->insert(
            [
                'name' => $name,
                'value' =>$value,
            ]
        );
    }

     public function updateSetting($name,$value){
        return  DB::table($this->tableName())
            ->where('name', $name)
            ->update(
            [
               'value' =>$value,
            ]
            );
    }

    public function insertOrUpdate($data)
    {
        foreach ($data as $key=>$item)
        {
            if(empty($this->checkSetting($key)))
            {
                $this->insertSetting($key,$item);
            }
            else{
                $this->updateSetting($key,$item);
            }
        }
     }
}
