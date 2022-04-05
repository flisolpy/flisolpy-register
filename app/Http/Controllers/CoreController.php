<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CoreController extends Controller
{


    public function upload($file, $folder){

//        $file->validate([
//            'file.*' => 'mimes:doc,pdf,docx,zip,jpeg,png,jpg,gif,svg',
//        ]);



        if($file){
            $filename = time().".". $file->getClientOriginalExtension();
            $destination_path = public_path()."/uploads/$folder/";
            $file->move($destination_path, $filename);
            return "/uploads/$folder/$filename";

        }

    }



    public function delete_file($file_path){

        $file_path = base64_decode($file_path);
        return unlink(public_path().$file_path);
    }


}
