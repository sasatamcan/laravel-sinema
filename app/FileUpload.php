<?php
namespace App;
use Illuminate\Support\Facades\DB;
class FileUpload
{
    public static $viewPath = '/public/uploads/';
    public static $placeholder = 'https://via.placeholder.com/300.png/09f/fff';
    
    public static function path()
    {
        return public_path().'/uploads/';
    }
    public static function upload(){
        if (move_uploaded_file($_FILES['image']['tmp_name'],
            self::path().$_FILES['image']['name']))
        {
           return  $_FILES['image']['name'];
        }
        else {
           return false;
        }
    }
    public static function getImage($image)
    {
        if (@getimagesize(self::path().$image)) {
            return self::$viewPath.$image;
        }
        else{
            return self::$placeholder;
        }
    }
}
