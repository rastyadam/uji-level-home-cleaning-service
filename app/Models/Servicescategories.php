<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Servicescategories extends Model
{
    use HasFactory;

    protected $table = 'service_categories';

    protected $fillable = ['name', 'slug', 'icon'];

    public function services()
    {
        return $this->hasMany(Services::class, 'category_id');
    }
}
