<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cleaning_rooms extends Model
{
    use HasFactory;
    protected $fillable = [
        'room_count',
        'price',
        'description',
    ];
    public function cleaningRoom()
{
    return $this->belongsTo(cleaning_rooms::class, 'cleaning_room_id');
}

}
