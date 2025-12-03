<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'slug', 'thumbnail', 'about', 'price', 'category_id', 'brand_id',
        'is_popular', 'stock', 'duration'
    ];

    // Relasi ke category
    public function category()
    {
        return $this->belongsTo(Servicescategories::class, 'category_id');
    }

    // Relasi ke photos
    public function photos()
    {
        return $this->hasMany(Servicesphotos::class);
    }

    // Relasi ke transactions
    public function transactions()
    {
        // Match the actual model class defined in Service_transactions.php
        return $this->hasMany(Service_transactions::class);
    }

    // Booted: set slug otomatis sebelum save
    protected static function booted()
    {
        static::saving(function ($service) {
            if (empty($service->slug) && !empty($service->name)) {
                $service->slug = Str::slug($service->name);
            }
        });
    }
}
