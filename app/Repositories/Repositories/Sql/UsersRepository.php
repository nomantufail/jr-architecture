<?php
/**
 * Created by PhpStorm.
 * User: JR Tech
 * Date: 3/16/2016
 * Time: 9:57 AM
 */

namespace App\Repositories\Repositories\Sql;


use App\Repositories\Interfaces\Repositories\UsersRepoInterface;
use App\Models\Sql\User;

class UsersRepository extends SqlRepository implements UsersRepoInterface
{
    public function __construct(){

    }

    public function getFirst(array $where)
    {
        return User::where($where)->get()->first();
    }

    public function updateUser($user)
    {
        return true;
    }

    public function storeUser($userInfo)
    {
        $user = User::create($userInfo);
        return ($user == null)?null:$user->id;
    }

    public function deleteUser($userId)
    {
        User::destroy($userId);
        return true;
    }

    public function getUserDocument($userId)
    {
        return User::where('id','=',$userId)->with('agencies')->get()->first();
    }
}
