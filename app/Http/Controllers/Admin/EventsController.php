<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CoreController;
use App\Models\Events;
use Illuminate\Http\Request;



class EventsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {

        $title = "Eventos";
        $events = $this->get_data($request);

        return view('admin.event.index', compact('title', 'events'));

    }

    public function create()
    {
        $title = "Registrar nuevo Evento";

        return view('admin.event.create', compact('title'));
    }


    public function store(Request $request)
    {


        $cc = new CoreController();
        $new_request = $request->all();

        if($request->file('image')){
            $new_request['image'] = $cc->upload($request->file('image'), 'images');
        }

        if($request->file('backgroud_image')){
            $new_request['backgroud_image'] = $cc->upload($request->file('backgroud_image'), 'backgroud-image');
        }



        if(Events::count() > 0) {
            $new_request['slug'] = slugify($request->name) .'-'.  (Events::select('id')->orderBy('id', 'desc')->first()->id + 1);
        } else {
            $new_request['slug'] = slugify($request->name) .'-'.  1;
        }
        
        $data = new Events();
        $data->fill($new_request);
        $data->save();
        return redirect('admin/event');
    }


    public function edit($id)
    {

        $title = "Editar Evento";
        $event = Events::Find($id);
        return view('admin.event.edit', compact('title', 'event'));
    }


    public function update($id, Request $request)
    {
        $data = Events::Find($id);
        $cc = new CoreController();
        $new_request = $request->all();

        if($request->file('image')){
            $new_request['image'] = $cc->upload($request->file('image'), 'images');
        }

        if($request->file('backgroud_image')){
            $new_request['backgroud_image'] = $cc->upload($request->file('backgroud_image'), 'backgroud-image');
        }
        $new_request['slug'] = slugify($request->name) .'-'.$id;
        $data->fill($new_request);
        $data->save();
        return redirect('admin/event');
    }


    public function delete_file($file_path, $id, $row_name){
        $cc = new CoreController();
        if($cc->delete_file($file_path)){
            $data = Events::Find($id);
            $data->$row_name = null;
            $data->save();
            return redirect()->back();
        }
    }

    public function get_data($request)
    {
        return Events::paginate(10);
    }

}





