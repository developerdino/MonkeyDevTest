<?php namespace Monkey\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Support\Facades\Validator;

abstract class BaseModel extends Eloquent
{
    protected static $rules = array();

    public $valid;
    public $validator;

    public function validate()
    {
        $v = Validator::make($this->attributes, static::$rules);

        if ($v->passes()) {
            return true;
        }

        $this->validator = $v;
        return false;
    }
}