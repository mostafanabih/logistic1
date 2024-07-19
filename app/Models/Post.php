<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Post extends Model
{
    use HasTranslations;
    protected $table = 'posts';
    protected $fillable = [
        'name','description','user','type','image'
    ];
    public array $translatable = [
        'name','description'
    ];
    public $timestamps = true;

}
