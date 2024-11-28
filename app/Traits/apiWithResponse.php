<?php

declare(strict_types=1);

namespace App\Traits;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

trait apiWithResponse
{
    public function withResponse(Request $request, JsonResponse $response): void
    {
        $response->header('X-Dev', 'WEDOAPP');
    }
}
