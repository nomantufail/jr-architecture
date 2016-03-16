<?php

namespace App\Http\Requests;

use App\Transformers\Transformer;

abstract class Request
{
    public $transformedValues = [];
    public $transformer = null;
    public function __construct(Transformer $transformer){
        $this->transformer = $transformer;
        $this->transformedValues = $this->transformer->transform(request()->all());
    }

    public function get($key){
        return (isset($this->transformedValues[$key]))?$this->transformedValues[$key]:null;
    }

    public function all(){
        return $this->transformedValues;
    }

    public function authenticate(){
        return true;
    }
}
