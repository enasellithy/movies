<?php

namespace App\SOLID\Traits;

use Illuminate\Routing\Route;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;

trait PaginateTraits
{
    public function paginate($items, $perPage = 10, $page = null, $options = [])
    {
        $path = url()->current().'?page';
        $options = ['path' => $path];
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);

        $items = $items instanceof Collection ? $items : Collection::make($items);

        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);

    }
}
