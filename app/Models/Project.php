<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $table = 'projects';
    protected $fillable = [
        'name','description','type','images','client','video_link','summary'
    ];
    protected $casts = [
        'images' => 'json',
    ];
    public $timestamps = true;
    

    
   
    

}
