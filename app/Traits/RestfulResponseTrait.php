<?php

namespace App\Traits;

use Illuminate\Support\Facades\Log;

trait RestfulResponseTrait
{
    protected function clientError($message = null, $code = 422)
    {
        $response = [
            'code' => $code,
            'status' => 'error',
            'data' => [],
            'message' => $message,
        ];
        return response()->json($response, $code);
    }

    protected function listResponse($data)
    {
        $response = [
            'code' => 200,
            'status' => 'success',
            'data' => $data
        ];
        return response()->json($response, $response['code']);
    }

    protected function createdResponse($data, $message = '')
    {
        $response = [
            'code' => 201,
            'status' => 'success',
            'data' => $data,
            'message' => $message,
        ];
        return response()->json($response, $response['code']);
    }
}
