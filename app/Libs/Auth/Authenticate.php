<?php
/**
 * Created by PhpStorm.
 * User: JR Tech
 * Date: 3/17/2016
 * Time: 12:08 PM
 */

namespace App\Libs\Auth;


use Illuminate\Support\Facades\Auth;
use App\Models\User;
abstract class Authenticate
{
    public function attempt(array $credentials)
    {
        $user = User::where($credentials)->get()->first();

        if(!$user)
            return false;

        return true;
    }
}