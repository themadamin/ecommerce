<?php

namespace App\Http\Responses;

class SuccessEmptyResponse extends BaseResponse
{

    public function toArray(): array
    {
        return [
            'success' => true,
            'message' => $this->message
        ];
    }
}
