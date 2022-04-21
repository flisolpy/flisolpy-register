<?php
use Illuminate\Support\Facades\Session;

function get_events(){
    return \App\Models\Events::where('has_finish', false)->paginate(10);
}


function slugify($text, string $divider = '-')
{
    // replace non letter or digits by divider
    $text = preg_replace('~[^\pL\d]+~u', $divider, $text);

    // transliterate
    $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

    // remove unwanted characters
    $text = preg_replace('~[^-\w]+~', '', $text);

    // trim
    $text = trim($text, $divider);

    // remove duplicate divider
    $text = preg_replace('~-+~', $divider, $text);

    // lowercase
    $text = strtolower($text);

    if (empty($text)) {
        return 'n-a';
    }

    return $text;
}



function displayAlert()
{
    if (Session::has('message'))
    {
        list($type, $message) = explode('|', Session::get('message'));

//        $type = $type == 'message' ?: 'danger';
//        $type = $type == 'message' ?: 'info';


        return sprintf('<div class="alert alert-%s">%s</div>', $type, $message);
    }

    return '';
}


function formatDate($date){
    return date('d/m/Y', strtotime($date));
}


function totalIncriptos(){

   return 100;

}


function getStatus($status){
    if($status > 0){
        return 'SI';
    }
    return 'NO';
}


function getLastSorted(){
    return \App\Models\Lottery::orderBy('id', 'desc')->first();
}
