<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Http\Resources\UserResource;
use App\Http\Responses\SuccessResponse;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends ApiController
{
    public function __invoke(RegistrationRequest $request)
    {
            $validated = $request->validated();

            $user = new User;
            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->password = Hash::make($validated['password']);
            $user->phone = $validated['phone'] ?? null;
            $user->save();

            $token = $user->createToken('auth_token')->plainTextToken;
            $user['token'] = $token;

            return SuccessResponse::make(UserResource::make($user), __('Registered successfully.'));
    }
}
