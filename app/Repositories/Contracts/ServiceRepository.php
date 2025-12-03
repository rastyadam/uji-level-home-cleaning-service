<?php

namespace App\Repositories;

use App\Repositories\Contracts\ServiceRepositoryInterface;
use App\Models\Services;

class ServiceRepository implements ServiceRepositoryInterface
{
    public function getPopularServices($limit = 6)
    {
        return Services::where('is_popular', 1)
            ->orderBy('created_at', 'desc')
            ->limit($limit)
            ->get();
    }

    public function getNewestServices($limit = 6)
    {
        return Services::orderBy('created_at', 'desc')
            ->limit($limit)
            ->get();
    }

    public function findById($id)
    {
        return Services::findOrFail($id);
    }

    public function getPrice($serviceId)
    {
        $service = Services::findOrFail($serviceId);
        return $service->price;
    }
}
