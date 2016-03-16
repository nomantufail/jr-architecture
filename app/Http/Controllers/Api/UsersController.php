<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\User\AddUserRequest;
use App\Http\Responses\Responses\ApiResponse;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UsersController extends ApiController
{
    public function __construct(ApiResponse $apiResponse)
    {
        $this->response = $apiResponse;
    }
    public function store(AddUserRequest $request){
        return $this->response->respond($request->all());
    }
}
