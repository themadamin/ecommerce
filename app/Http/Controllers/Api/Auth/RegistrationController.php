<?php

namespace App\Http\Controllers\Api\Auth;

use App\Http\Controllers\ApiController;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Responses\SuccessResponse;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends ApiController
{
    public function __invoke(RegisterRequest $request)
    {
            $validated = $request->validated();

            $user = new User;
            $user->name = $validated['name'];
            $user->email = $validated['email'];
            $user->password = Hash::make($validated['password']);
            $user->phone = $validated['phone'] ?? null;
            $user->save();

            $token = $user->createToken('auth_token')->plainTextToken;

            return SuccessResponse::make(JsonResource::make(['token' => $token]), __('Registration successful.'));
    }
}
