<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service_transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'name', 'phone', 'email', 'quantity', 'sub_total_amount', 
        'grand_total_amount', 'discount_amount', 'promo_code_id', 'service_id',
        'address', 'post_code', 'city', 'is_paid', 'booking_code', 'proof'
    ];

public function user()
{
    return $this->belongsTo(User::class);
}

public function promo()
{
    return $this->belongsTo(Promo_codes::class, 'promo_code_id');
}

public function service()
{
    return $this->belongsTo(services::class);
}
}
