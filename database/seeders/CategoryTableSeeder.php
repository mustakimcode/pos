<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Satuan;
use App\Models\User;
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = array(
            "MAKANAN", "MINUMAN", "ETHICAL", "ALKES", "TUBUH", "PERAWATAN", "KONTRASEPSI", "KOSMETIK", "WANITA", "OTC", "SUPLEMEN", "PENCERNAAN", "PREKURSOR"
        );


        foreach ($categories as $key => $categorie) {
            # code...
            Kategori::query()->updateOrCreate(
                ['name' => $categorie]
            );
        }
    }
}
