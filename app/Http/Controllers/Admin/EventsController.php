<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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

        return view('admin.event.create', compact('title',));
    }


    public function store(Request $request)
    {

        $event = new Events();
        $event->fill($request->all());
        $event->save();
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

        $event = Events::Find($id);
        $event->fill($request->all());
        $event->save();
        return redirect('admin/event');
    }


    public function get_data($request)
    {
        return Events::paginate(10);
    }

}


