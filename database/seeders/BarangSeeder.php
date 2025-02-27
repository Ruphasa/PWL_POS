<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => 1, 'barang_kode' => 'B001', 'barang_nama' => 'Barang 1', 'harga_beli' => 10000, 'harga_jual' => 15000],
            ['kategori_id' => 1, 'barang_kode' => 'B002', 'barang_nama' => 'Barang 2', 'harga_beli' => 20000, 'harga_jual' => 25000],
            ['kategori_id' => 1, 'barang_kode' => 'B003', 'barang_nama' => 'Barang 3', 'harga_beli' => 30000, 'harga_jual' => 35000],
            ['kategori_id' => 1, 'barang_kode' => 'B004', 'barang_nama' => 'Barang 4', 'harga_beli' => 40000, 'harga_jual' => 45000],
            ['kategori_id' => 1, 'barang_kode' => 'B005', 'barang_nama' => 'Barang 5', 'harga_beli' => 50000, 'harga_jual' => 55000],
            ['kategori_id' => 2, 'barang_kode' => 'B006', 'barang_nama' => 'Barang 6', 'harga_beli' => 60000, 'harga_jual' => 65000],
            ['kategori_id' => 2, 'barang_kode' => 'B007', 'barang_nama' => 'Barang 7', 'harga_beli' => 70000, 'harga_jual' => 75000],
            ['kategori_id' => 2, 'barang_kode' => 'B008', 'barang_nama' => 'Barang 8', 'harga_beli' => 80000, 'harga_jual' => 85000],
            ['kategori_id' => 2, 'barang_kode' => 'B009', 'barang_nama' => 'Barang 9', 'harga_beli' => 90000, 'harga_jual' => 95000],
            ['kategori_id' => 2, 'barang_kode' => 'B010', 'barang_nama' => 'Barang 10', 'harga_beli' => 100000, 'harga_jual' => 105000],
            ['kategori_id' => 3, 'barang_kode' => 'B011', 'barang_nama' => 'Barang 11', 'harga_beli' => 110000, 'harga_jual' => 115000],
            ['kategori_id' => 3, 'barang_kode' => 'B012', 'barang_nama' => 'Barang 12', 'harga_beli' => 120000, 'harga_jual' => 125000],
            ['kategori_id' => 3, 'barang_kode' => 'B013', 'barang_nama' => 'Barang 13', 'harga_beli' => 130000, 'harga_jual' => 135000],
            ['kategori_id' => 3, 'barang_kode' => 'B014', 'barang_nama' => 'Barang 14', 'harga_beli' => 140000, 'harga_jual' => 145000],
            ['kategori_id' => 3, 'barang_kode' => 'B015', 'barang_nama' => 'Barang 15', 'harga_beli' => 150000, 'harga_jual' => 155000]
        ];
        DB::table('m_barang')->insert($data);
    }
}
