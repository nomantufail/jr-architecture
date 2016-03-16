<?php
/**
 * Created by PhpStorm.
 * User: zeenomlabs
 * Date: 3/15/2016
 * Time: 9:54 PM
 */

namespace App\Transformers\Response;


trait UserTransformer{
    use ResponseTransformer;

    public function transform($data){
        return [
            'name'=>$data['name'],
        ];
    }
} 