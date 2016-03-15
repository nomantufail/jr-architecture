<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 3/15/2016
 * Time: 9:56 PM
 */

namespace App\Http\Requests\User;


use App\Http\Requests\Request;
use App\Transformers\Request\AddUserTransformer;

class AddUser extends Request{
    use AddUserTransformer;

    public function __construct(){
        parent::__construct();
    }

    public function authorize(){
        return true;
    }

    public function validate(){
        return true;
    }
} 