<?php

namespace App\SOLID\Repositories;

use App\Http\Resources\API\DataFetchResource;
use App\SOLID\Traits\JsonTrait;
use App\SOLID\Traits\PaginateTraits;
use GuzzleHttp\Client;
use Kreait\Firebase\Factory;

class FirebaseStoreRepository
{
    public function store_movies()
    {
        $database = app('firebase.database');
        $firebase = (new Factory)
            ->withServiceAccount(public_path() . '/firebase.json')
            ->withDatabaseUri('https://vuejs-45225-default-rtdb.firebaseio.com');
        $database2 = $firebase->createDatabase();

        $arr = [];
        for($i=1; $i <= 7; $i++){
            $path = 'http://localhost:8000/api/movies?page='.$i;
            $client = new Client();
            $response = $client->get($path);
            $json = json_decode($response->getBody());
            $arr[] = array_values($json);
        }

        $list = array_merge($arr[0],$arr[1],$arr[2],$arr[3],$arr[4],$arr[5],$arr[6]);
        foreach($list as $v){
            $database2->getReference('Movies/')->push($v);
        }

    }

    public function store_tv()
    {
        $firebase = (new Factory)
            ->withServiceAccount(public_path() . '/firebase.json')
            ->withDatabaseUri('https://vuejs-45225-default-rtdb.firebaseio.com');
        $database2 = $firebase->createDatabase();

        $arr = [];
        for($i=1; $i <= 7; $i++){
            $path = 'http://localhost:8000/api/tv?page='.$i;
            $client = new Client();
            $response = $client->get($path);
            $json = json_decode($response->getBody());
            $arr[] = array_values($json);
        }

        $list = array_merge($arr[0],$arr[1],$arr[2],$arr[3],$arr[4],$arr[5],$arr[6]);
        foreach($list as $v){
            $database2->getReference('Tv/')->push($v);
        }

    }

    public function get_firebase_movies()
    {
        try {
            $firebase = (new Factory)
                ->withServiceAccount(public_path() . '/firebase.json')
                ->withDatabaseUri('https://vuejs-45225-default-rtdb.firebaseio.com');
            $database2 = $firebase->createDatabase();
            $values = $database2->getReference('/Movies');
            return $values->getValue();
        }catch (err){
            return $this->whenError('Some Thing Wrong');
        }
    }

    public function get_firebase_tv()
    {
        try {
            $firebase = (new Factory)
                ->withServiceAccount(public_path() . '/firebase.json')
                ->withDatabaseUri('https://vuejs-45225-default-rtdb.firebaseio.com');
            $database2 = $firebase->createDatabase();
            $values = $database2->getReference('/Tv');
            return $values->getValue();
        }catch (err){
            return $this->whenError('Some Thing Wrong');
        }
    }
}
