<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\SOLID\Repositories\FetchDataRepository;
use App\SOLID\Repositories\FirebaseStoreRepository;
use App\SOLID\Traits\JsonTrait;
use App\SOLID\Traits\PaginateTraits;
use Illuminate\Http\Request;

class DataController extends Controller
{
    use PaginateTraits, JsonTrait;
    private $fetchDataRepository;
    private $firebaseStoreRepository;

    public function __construct(FetchDataRepository $fetchDataRepository, FirebaseStoreRepository $firebaseStoreRepository)
    {
        $this->fetchDataRepository = $fetchDataRepository;
        $this->firebaseStoreRepository = $firebaseStoreRepository;
    }

    public function fetchAllDataMovies()
    {
        return $this->fetchDataRepository->getAllDataMovies();
    }

    public function fetchAllDataTv()
    {
        return $this->fetchDataRepository->getAllDataTv();
    }

    public function get_all_data_fireabase()
    {
        $movies = $this->firebaseStoreRepository->get_firebase_movies();
        $tv = $this->firebaseStoreRepository->get_firebase_tv();
        $list = array_merge($movies,$tv);
        $collect = collect($list);
        return $this->whenDone($this->paginate($collect));
    }

    public function get_data_movies()
    {
        return $this->whenDone($this->paginate($this->firebaseStoreRepository->get_firebase_movies()));
    }

    public function get_data_tv()
    {
        return $this->whenDone($this->paginate($this->firebaseStoreRepository->get_firebase_tv()));;
    }
}
