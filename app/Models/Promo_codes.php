<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class promo_codes extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'discount_amount'];

    public function serviceTransactions()
    {
        return $this->hasMany(Service_transactions::class, 'promo_code_id');
    }
}
