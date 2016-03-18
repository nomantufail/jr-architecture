<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 3/15/2016
 * Time: 9:54 PM
 */

namespace App\Transformers\Response;


class UserTransformer extends ResponseTransformer{

    public function transform($data){
        return [
            'username'=>$data['name'],
        ];
    }
} 