<?php
/**
 * Created by PhpStorm.
 * User: JR Tech
 * Date: 3/16/2016
 * Time: 11:07 AM
 */

namespace App\Repositories\Transformers\Elastic;

use App\Repositories\Interfaces\Transformers\RepositoryTransformerInterface;

abstract class UserTransformer extends ElasticTransformer implements RepositoryTransformerInterface
{
    public function transform($user)
    {

    }
}