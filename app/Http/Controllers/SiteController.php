<?php

namespace App\Http\Controllers;

use App\Models\Events;
use Illuminate\Http\Request;

class SiteController extends Controller
{


    public function index(){
        $title = "Eventos Tech";
        $description = "Eventos Tech";
        return view('site.index', compact('title', 'description'));
    }


    public function incription($slug){

        $event = Events::Find($slug);
        $title = $event->name;
        $description = $event->desription;

        return view('site.inscription', compact('title', 'description', 'event'));
    }

}
