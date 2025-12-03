<?php

namespace App\Repositories;

use App\Models\Promo_codes as PromoCode;
use App\Repositories\Contracts\PromoCodeRepositoryInterface;

class PromoCodeRepository implements PromoCodeRepositoryInterface
{
    public function getAllPromoCode()
    {
        return PromoCode::all();
    }

    public function findByCode(string $code)
    {
        return PromoCode::where('code', $code)->first();
    }
}