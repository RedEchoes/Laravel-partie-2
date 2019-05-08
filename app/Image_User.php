<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image_User extends Model
{
    
    public function images()
    {
        return $this->hasMany(Image::class);
    }
   
}
