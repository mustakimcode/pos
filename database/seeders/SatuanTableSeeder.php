<?php

namespace Database\Seeders;

use App\Models\Satuan;
use App\Models\User;
use Illuminate\Database\Seeder;

class SatuanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $satuans = array(
            "PCS", "CAN", "BTL", "PACK", "AMPUL", "VIAL", "TUBE", "POT", "STRIP", "TAB", "BOX", "KAPSUL", "SACH", "PCK", "POUCH", "BAR"
        );
        foreach ($satuans as $key => $satuan) {
            # code...
            Satuan::query()->updateOrCreate(
                ['name' => $satuan]
            );
        }
    }
}
