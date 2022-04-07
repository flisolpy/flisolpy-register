<?php

namespace App\Http\Controllers;

use App\Models\Events;
use App\Models\Subscribed;
use Illuminate\Http\Request;

class SiteController extends Controller
{


    public function index(){
        $title = "Eventos Tech";
        $description = "Eventos Tech";
        return view('site.index', compact('title', 'description'));
    }


    public function incription($slug, $id){

        $event = Events::Find($id);
        $title = $event->name;
        $description = $event->desription;

        return view('site.inscription', compact('title', 'description', 'event'));
    }


    public function incription_save(Request $request){
        $data = new Subscribed();
        $data->fill($request->all());

        if($data->save()){
            Events::where('id', $request->event_id)->increment('total_registered');
            return redirect('/incripcion-confirm')->with('message', 'success|Gracias por registrarte');
        } else {
            return redirect()->back()->with('message', 'error|Ocurrio un error');
        }
    }


    public function incription_confirm()
    {
        $title = "Confirmado";
        $description = "Eventos Tech";
        return view('site.incription_confirm', compact('title', 'description'));
    }

}
