<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i < 16; $i++) {
            # code...
            $data = [
                'barang_id' => $i,
                'supplier_id' => rand(1, 3),
                'user_id' => rand(1, 3),
                'stok_tanggal' => Carbon::now(),
                'stok_jumlah' => rand(1, 100),
            ];
            DB::table('t_stok')->insert($data);
        }
    }
}
