<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Requests\User\AddUserRequest;
use App\Http\Requests\Requests\User\DeleteUserRequest;
use App\Http\Responses\Responses\ApiResponse;
use App\Transformers\Response\UserTransformer;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UsersController extends ApiController
{
    public $userTransformer;
    public function __construct(ApiResponse $apiResponse, UserTransformer $userTransformer)
    {
        $this->response = $apiResponse;
        $this->userTransformer = $userTransformer;
    }

    public function store(AddUserRequest $request){
        return $this->response
            ->respond($this->userTransformer->transform($request->all()));
    }

}
