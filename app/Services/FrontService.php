<?php

namespace App\Services;

use App\Models\Services;
use App\Models\Servicescategories;

class FrontService
{
    /**
     * Get data for the front page. Returns an array which can be passed to views.
     *
     * @return array
     */
    public function getFrontPageData(): array
    {
        // Basic implementation — pull all services and categories.
        // This can be expanded later with pagination, filtering, eager loading, etc.
        $services = Services::all();
        $categories = Servicescategories::all();

        return compact('services', 'categories');
    }

    /**
     * Mengambil data detail untuk sebuah layanan.
     * Mengembalikan array dengan kunci 'service' yang sesuai dengan view detail.
     *
     * @param Services $service
     * @return array
     */
    public function getServiceDetails(Services $service): array
    {
        // Eager load relasi yang umum dipakai di halaman detail
        // Hati-hati di beberapa model relasi mungkin memiliki nama class berbeda, tetapi
        // nama relasi method (photos, category, transactions) digunakan untuk eager load.
        $service->load(['photos', 'category']);

        return ['service' => $service];
    }

    /**
     * Mengambil data untuk halaman kategori — menyertakan daftar layanan pada kategori tersebut.
     * Mengembalikan array dengan kunci 'category' dan 'services'.
     *
     * @param Servicescategories $category
     * @return array
     */
    public function getCategoryData(Servicescategories $category): array
    {
        // Jika dataset besar, pagination lebih disarankan.
        // Pastikan relasi 'services' tersedia di model Servicescategories.
        $category->load('services');

        return ['category' => $category, 'services' => $category->services];
    }

    /**
     * Ambil beberapa layanan teratas (mis. untuk halaman landing)
     *
     * @param int $limit
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getTopServices(int $limit = 6)
    {
        return Services::orderBy('id', 'desc')->take($limit)->get();
    }
}
