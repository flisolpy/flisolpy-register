<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {

        $title = "Usuarios";
        $data = $this->get_data($request);

        return view('admin.user.index', compact('title', 'data'));

    }


    public function create()
    {
        $title = "Registrar nuevo usuario";

        return view('admin.user.create', compact('title'));
    }


    public function store(Request $request){


        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);


        if($request->password != $request->repite_password){
            return redirect()->back()
                ->withInput()
                ->with('message', 'danger|Las contraseñan no coinciden');
        }

        try {
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect('/admin/user')
                ->withInput()
                ->with('message', 'success|Registro creado');

        } catch (\Exception $e){
            return redirect()->back()
                ->withInput()
                ->with('message', 'danger|Error '.  $e->getMessage());

        }

    }

    public function edit($id)
    {

        $title = "Editar Usuario";
        $data = User::Find($id);
        return view('admin.user.edit', compact('title', 'data'));
    }


    public function update($id, Request $request)
    {

        if($request->password != $request->repite_password){
            return redirect()->back()
                ->withInput()
                ->with('message', 'danger|Las contraseñan no coinciden');
        }

        $data = User::Find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = Hash::make($request->password);
        try {
            $data->save();

            return redirect('/admin/user')
                ->withInput()
                ->with('message', 'success|Registro actualizado');

        } catch (\Exception $e){
            return redirect()->back()
                ->withInput()
                ->with('message', 'danger|Error '.  $e->getMessage());

        }

        return redirect()->back()->with('message', 'success|Registro actualizado');
    }





    public function get_data($request)
    {
        return User::where(function($query) use ($request){

                if($request->email)
                    $query->where('email', $request->email);

                if($request->name)
                    $query->where('name', 'LIKE', '%'.$request->name.'%');

            })
            ->paginate(50);
    }


    public function destroy($id)
    {
        //
    }
}
