<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Events extends Model
{
    use HasFactory;

    protected $guarded= ['_token'];
    protected $table = "events";

    public static function boot()
    {
        parent::boot();

        static::creating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->create_uid = $userid;
            $model->write_uid = $userid;
        });

        static::updating(function($model)
        {
            $userid = (!Auth::guest()) ? Auth::user()->id : null ;
            $model->write_uid = $userid;
        });
    }
}
