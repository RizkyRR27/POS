<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'barang_kode' => 'BK01', 'barang_nama' => 'mmajicjer', 'harga_beli' => 500000, 'harga_jual' => 6000000, 'kategori_id' => 2],
            ['barang_id' => 2, 'barang_kode' => 'BK02', 'barang_nama' => 'Handphone', 'harga_beli' => 300000, 'harga_jual' => 3500000, 'kategori_id' => 2],
            ['barang_id' => 3, 'barang_kode' => 'BK03', 'barang_nama' => 'civic', 'harga_beli' => 5000000, 'harga_jual' => 75000, 'kategori_id' => 3],
            ['barang_id' => 4, 'barang_kode' => 'BK04', 'barang_nama' => 'Sayur', 'harga_beli' => 15000, 'harga_jual' => 200000, 'kategori_id' => 1],
            ['barang_id' => 5, 'barang_kode' => 'BK05', 'barang_nama' => 'Nasi Padang', 'harga_beli' => 25000, 'harga_jual' => 35000, 'kategori_id' => 1],
            ['barang_id' => 6, 'barang_kode' => 'BK06', 'barang_nama' => 'supra', 'harga_beli' => 50000, 'harga_jual' => 10000, 'kategori_id' => 3],
            ['barang_id' => 7, 'barang_kode' => 'BK07', 'barang_nama' => 'meja', 'harga_beli' => 2000000, 'harga_jual' => 300000, 'kategori_id' => 5],
            ['barang_id' => 8, 'barang_kode' => 'BK08', 'barang_nama' => 'lemari', 'harga_beli' => 400000, 'harga_jual' => 500000, 'kategori_id' => 5],
            ['barang_id' => 9, 'barang_kode' => 'BK09', 'barang_nama' => 'Palu', 'harga_beli' => 100000, 'harga_jual' => 150000, 'kategori_id' => 4],
            ['barang_id' => 10, 'barang_kode' => 'BK10', 'barang_nama' => 'Baut', 'harga_beli' => 7000, 'harga_jual' => 12000, 'kategori_id' => 4],
        ];
        DB::table('m_barang')->insert($data);
    }
    }

