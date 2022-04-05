<?php


function get_events(){
    return \App\Models\Events::where('has_finish', false)->paginate(10);
}
