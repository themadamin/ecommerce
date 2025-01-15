<?php

namespace App\Http\Responses;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Responsable;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

abstract class BaseResponse implements Responsable, Arrayable
{
    public function __construct(
        protected readonly string $message,
        protected readonly int    $status = SymfonyResponse::HTTP_OK,
    )
    {
    }

    public static function make(): static
    {
        return new static(...func_get_args());
    }

    public function toResponse($request): SymfonyResponse
    {
        return Response::make(
            content: $this->toArray(),
            status: $this->status
        );
    }

}
