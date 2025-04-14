<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'kategori_kode' => 'KK001', 'kategori_nama' => 'Makanan'],
            ['kategori_id' => 2, 'kategori_kode' => 'KK002', 'kategori_nama' => 'Elektronik'],
            ['kategori_id' => 3, 'kategori_kode' => 'KK003', 'kategori_nama' => 'kendaraan'],
            ['kategori_id' => 4, 'kategori_kode' => 'KK004', 'kategori_nama' => 'perkakas'],      
            ['kategori_id' => 5, 'kategori_kode' => 'KK005', 'kategori_nama' => 'Furnitur'],    
        ];

        // Insert ke tabel `m_kategori`
        DB::table('m_kategori')->insert($data);
    }
    }

