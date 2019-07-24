<?php

namespace App;
use Illuminate\Support\Facades\DB;

class Search 

{
    public $pagenum = 2;

    public function search($search){
    $res['category'] = DB::table('category')
    ->select()
    ->where('status',1)
    ->where('name', 'like', '%'.$search.'%')
    ->paginate($this->pagenum);
    $res['films'] = DB::table('films')
    ->select()
    ->where('status',1)
    ->where('name', 'like', '%'.$search.'%')
    ->paginate($this->pagenum);

    return $res;
   }
}