<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lottery;
use App\Models\Subscribed;


class LotteryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(Request $request)
    {

        $title = "Sorteos";
        
        if($request->lottery == 'lottery'){
            
           return $this->lottety();
        }

        $data = $this->get_data($request);  


        return view('admin.lottery.index', compact('title', 'data'));

    }


    public function lottety(){
       $sorted = Subscribed::inRandomOrder()->first();
       if($sorted){
           $this->store($sorted);
       }
       return $sorted;
    }

    public function store($sorted){
        $data = new Lottery();
        $data->name =  $sorted->name;
        $data->subscribe_id =  $sorted->id;
        $data->event_id = $sorted->event_id;
        $data->save();
    }


    public function get_data($request)
    {
        return Lottery::orderBy('id', 'desc')->paginate(20);
    }

}
