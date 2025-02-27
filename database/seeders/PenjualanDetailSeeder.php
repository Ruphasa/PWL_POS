<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 4; $i++) { 
            $data = [
                'detail_id' => $i,
                'penjualan_id' => $i,
                'barang_id' => rand(1, 15),
                'harga' => rand(10000, 100000),
                'jumlah' => rand(1, 100),
            ];
            DB::table('t_penjualan_detail')->insert($data);
        }
    }
}
