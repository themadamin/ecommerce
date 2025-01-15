<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Responses\BaseResponse;
use App\Http\Responses\SuccessResponse;
use App\Models\User;
use Exception;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    /**
     * @param LoginRequest $request
     * @return SuccessResponse
     * @throws Exception
     */
    public function __invoke(LoginRequest $request): BaseResponse
    {
        $email = $request->validated('email');
        $password = $request->validated('password');

        $user = User::query()->whereEmail($email)->first();

        if (!$user){
            throw new Exception(__('User not found'));
        }

        if (!Hash::check($password, $user->password)){
            throw new Exception(__('Wrong user password'));
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        return SuccessResponse::make(JsonResource::make(['token' => $token]), __('Logged in successfully'));
    }
}
