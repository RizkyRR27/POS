<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['penjualan_id' => 1, 'user_id' => 1, 'pembeli' => 'iki', 'penjualan_kode' => 'PK001', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 2, 'user_id' => 1, 'pembeli' => 'heri', 'penjualan_kode' => 'PK002', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 3, 'user_id' => 1, 'pembeli' => 'ujah', 'penjualan_kode' => 'PK003', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 4, 'user_id' => 1, 'pembeli' => 'yayan', 'penjualan_kode' => 'PK004', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 5, 'user_id' => 1, 'pembeli' => 'haikal', 'penjualan_kode' => 'PK005', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 6, 'user_id' => 1, 'pembeli' => 'wayu', 'penjualan_kode' => 'PK006', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 7, 'user_id' => 1, 'pembeli' => 'dafa', 'penjualan_kode' => 'PK007', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 8, 'user_id' => 1, 'pembeli' => 'satria', 'penjualan_kode' => 'PK008', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 9, 'user_id' => 1, 'pembeli' => 'putri', 'penjualan_kode' => 'PK009', 'penjualan_tanggal' => now()],
            ['penjualan_id' => 10, 'user_id' => 1, 'pembeli' => 'neno', 'penjualan_kode' => 'PK010', 'penjualan_tanggal' => now()],
        ];

       
        DB::table('t_penjualan')->insert($data);
    }
}
    