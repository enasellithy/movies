<?php

namespace App\SOLID\Repositories;

use App\Http\Resources\API\DataFetchResource;
use App\SOLID\Traits\JsonTrait;
use GuzzleHttp\Client;

class FetchDataRepository
{
    use JsonTrait;
    public function getAllDataMovies($page = null)
    {
        $path = 'https://api.themoviedb.org/3/discover/movie?api_key=db456e2314b333719aaf25c1c9eb11fc&page='.$page;
        $client = new Client();
        $response = $client->get($path);
        $json = json_decode($response->getBody());
        $data = DataFetchResource::collection($json->results);
        return $this->whenDone($data);
    }

    public function getAllDataTv($page = null)
    {
        $path = 'https://api.themoviedb.org/3/discover/tv?api_key=db456e2314b333719aaf25c1c9eb11fc&page='.$page;
        $client = new Client();
        $response = $client->get($path);
        $json = json_decode($response->getBody());
        $data = DataFetchResource::collection($json->results);
        return $this->whenDone($data);
    }
}
