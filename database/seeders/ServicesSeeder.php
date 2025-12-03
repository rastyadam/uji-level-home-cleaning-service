<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Services;

class ServicesSeeder extends Seeder
{
    public function run()
    {
        $items = [
            ['name' => 'Seluruh Bagian Rumah', 'about' => 'Pembersihan menyeluruh untuk seluruh bagian rumah (whole house).', 'price' => 500000],
            ['name' => 'General Deep Cleaning', 'about' => 'Deep cleaning untuk area yang sangat kotor, membersihkan sampai bersih total.', 'price' => 600000],
            ['name' => 'Pembersihan Dapur & Kompor', 'about' => 'Membersihkan dapur dan kompor sampai bersih, termasuk kerak dan minyak membandel.', 'price' => 250000],
            ['name' => 'Cuci AC', 'about' => 'Cuci AC profesional untuk menjaga performa dan kebersihan udara.', 'price' => 200000],
            ['name' => 'Service & Perbaikan AC', 'about' => 'Servis dan perbaikan AC oleh teknisi berpengalaman.', 'price' => 300000],
            ['name' => 'Bongkar Pasang AC', 'about' => 'Bongkar pasang unit AC dengan aman dan rapi.', 'price' => 350000],
            ['name' => 'Cleaning Harian', 'about' => 'Layanan pembersihan rutin harian untuk menjaga kebersihan.', 'price' => 150000],
            ['name' => 'Poles Lantai', 'about' => 'Poles lantai agar permukaan mengilap dan terlindungi.', 'price' => 250000],
            ['name' => 'Pembersihan Kamar Mandi Total', 'about' => 'Pembersihan menyeluruh kamar mandi termasuk sanitasi dan kuras tuntas.', 'price' => 180000],
            ['name' => 'Disinfeksi Permukaan (Spraying)', 'about' => 'Disinfeksi permukaan menggunakan cairan yang aman.', 'price' => 220000],
            ['name' => 'Fogging Anti-Nyamuk (Pengasapan)', 'about' => 'Fogging untuk pengendalian nyamuk dan vektor.', 'price' => 200000],
            ['name' => 'Layanan Custom (Request)', 'about' => 'Layanan khusus berdasarkan kebutuhan (request).', 'price' => 0],
        ];

        foreach ($items as $item) {
            Services::updateOrCreate(
                ['slug' => Str::slug($item['name'])],
                [
                    'name' => $item['name'],
                    'slug' => Str::slug($item['name']),
                    'about' => $item['about'],
                    'price' => $item['price'],
                    'thumbnail' => null,
                ]
            );
        }
    }
}
