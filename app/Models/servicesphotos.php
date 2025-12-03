<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class servicesphotos extends Model
{
    use HasFactory;

    protected $fillable = ['service_id', 'photo'];

    public function service()
    {
        return $this->belongsTo(services::class);
    }
}
