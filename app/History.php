<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $guarded = array('id');
    
    public static $rule = array(
        'news_id' => 'required',
        'edited_at' => 'required',
        );
}
