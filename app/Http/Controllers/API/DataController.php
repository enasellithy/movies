<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\SOLID\Repositories\FetchDataRepository;
use Illuminate\Http\Request;

class DataController extends Controller
{
    private $fetchDataRepository;

    public function __construct(FetchDataRepository $fetchDataRepository)
    {
        $this->fetchDataRepository = $fetchDataRepository;
    }

    public function fetchAllDataMovies()
    {
        return $this->fetchDataRepository->getAllDataMovies();
    }

    public function fetchAllDataTv()
    {
        return $this->fetchDataRepository->getAllDataTv();
    }
}
