<?php
/**
 * Created by PhpStorm.
 * User: JR Tech
 * Date: 3/16/2016
 * Time: 1:46 PM
 */

namespace App\Http\Responses\Responses;

use App\Http\Responses\Interfaces\ResponseInterface;
use App\Http\Responses\Response as AppResponse;
class WebResponse extends AppResponse implements ResponseInterface
{
    public $view = 'defaultView';
    public function __construct()
    {

    }

    /**
     * @param $data
     * @description
     * following function accepts data from
     * controllers and return a pre-setted view.
     **/
    public function respond(array $data)
    {

    }

    public function setView($viewName)
    {
        $this->view = $viewName;
    }
}