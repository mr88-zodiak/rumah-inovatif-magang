<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelatihan;

class PelatihanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelatihan::create(
            [
                'title' => 'Pelatihan PHP dasar',
                'slug' => 'pelatihan-php-dasar',
                'body' => 'Pelatihan ini akan membahas dasar-dasar bahasa pemrograman PHP.',
                'lokasi' => 'Online',
                'metode' => 'Online',
                'image' => '',
                'event_start' => '2024-06-01',
                'event_end' => '2024-06-03',
                'regist_start' => '2024-05-01',
                'regist_end' => '2024-05-25',
            ],
            
        );
        Pelatihan::create(
            [
                'title' => 'Pelatihan PHP dasar 2',
                'slug' => 'pelatihan-php-dasar-2',
                'body' => 'Pelatihan ini akan membahas dasar-dasar bahasa pemrograman PHP part 2.',                
                'lokasi' => 'Online',
                'metode' => 'Online',
                'image' => '',
                'event_start' => '2024-07-01',
                'event_end' => '2024-07-03',
                'regist_start' => '2024-06-01',
                'regist_end' => '2024-06-25',
            ],
        );

        Pelatihan::create(
            
            [
                'title' => 'Pelatihan Laravel Dasar',
                'slug' => 'pelatihan-laravel-dasar',
                'body' => 'Pelatihan ini akan membahas dasar-dasar pengembangan web menggunakan Laravel.',                
                'lokasi' => 'Semampir Utara',
                'metode' => 'Offline',
                'image' => '',
                'event_start' => '2024-03-01',
                'event_end' => '2024-03-03',
                'regist_start' => '2024-02-01',
                'regist_end' => '2024-02-25',
            ],
        );
    }
}
