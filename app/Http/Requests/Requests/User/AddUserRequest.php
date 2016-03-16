<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 3/15/2016
 * Time: 9:56 PM
 */

namespace App\Http\Requests\Requests\User;


use App\Http\Requests\Interfaces\RequestInterface;
use App\Http\Requests\Request;
use App\Transformers\Request\AddUserTransformer;

class AddUserRequest extends Request implements RequestInterface{

    public function __construct(){
        parent::__construct(new AddUserTransformer());
    }

    public function authorize(){
        return true;
    }

    public function validate(){
        return true;
    }
} 