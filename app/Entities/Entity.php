<?php

namespace TeachMe\Entities;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model {

    public static function getClass()
    {
        return get_class(new static);
    }

}