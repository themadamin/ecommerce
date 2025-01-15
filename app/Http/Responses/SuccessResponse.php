<?php

namespace App\Http\Responses;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\AbstractPaginator;
use Illuminate\Support\Arr;
use Symfony\Component\HttpFoundation\Response as SymfonyResponse;

class SuccessResponse extends BaseResponse
{
    public function __construct(
        protected readonly JsonResource $response,
        string       $message,
        int          $status = SymfonyResponse::HTTP_OK
    )
    {
        parent::__construct($message, $status);
    }

    public function toArray(): array
    {
        $data = $this->response instanceof SymfonyResponse
            ? json_decode($this->response->getContent(), true)
            : $this->response;

        $response = [
            'success' => true,
            'message' => $this->message,
            'data' => $data,
        ];

        if ($pagination = $this->getPaginationFromResource()) {
            $response = $response + $pagination;
        }

        return $response;
    }

    private function getPaginationFromResource(): bool|array
    {
        if (!($this->response instanceof JsonResource && $this->response->resource instanceof AbstractPaginator)) {
            return false;
        }

        $paginated = $this->response->resource->toArray();

        return [
            'links' => [
                'first' => $paginated['first_page_url'] ?? null,
                'last' => $paginated['last_page_url'] ?? null,
                'prev' => $paginated['prev_page_url'] ?? null,
                'next' => $paginated['next_page_url'] ?? null,
            ],
            'meta' => Arr::except($paginated, [
                'data',
                'first_page_url',
                'last_page_url',
                'prev_page_url',
                'next_page_url',
            ]),
        ];
    }
}
