<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class trainingservers extends Model
{
    //
    protected $fillable = ['ServerName','Description','LoginUsername','LoginPass','link','github'];
}
