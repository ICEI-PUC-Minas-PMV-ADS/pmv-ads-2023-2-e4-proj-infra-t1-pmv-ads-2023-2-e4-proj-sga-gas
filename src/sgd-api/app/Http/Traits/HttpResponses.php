<?php
namespace App\Http\Traits;



trait HttpResponses
{
    public function response(string $message, $status, $data = [])
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'data' => $data
        ], $status);
    }

    public function error(string $message, $status, $errors = [], array $data = [])
    {
        return response()->json([
            'status' => $status,
            'message' => $message,
            'errors' => $errors,
            'data' => $data
        ], $status);
    }
}

?>