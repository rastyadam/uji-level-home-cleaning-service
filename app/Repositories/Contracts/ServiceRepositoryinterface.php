<?php

namespace App\Repositories\Contracts;

interface ServiceRepositoryInterface
{
    public function getPopularServices($limit = 6);

    public function getNewestServices($limit = 6);

    public function findById($id);

    public function getPrice($serviceId);
}
