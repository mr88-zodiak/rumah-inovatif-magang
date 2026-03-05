<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Peserta;

class PesertaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Peserta::create(
            [
                'name' => 'Dadang Prakoso',
                'institut' => 'SMKN 1 SURABAYA',
                'jabatan' => 'Kelas 12',
                'no_hp' => '0123456789',
                'pelatihan_id' => 1,
            ]
        );
        Peserta::create(
            [
                'name' => 'Favian',
                'institut' => 'SMKN 1 SURABAYA',
                'jabatan' => 'Kelas 12',
                'no_hp' => '0123456789',
                'pelatihan_id' => 1,
            ]
        );
        Peserta::create(
            [
                'name' => 'Dhimas',
                'institut' => 'SMKN 1 SURABAYA',
                'jabatan' => 'Kelas 12',
                'no_hp' => '0123456789',
                'pelatihan_id' => 1,
            ]
        );
        Peserta::create(
            [
                'name' => 'Reyhan',
                'institut' => 'SMKN 1 SURABAYA',
                'jabatan' => 'Kelas 12',
                'no_hp' => '0123456789',
                'pelatihan_id' => 1,
            ]
        );
        Peserta::create(
            [
                'name' => 'Alvian Dwi Ardiansyah',
                'institut' => 'SMKN 1 SURABAYA',
                'jabatan' => 'Kelas 12',
                'no_hp' => '0123456789',
                'pelatihan_id' => 1,
            ]
        );
        Peserta::create(
            [
                'name' => 'Prasetyo Tri Utomo',
                'institut' => 'SMKN 1 SURABAYA',
                'jabatan' => 'Kelas 12',
                'no_hp' => '0123456789',
                'pelatihan_id' => 1,
            ]
        );
        Peserta::create(
            [
                'name' => 'Farid Dark Sistem',
                'institut' => 'SMKN 1 SURABAYA',
                'jabatan' => 'Kelas 12',
                'no_hp' => '0123456789',
                'pelatihan_id' => 1,
            ]
        );
        Peserta::create(
            [
                'name' => 'Zaidan Rafli',
                'institut' => 'SMKN 1 SURABAYA',
                'jabatan' => 'Kelas 12',
                'no_hp' => '0123456789',
                'pelatihan_id' => 1,
            ]
        );
        Peserta::create(
            [
                'name' => 'Priyo Gesang',
                'institut' => 'SMKN 1 SURABAYA',
                'jabatan' => 'Kelas 12',
                'no_hp' => '0123456789',
                'pelatihan_id' => 1,
            ]
        );
    }
}
