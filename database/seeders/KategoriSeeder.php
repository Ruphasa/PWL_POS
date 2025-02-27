<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_kode' => 'K001', 'kategori_nama' => 'Kategori 1'],
            ['kategori_kode' => 'K002', 'kategori_nama' => 'Kategori 2'],
            ['kategori_kode' => 'K003', 'kategori_nama' => 'Kategori 3'],
            ['kategori_kode' => 'K004', 'kategori_nama' => 'Kategori 4'],
            ['kategori_kode' => 'K005', 'kategori_nama' => 'Kategori 5'],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
