<?php

namespace App\SOLID\Traits;

trait JsonTrait
{
    public function whenDone($data,$message = null)
    {
        return response()->json($data);
    }

    public function whenError($data)
    {
        return response()->json([
            'status' => false,
            'message' => $data,
            'data' => null,
        ],400);
    }
}
