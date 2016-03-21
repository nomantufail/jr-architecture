<?php
/**
 * Created by PhpStorm.
 * User: JR Tech
 * Date: 3/16/2016
 * Time: 9:57 AM
 */

namespace App\Repositories\Repositories\Sql;


use App\Repositories\Interfaces\Repositories\UsersRepoInterface;

class UsersRepository extends SqlRepository implements UsersRepoInterface
{
    public function __construct(){

    }

    public function getFirst(array $where)
    {
        return (object)[
            'name'=>'noman',
            'email' => 'nomantufail100@gmail.com',
            'password' => 'noman143',
            'access_token' => null
        ];
    }

    public function updateUser($user)
    {
        return true;
    }
}
