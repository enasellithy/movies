<?php

namespace App\SOLID\Traits;

trait JsonTrait
{
    public function whenDone($data,$message = null)
    {
        return response()->json($data);
    }

    public function whenError($msg)
    {
        return response()->json([
            'status' => false,
            'message' => $msg,
        ],400);
    }
}
