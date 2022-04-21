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


    public function update($id, Request $request)
    {
        $data = Subscribed::Find($id);
        $data->fill($request->all());
        $data->save();
        return redirect()->back();
    }

    public function get_data($request)
    {
        return Subscribed::paginate(10);
    }
}
