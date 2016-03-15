<?php

namespace App\Http\Requests;

abstract class Request
{
    public $transformedValues = [];

    public function __construct(){
        $this->transformedValues = $this->transform(request()->all());
    }

    public function get($key){

    }

    public function all(){
        return $this->transformedValues;
    }

    public function authenticate(){
        return true;
    }
}
