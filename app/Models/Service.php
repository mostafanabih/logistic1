<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;


class Service extends Model
{
    use HasTranslations;

    protected $table = 'services';
    protected $fillable = [
        'name','description','icone','images'
    ];

    public array $translatable = [
        'name','description'
    ];
    public $timestamps = true;
    

    public function setImagesAttribute($value)
{
    $this->attributes['images'] = json_encode($value);
}

public function getImagesAttribute($value)
{
    return json_decode($value, true);
}

   
    

}
