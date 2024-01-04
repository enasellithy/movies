<?php

namespace App\Http\Resources\API;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DataFetchResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'original_language' => $this->original_language,
            'overview' => $this->overview,
            'poster_path' => 'https://image.tmdb.org/t/p/original'.$this->poster_path,
        ];
    }
}
