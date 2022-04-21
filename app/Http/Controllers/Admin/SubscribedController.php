<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscribed;

class SubscribedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {

        $title = "Subscriptores";
        $data = $this->get_data($request);

        return view('admin.subcribed.index', compact('title', 'data'));

    }

    public function create()
    {
        $title = "Registrar nuevo suscritor";

        return view('admin.subcribed.create', compact('title'));
    }

    public function edit($id)
    {

        $title = "Editar Suscritor";
        $data = Subscribed::Find($id);
        return view('admin.subcribed.edit', compact('title', 'data'));
    }


    public function show($id)
    {

        $title = "Editar Suscritor";
        $data = Subscribed::Find($id);
        return view('admin.subcribed.show', compact('title', 'data'));
    }


    function delete($id, Request $request){
        if($request->confirmed == 1){
            Subscribed::where('id', $id)->delete();
            return redirect('/admin/subscribed')->with('message', 'success|Registro borrado');
        }

        return redirect('/admin/subscribed')->with('message', 'warning|No se borro el registro');
    }


    public function update($id, Request $request)
    {
        $data = Subscribed::Find($id);
        $data->fill($request->all());
        $data->save();
        return redirect()->back()->with('message', 'success|Registro actualizado');
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
        return Subscribed::leftJoin('events', 'events.id', 'subscribed.event_id')
        ->where(function($query) use ($request){
            if($request->event_id)
                $query->where('subscribed.event_id', $request->event_id);

            if($request->phone)
                $query->where('subscribed.phone', $request->phone);

            if($request->email)
                $query->where('subscribed.email', $request->email);

            if($request->name)
                $query->where('subscribed.name', 'LIKE', '%'.$request->name.'%');

        })
        ->select('subscribed.*', 'events.name as event')
        ->paginate(50);
    }
}
