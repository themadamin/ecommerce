<?php

namespace App\Http\Responses;

class ErrorResponse extends BaseResponse
{

    public function toArray()
    {
        return [
            'success' => false,
            'message' => $this->message
        ];
    }
}
