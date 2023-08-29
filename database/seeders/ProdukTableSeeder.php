<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProdukTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produk = [
            [
                "sku" => "",
                "name" => "DEMACOLIN TAB",
                "satuan" => "STRIP",
                "stok" => 15,
                "harga_beli" => "6500",
                "harga_jual" => "Rp8,000",
                "expired_date" => "7/2027",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "LODECON FORTE TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "4950",
                "harga_jual" => "Rp5,500",
                "expired_date" => "12/2024",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "ALPARA TAB",
                "satuan" => "STRIP",
                "stok" => 7,
                "harga_beli" => "9000",
                "harga_jual" => "Rp11,000",
                "expired_date" => "3/2026",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "FLUTAMOL KAPL",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "4230",
                "harga_jual" => "Rp4,700",
                "expired_date" => "1/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "GRANTUSIF TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "8640",
                "harga_jual" => "Rp7,000",
                "expired_date" => "4/2027",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "TERRA-F",
                "satuan" => "STRIP",
                "stok" => 0,
                "harga_beli" => "6480",
                "harga_jual" => "Rp7,200",
                "expired_date" => "-",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "FLUCADEX TAB",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "9000",
                "harga_jual" => "Rp11,000",
                "expired_date" => "6/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "DECOLSIN KAPS",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "2925",
                "harga_jual" => "Rp3,500",
                "expired_date" => "3/2026",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "TUZALOS KAPL",
                "satuan" => "STRIP",
                "stok" => 8,
                "harga_beli" => "4750.8",
                "harga_jual" => "Rp5,500",
                "expired_date" => "12/2024",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "STOP COLD",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "3100",
                "harga_jual" => "Rp4,000",
                "expired_date" => "3/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "PANADOL COLD & FLU",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "14500",
                "harga_jual" => "Rp17,000",
                "expired_date" => "2/2026",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "INZANA TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "1800",
                "harga_jual" => "Rp2,000",
                "expired_date" => "11/2024",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "BODREX FLU & BATUK PE TAB",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "2450",
                "harga_jual" => "Rp3,000",
                "expired_date" => "7/2026",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "BODREX FLU & BATUK BRDHK PE",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "2080",
                "harga_jual" => "Rp3,000",
                "expired_date" => "8/2024",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "ULTRAFLU EXTRA (HIJAU) TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "3100",
                "harga_jual" => "Rp3,500",
                "expired_date" => "5/2027",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "ULTAFLU PE TAB (PUTIH)",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "3100",
                "harga_jual" => "Rp3,600",
                "expired_date" => "5/2027",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "MIXAGRIP FLU & BATUK (HIJAU)",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,000",
                "expired_date" => "5/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "MIXAGRIP FLU (KUNING)",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,000",
                "expired_date" => "6/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "KONIDIN TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,000",
                "expired_date" => "2/2026",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "DECOLGEN FX TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "6466.75",
                "harga_jual" => "Rp7,000",
                "expired_date" => "1/2026",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "PARAMEX FLU & BATUK TAB ",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "2450",
                "harga_jual" => "Rp3,100",
                "expired_date" => "9/2023",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "PROCOLD FLU ",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "3500",
                "harga_jual" => "Rp4,000",
                "expired_date" => "5/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "PROCOLD FLU & BATUK",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "4000",
                "harga_jual" => "Rp4,500",
                "expired_date" => "12/2024",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "NOZA TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,000",
                "expired_date" => "4/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "DECOLGEN TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "2600",
                "harga_jual" => "Rp3,000",
                "expired_date" => "12/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "SANAFLU TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,000",
                "expired_date" => "5/2024",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "PARAMEX NYERI OTOT ",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2200",
                "harga_jual" => "Rp3,000",
                "expired_date" => "10/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PAMOL TAB",
                "satuan" => "STRIP",
                "stok" => 8,
                "harga_beli" => "10233",
                "harga_jual" => "Rp12,000",
                "expired_date" => "11/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PANADOL TAB (BIRU)",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "10500",
                "harga_jual" => "Rp12,500",
                "expired_date" => "8/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PANADOL EXTRA TAB (MERAH)",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "12700",
                "harga_jual" => "Rp14,600",
                "expired_date" => "4/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "DUMIN 500MG TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "7150",
                "harga_jual" => "Rp8,000",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MIRASIC 500MG TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "4500",
                "harga_jual" => "Rp5,500",
                "expired_date" => "8/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SANMOL FORTE TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,000",
                "expired_date" => "10/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SUMAGESIC TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2450",
                "harga_jual" => "Rp3,000",
                "expired_date" => "3/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SANMOL 500 MG TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "2218",
                "harga_jual" => "Rp2,500",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PUYER CAP WALANG KERIK",
                "satuan" => "SACH",
                "stok" => 48,
                "harga_beli" => "658.3",
                "harga_jual" => "Rp1,000",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PUDER CAP 38 SAKIT KEPALA",
                "satuan" => "SACH",
                "stok" => 24,
                "harga_beli" => "658.3",
                "harga_jual" => "Rp1,000",
                "expired_date" => "12/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BODREX TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "4400",
                "harga_jual" => "Rp5,000",
                "expired_date" => "3/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "INZA TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,000",
                "expired_date" => "11/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BRONCHIFAR PLUS TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "5580",
                "harga_jual" => "Rp6,200",
                "expired_date" => "4/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BISOLVON TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "24650.2",
                "harga_jual" => "Rp29,500",
                "expired_date" => "1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "POLDAN MIG TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "3500",
                "harga_jual" => "Rp4,000",
                "expired_date" => "8/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OSKADON SP ",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "1800",
                "harga_jual" => "Rp3,000",
                "expired_date" => "3/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "NEO RHEUMACYL TAB",
                "satuan" => "STRIP",
                "stok" => 46,
                "harga_beli" => "4950",
                "harga_jual" => "Rp6,000",
                "expired_date" => "3/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OSKADON TAB (BIRU)",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "1800",
                "harga_jual" => "Rp2,000",
                "expired_date" => "2/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PARAMEX TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2200",
                "harga_jual" => "Rp2,500",
                "expired_date" => "12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SARIDON TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "4000",
                "harga_jual" => "Rp4,500",
                "expired_date" => "7/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BIOGESIC TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2450",
                "harga_jual" => "Rp3,000",
                "expired_date" => "9/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PUYER BINTANG TOEDJOE",
                "satuan" => "SACH",
                "stok" => 120,
                "harga_beli" => "658.3",
                "harga_jual" => "Rp1,000",
                "expired_date" => "5/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BODREX MIGRA TAB",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "2450",
                "harga_jual" => "Rp3,000",
                "expired_date" => "7/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BODREX EXTRA TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2200",
                "harga_jual" => "Rp5,000",
                "expired_date" => "2/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "NEO NAPACIN TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2850",
                "harga_jual" => "Rp3,000",
                "expired_date" => "7/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MUCOHEXIN TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "2600",
                "harga_jual" => "Rp3,000",
                "expired_date" => "12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MEXTRIL TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,000",
                "expired_date" => "2/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOMIX PEPPERMINT",
                "satuan" => "SACH",
                "stok" => 15,
                "harga_beli" => "2250",
                "harga_jual" => "Rp2,500",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOMIX JERUK NIPIS",
                "satuan" => "SACH",
                "stok" => 15,
                "harga_beli" => "2250",
                "harga_jual" => "Rp2,500",
                "expired_date" => "2/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOMIX KIDS STRW ",
                "satuan" => "SACH",
                "stok" => 5,
                "harga_beli" => "1400",
                "harga_jual" => "Rp2,000",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOMIX KIDS MADU",
                "satuan" => "SACH",
                "stok" => 11,
                "harga_beli" => "1350",
                "harga_jual" => "Rp2,000",
                "expired_date" => "4/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ORPHEN TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "1350",
                "harga_jual" => "Rp2,000",
                "expired_date" => "9/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "INSOVEN KAPS",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "5600",
                "harga_jual" => "Rp6,500",
                "expired_date" => "5/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BODREXIN TAB",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "3500",
                "harga_jual" => "Rp4,000",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "INHALER LANG",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "6752.8",
                "harga_jual" => "Rp8,000",
                "expired_date" => "11/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK ANGIN CARE (ROLL ON)",
                "satuan" => "BTL",
                "stok" => 12,
                "harga_beli" => "11000",
                "harga_jual" => "Rp12,700",
                "expired_date" => "7/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PLOSSA HIJAU",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "11100",
                "harga_jual" => "Rp13,000",
                "expired_date" => "12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PLOSSA BIRU",
                "satuan" => "PCS",
                "stok" => 5,
                "harga_beli" => "11100",
                "harga_jual" => "Rp13,000",
                "expired_date" => "12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PLOSSA HOT MERAH",
                "satuan" => "PCS",
                "stok" => 6,
                "harga_beli" => "11100",
                "harga_jual" => "Rp13,000",
                "expired_date" => "11/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE PRESS RELAX STRONG",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "11250",
                "harga_jual" => "Rp13,000",
                "expired_date" => "3/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE LAVENDER",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "12832",
                "harga_jual" => "Rp15,000",
                "expired_date" => "3/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE STRONG",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "12832",
                "harga_jual" => "Rp15,000",
                "expired_date" => "5/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE MKP",
                "satuan" => "PCS",
                "stok" => 3,
                "harga_beli" => "12832",
                "harga_jual" => "Rp15,000",
                "expired_date" => "8/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE GREEN TEA",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "12832",
                "harga_jual" => "Rp15,000",
                "expired_date" => "1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE CITRUS",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "12832",
                "harga_jual" => "Rp15,000",
                "expired_date" => "8/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE SPLASH FRUITY",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "12832",
                "harga_jual" => "Rp15,000",
                "expired_date" => "1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SAFE CARE ROLL ON",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "15150.4",
                "harga_jual" => "Rp17,500",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PURE KIDS INHALANT",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "49810",
                "harga_jual" => "Rp58,600",
                "expired_date" => "3/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "COPAL CHEST RUB",
                "satuan" => "TUBE",
                "stok" => 3,
                "harga_beli" => "15540",
                "harga_jual" => "Rp18,000",
                "expired_date" => "2/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK ANGIN LANG ",
                "satuan" => "PCK",
                "stok" => 1,
                "harga_beli" => "17760",
                "harga_jual" => "Rp20,500",
                "expired_date" => "12/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CESSA FEDROP (MERAH)",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28860",
                "harga_jual" => "Rp33,000",
                "expired_date" => "5/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SIRUP INDRA 10 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "3180.2",
                "harga_jual" => "Rp4,000",
                "expired_date" => "1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CESSA HAPPY NOSE (BIRU)",
                "satuan" => "BTL",
                "stok" => 9,
                "harga_beli" => "28860",
                "harga_jual" => "Rp34,000",
                "expired_date" => "5/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ROHTO COOL",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "16900",
                "harga_jual" => "Rp20,000",
                "expired_date" => "3/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "INSTO DRY EYES 7.5ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "13200",
                "harga_jual" => "Rp15,000",
                "expired_date" => "1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "INSTO REG 7.5ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "14100",
                "harga_jual" => "Rp14,700",
                "expired_date" => "12/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "INSTO REG 15ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "19100",
                "harga_jual" => "Rp22,200",
                "expired_date" => "5/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ROHTO TETES MATA (PUTIH)",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "11000",
                "harga_jual" => "Rp13,000",
                "expired_date" => "12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CENDO EYEFRESH ",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "34650",
                "harga_jual" => "Rp38,500",
                "expired_date" => "12/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CENDO EYEFRESH MDS",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "25470",
                "harga_jual" => "Rp28,300",
                "expired_date" => "11/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CENDO CENFRESH MDS",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "25560",
                "harga_jual" => "Rp28,400",
                "expired_date" => "9/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "DEGIROL TAB",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "12800",
                "harga_jual" => "Rp14,500",
                "expired_date" => "5/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BETADINE GARLE 100 ML ",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "22500",
                "harga_jual" => "Rp26,000",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BETADINE GARGLE 190 ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "36630",
                "harga_jual" => "Rp40,700",
                "expired_date" => "12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LISTERINE COOL MINT 100 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "8380.5",
                "harga_jual" => "Rp10,000",
                "expired_date" => "12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LISTERINE COOL MINT 250 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "23400",
                "harga_jual" => "Rp27,000",
                "expired_date" => "12/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ENKASARI HERBAL ",
                "satuan" => "BTL",
                "stok" => 5,
                "harga_beli" => "20962",
                "harga_jual" => "Rp22,000",
                "expired_date" => "12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GENTIANT VIOLET",
                "satuan" => "BTL",
                "stok" => 24,
                "harga_beli" => "3321.7",
                "harga_jual" => "Rp4,000",
                "expired_date" => "4/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ASTRIA 4MG",
                "satuan" => "STRIP",
                "stok" => 0,
                "harga_beli" => "39600",
                "harga_jual" => "Rp44,000",
                "expired_date" => "-",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "ENERVON C 4'S TAB",
                "satuan" => "STRIP",
                "stok" => 23,
                "harga_beli" => "4566.4",
                "harga_jual" => "Rp5,500",
                "expired_date" => "8/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "ENERVON C 30'S",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "33624",
                "harga_jual" => "Rp39,000",
                "expired_date" => "4/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "REDOXON TRIPLE ACTION 15'S",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "43068",
                "harga_jual" => "Rp49,500",
                "expired_date" => "5/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "CDR 10'S",
                "satuan" => "TUBE",
                "stok" => 0,
                "harga_beli" => "46298",
                "harga_jual" => "Rp53,500",
                "expired_date" => "-",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "PHARMATON FORMULA ",
                "satuan" => "STRIP",
                "stok" => 8,
                "harga_beli" => "24208",
                "harga_jual" => "Rp28,000",
                "expired_date" => "8/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "IMBOOST FORCE TAB",
                "satuan" => "TAB",
                "stok" => 20,
                "harga_beli" => "7204",
                "harga_jual" => "Rp8,800",
                "expired_date" => "11/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "IMBOOST TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "35453.4",
                "harga_jual" => "Rp41,000",
                "expired_date" => "1/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "NEUROBION 1000 MG TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "24350",
                "harga_jual" => "Rp28,000",
                "expired_date" => "8/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "NEUROBION 5000 MG TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "42500",
                "harga_jual" => "Rp49,000",
                "expired_date" => "8/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "CEREBROVIT X-CEL",
                "satuan" => "BOX",
                "stok" => 3,
                "harga_beli" => "18083",
                "harga_jual" => "Rp20,000",
                "expired_date" => "11/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "THERAGRAN-M ",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "22000",
                "harga_jual" => "Rp25,300",
                "expired_date" => "11/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIT D3 IPI",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "10999",
                "harga_jual" => "Rp13,000",
                "expired_date" => "5/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "ZINC PLUS IPI",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "8499.74",
                "harga_jual" => "Rp10,000",
                "expired_date" => "7/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIT B1 IPI",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "5045.45",
                "harga_jual" => "Rp6,000",
                "expired_date" => "5/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIT B12 IPI",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "5045.45",
                "harga_jual" => "Rp6,000",
                "expired_date" => "10/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIT A IPI",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "5045.45",
                "harga_jual" => "Rp6,000",
                "expired_date" => "1/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIT C IPI",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "6100",
                "harga_jual" => "Rp7,000",
                "expired_date" => "-",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIT B KOMPLEX IPI",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "6000",
                "harga_jual" => "Rp6,500",
                "expired_date" => "-",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "XONCE ORANGE TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "1980",
                "harga_jual" => "Rp2,300",
                "expired_date" => "9/2023",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VITACIMIN LEMON TAB",
                "satuan" => "STRIP",
                "stok" => 27,
                "harga_beli" => "1576.2",
                "harga_jual" => "Rp2,000",
                "expired_date" => "7/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "WELMOVE ",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "15567.7",
                "harga_jual" => "Rp19,000",
                "expired_date" => "7/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "MY WELL VIT C+ZN",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "5661",
                "harga_jual" => "Rp6,600",
                "expired_date" => "5/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VITALONG C KAPS",
                "satuan" => "STRIP",
                "stok" => 24,
                "harga_beli" => "5550",
                "harga_jual" => "Rp6,500",
                "expired_date" => "4/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "RENOVIT @4KAPL",
                "satuan" => "STRIP",
                "stok" => 21,
                "harga_beli" => "9990",
                "harga_jual" => "Rp11,500",
                "expired_date" => "1/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "RENOVIT GOLD @4KPL",
                "satuan" => "STRIP",
                "stok" => 23,
                "harga_beli" => "11510.7",
                "harga_jual" => "Rp13,200",
                "expired_date" => "2/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "HOLISTICARE ESTER C 30'S ",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "45343.5",
                "harga_jual" => "Rp52,300",
                "expired_date" => "8/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "HOLISTICARE ESTER C 4'S ",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "6271.5",
                "harga_jual" => "Rp7,200",
                "expired_date" => "1/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "FATIGON SPIRIT 6'S",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "8775",
                "harga_jual" => "Rp10,091",
                "expired_date" => "3/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "HEMAVITON ACTION",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "6250",
                "harga_jual" => "Rp7,188",
                "expired_date" => "3/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "HEMAVITON STAMINA PLUS",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "6025",
                "harga_jual" => "Rp6,929",
                "expired_date" => "5/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "BECOM C ",
                "satuan" => "STRIP",
                "stok" => 15,
                "harga_beli" => "19440",
                "harga_jual" => "Rp23,000",
                "expired_date" => "5/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "BECOM ZET",
                "satuan" => "STRIP",
                "stok" => 14,
                "harga_beli" => "26122.5",
                "harga_jual" => "Rp31,000",
                "expired_date" => "3/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VERMOX TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "19083",
                "harga_jual" => "Rp22,000",
                "expired_date" => "9/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "COMBANTRIN SUSP",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "17525",
                "harga_jual" => "Rp20,100",
                "expired_date" => "4/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "COMBANTRIN 250 MG TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "17280",
                "harga_jual" => "Rp19,200",
                "expired_date" => "6/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "GUANISTREP SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "7000",
                "harga_jual" => "Rp8,500",
                "expired_date" => "2/2027",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "DIAPET ANAK SACH",
                "satuan" => "SACH",
                "stok" => 6,
                "harga_beli" => "1665",
                "harga_jual" => "Rp2,000",
                "expired_date" => "3/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "PHAROLIT",
                "satuan" => "SACH",
                "stok" => 10,
                "harga_beli" => "1800",
                "harga_jual" => "Rp2,000",
                "expired_date" => "11/2023",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "DIAPET KAPS 10'S",
                "satuan" => "STRIP",
                "stok" => 12,
                "harga_beli" => "4597.3",
                "harga_jual" => "Rp5,500",
                "expired_date" => "12/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "NORIT",
                "satuan" => "PCK",
                "stok" => 7,
                "harga_beli" => "14615",
                "harga_jual" => "Rp17,000",
                "expired_date" => "5/2028",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "DIAPET NR CAPS 4'S",
                "satuan" => "STRIP",
                "stok" => 24,
                "harga_beli" => "2748.4",
                "harga_jual" => "Rp3,500",
                "expired_date" => "9/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "PROMAG HERBAL (GAZERO)",
                "satuan" => "SACH",
                "stok" => 18,
                "harga_beli" => "2200",
                "harga_jual" => "Rp3,000",
                "expired_date" => "12/2024",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "NEW DIATABS ",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "3000",
                "harga_jual" => "Rp4,000",
                "expired_date" => "6/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "ENTROSTOP TAB",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "7500",
                "harga_jual" => "Rp8,000",
                "expired_date" => "4/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "PROMAG TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "6983.3",
                "harga_jual" => "Rp8,200",
                "expired_date" => "8/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "MYLANTA TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "7900",
                "harga_jual" => "Rp9,000",
                "expired_date" => "1/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "ANTASIDA DOEN TAB",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "2000",
                "harga_jual" => "Rp2,500",
                "expired_date" => "4/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "TRIOCID",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "3000",
                "harga_jual" => "Rp3,500",
                "expired_date" => "6/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "SANMAG SYR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28900",
                "harga_jual" => "Rp33,500",
                "expired_date" => "1/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "HUFAMAG PLUS SYR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "8800",
                "harga_jual" => "Rp10,200",
                "expired_date" => "10/2024",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "ANTIMO TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "4950",
                "harga_jual" => "Rp6,000",
                "expired_date" => "4/2027",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "MAAGTRAL TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "4500",
                "harga_jual" => "Rp5,500",
                "expired_date" => "5/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "MYLANTA SYR 150 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "38500",
                "harga_jual" => "Rp44,500",
                "expired_date" => "5/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "MYLANTA SYR 50 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "14500",
                "harga_jual" => "Rp17,000",
                "expired_date" => "1/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "PROMAG SUSP 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11000",
                "harga_jual" => "Rp44,500",
                "expired_date" => "1/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "POLYSILANE SUSP 180ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "32222",
                "harga_jual" => "Rp35,500",
                "expired_date" => "10/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "POLYSILANE SUSP 100ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "21900",
                "harga_jual" => "Rp24,100",
                "expired_date" => "-",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "AMBEVEN ",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "16317",
                "harga_jual" => "Rp18,800",
                "expired_date" => "12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "DIMENHYDRINATE TAB",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,500",
                "expired_date" => "10/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MICROLAX GEL",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "21000",
                "harga_jual" => "Rp24,000",
                "expired_date" => "6/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ACTIFED COUGH SYR (MERAH)",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "61479.3",
                "harga_jual" => "Rp68,000",
                "expired_date" => "10/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BODREXIN PILEK ALERGI SYR PE",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11400",
                "harga_jual" => "Rp12,700",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ALLERIN expired_date SYR 120ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "21000",
                "harga_jual" => "Rp24,200",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HUFAGRIP SYR (KUNING)",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "21998.6",
                "harga_jual" => "Rp25,500",
                "expired_date" => "10/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HUFAGRIP BP SYR (HIJAU)",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "19744",
                "harga_jual" => "Rp20,200",
                "expired_date" => "12/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HUFAGRIP PILEK SYR (BIRU)",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15444.3",
                "harga_jual" => "Rp17,200",
                "expired_date" => "10/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ZENIREX SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "7000",
                "harga_jual" => "Rp8,000",
                "expired_date" => "2/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FASIDOL DROP",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11700",
                "harga_jual" => "Rp13,000",
                "expired_date" => "4/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANAKONIDIN SYR 30 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "7500",
                "harga_jual" => "Rp8,700",
                "expired_date" => "3/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANAKONIDIN SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11700",
                "harga_jual" => "Rp13,700",
                "expired_date" => "4/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "VICKS FORMULA 44 27 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "8800",
                "harga_jual" => "Rp10,200",
                "expired_date" => "8/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "VICKS FORMULA 44 ANAK 27ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "9700",
                "harga_jual" => "Rp11,200",
                "expired_date" => "1/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOOL FEVER ADULT (DWS)",
                "satuan" => "PCS",
                "stok" => 0,
                "harga_beli" => "6678.5",
                "harga_jual" => "Rp9,000",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOOL FEVER ANAK-ANAK",
                "satuan" => "PCS",
                "stok" => 7,
                "harga_beli" => "6068",
                "harga_jual" => "Rp7,000",
                "expired_date" => "2/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOOL FEVER BABY",
                "satuan" => "PCS",
                "stok" => 12,
                "harga_beli" => "4884",
                "harga_jual" => "Rp6,000",
                "expired_date" => "12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BYE BYE FEVER BABY",
                "satuan" => "PCS",
                "stok" => 27,
                "harga_beli" => "6439.6",
                "harga_jual" => "Rp7,000",
                "expired_date" => "11/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BYE BYE FEVER ANAK",
                "satuan" => "PCS",
                "stok" => 18,
                "harga_beli" => "9167.4",
                "harga_jual" => "Rp11,500",
                "expired_date" => "12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TEMPRA SYR 30 ML ANGGUR",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "26500",
                "harga_jual" => "Rp32,000",
                "expired_date" => "9/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TEMPRA FORTE SYR 60 ML ORANGE",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "49995.5",
                "harga_jual" => "Rp55,000",
                "expired_date" => "3/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TEMPRA DROPS 15ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "53250",
                "harga_jual" => "Rp57,500",
                "expired_date" => "3/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "VICKS FORMULA 44 SYR 54ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "16700",
                "harga_jual" => "Rp19,200",
                "expired_date" => "10/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SANMOL SYRUP",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "19300",
                "harga_jual" => "Rp21,500",
                "expired_date" => "6/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SANMOL FORTE SYR",
                "satuan" => "BTL",
                "stok" => 5,
                "harga_beli" => "35100",
                "harga_jual" => "Rp39,000",
                "expired_date" => "5/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TREMENZA SYR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "25499.25",
                "harga_jual" => "Rp31,000",
                "expired_date" => "6/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ACTIFED expired_date SYR (HIJAU)",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "61479.35",
                "harga_jual" => "Rp68,000",
                "expired_date" => "10/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ACTIFED SYRUP (ORANGE)",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "61479.35",
                "harga_jual" => "Rp68,000",
                "expired_date" => "8/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "WOODS expired_date 100ML SYR",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "28000",
                "harga_jual" => "Rp32,200",
                "expired_date" => "6/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PARATUSIN SYR",
                "satuan" => "BTL",
                "stok" => 5,
                "harga_beli" => "38350",
                "harga_jual" => "Rp44,000",
                "expired_date" => "2/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "IKADRYL SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15800",
                "harga_jual" => "Rp18,200",
                "expired_date" => "8/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "IKADRYL SYR 100ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "20600",
                "harga_jual" => "Rp24,000",
                "expired_date" => "4/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "IKADRYL FLU SYR 60ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "18000",
                "harga_jual" => "Rp20,000",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BISOLVON EXTRA SYR 125ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "80500",
                "harga_jual" => "Rp89,000",
                "expired_date" => "12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BISOLVON EXTRA SYR 60ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "49500",
                "harga_jual" => "Rp55,000",
                "expired_date" => "7/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BISOLVON KIDS SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "43800",
                "harga_jual" => "Rp48,200",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "DEMACOLIN SYR",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "19440",
                "harga_jual" => "Rp23,500",
                "expired_date" => "9/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANAKONIDIN OBH SYR 30 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "7500",
                "harga_jual" => "Rp9,000",
                "expired_date" => "5/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANAKONIDIN OBH SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "12700",
                "harga_jual" => "Rp14,700",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "COPARCETIN KIDS SYR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "7450",
                "harga_jual" => "Rp9,000",
                "expired_date" => "4/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "VICKS FORMULA 44 SYR 100 ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "28170",
                "harga_jual" => "Rp31,300",
                "expired_date" => "11/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PIMTRAKOL SYR LEMON ",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "14000",
                "harga_jual" => "Rp15,500",
                "expired_date" => "6/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PIMTRAKOL SYR CHERRY",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15500",
                "harga_jual" => "Rp17,000",
                "expired_date" => "6/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TERMOREX PLUS SYR 30 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "8800",
                "harga_jual" => "Rp10,000",
                "expired_date" => "12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX ATT SYR 100ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "17500",
                "harga_jual" => "Rp20,000",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX ATT SYR 60ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "14100",
                "harga_jual" => "Rp15,500",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX COUGH&COLD SYR 100ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "17500",
                "harga_jual" => "Rp19,500",
                "expired_date" => "4/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX COUGH&COLD SYR 60ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "13200",
                "harga_jual" => "Rp15,000",
                "expired_date" => "2/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX COUGH&COLD SYR 30ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "7900",
                "harga_jual" => "Rp10,000",
                "expired_date" => "12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX M&E SYR 60ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "14400",
                "harga_jual" => "Rp16,000",
                "expired_date" => "5/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX M&ESYR 30ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "7900",
                "harga_jual" => "Rp8,700",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "COUNTERPAIN 30GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "42231",
                "harga_jual" => "Rp49,684",
                "expired_date" => "11/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "COUNTERPAIN 120GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "104229",
                "harga_jual" => "Rp120,000",
                "expired_date" => "5/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PEDITOX ",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "8800",
                "harga_jual" => "Rp10,200",
                "expired_date" => "4/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR STRONG TUBE 120G",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "31080",
                "harga_jual" => "Rp32,000",
                "expired_date" => "5/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR AROMATHERAPY TUBE 60G",
                "satuan" => "TUBE",
                "stok" => 3,
                "harga_beli" => "18648",
                "harga_jual" => "Rp24,200",
                "expired_date" => "5/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR AROMATHERAPY TUBE 120G",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "31080",
                "harga_jual" => "Rp36,000",
                "expired_date" => "8/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR TUBE 60G",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "18648",
                "harga_jual" => "Rp22,400",
                "expired_date" => "4/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR TUBE 120G",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "31080",
                "harga_jual" => "Rp36,000",
                "expired_date" => "1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KUTILOS",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "24500",
                "harga_jual" => "Rp28,200",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KALPANAX K CR 5GR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "14150",
                "harga_jual" => "Rp16,300",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KALPANAX K SALEP",
                "satuan" => "POT",
                "stok" => 1,
                "harga_beli" => "7000",
                "harga_jual" => "Rp8,500",
                "expired_date" => "8/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR STRONG BTL 120G",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "27861",
                "harga_jual" => "Rp36,000",
                "expired_date" => "5/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR AROMATHERAPY BTL 120GR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "31080",
                "harga_jual" => "Rp36,000",
                "expired_date" => "5/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HANSAPLAST KOYO HANGAT",
                "satuan" => "PCS",
                "stok" => 20,
                "harga_beli" => "6774.3",
                "harga_jual" => "Rp8,000",
                "expired_date" => "5/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOYO CABE",
                "satuan" => "PCS",
                "stok" => 16,
                "harga_beli" => "10125",
                "harga_jual" => "Rp11,500",
                "expired_date" => "2/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HANSAPLAST KOYO PANAS",
                "satuan" => "PCS",
                "stok" => 10,
                "harga_beli" => "6774.3",
                "harga_jual" => "Rp8,000",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SALONPAS KOYO",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "5850",
                "harga_jual" => "Rp7,000",
                "expired_date" => "3/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SALONPAS KOYO HOT",
                "satuan" => "PCS",
                "stok" => 8,
                "harga_beli" => "5752",
                "harga_jual" => "Rp7,000",
                "expired_date" => "1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PAGODA SALEP",
                "satuan" => "POT",
                "stok" => 13,
                "harga_beli" => "6427.5",
                "harga_jual" => "Rp7,000",
                "expired_date" => "8/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TJING TJAU BALSEM 36GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "18737.8",
                "harga_jual" => "Rp22,000",
                "expired_date" => "5/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TJING TJAU BALSEM 20GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "12236",
                "harga_jual" => "Rp14,000",
                "expired_date" => "11/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SALEP 88",
                "satuan" => "POT",
                "stok" => 2,
                "harga_beli" => "10500",
                "harga_jual" => "Rp12,000",
                "expired_date" => "12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GPU KRIM 250G",
                "satuan" => "POT ",
                "stok" => 1,
                "harga_beli" => "25067.8",
                "harga_jual" => "Rp29,000",
                "expired_date" => "4/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GPU KRIM 150GR",
                "satuan" => "POT",
                "stok" => 1,
                "harga_beli" => "16187.8",
                "harga_jual" => "Rp19,000",
                "expired_date" => "3/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CANESTEN CR 10GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "40800",
                "harga_jual" => "Rp47,000",
                "expired_date" => "3/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "NEO ULTRASILINE CR ",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "10500",
                "harga_jual" => "Rp13,000",
                "expired_date" => "2/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BEDAK SALICYL CAP GAJAH 100G",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "7316",
                "harga_jual" => "Rp8,500",
                "expired_date" => "10/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HEROCYN BABY POWDER 100GR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "7548",
                "harga_jual" => "Rp8,700",
                "expired_date" => "12/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HEROCYN BABY POWDER 200GR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "12099",
                "harga_jual" => "Rp14,000",
                "expired_date" => "7/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CALADINE POWDER 100GR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "14652",
                "harga_jual" => "Rp17,000",
                "expired_date" => "7/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CALADINE POWDER 60GR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "10434",
                "harga_jual" => "Rp12,000",
                "expired_date" => "7/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HEROCYN 85GR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11322",
                "harga_jual" => "Rp13,000",
                "expired_date" => "5/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SALONPAS JET SPRAY",
                "satuan" => "CAN",
                "stok" => 1,
                "harga_beli" => "67950",
                "harga_jual" => "Rp75,500",
                "expired_date" => "10/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "YB AEROSOL ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "113850",
                "harga_jual" => "Rp126,500",
                "expired_date" => "11/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BALSEM LANG 40 GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "15725",
                "harga_jual" => "Rp18,000",
                "expired_date" => "12/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BALSEM LANG 20GR",
                "satuan" => "POT",
                "stok" => 6,
                "harga_beli" => "8523.8",
                "harga_jual" => "Rp10,500",
                "expired_date" => "7/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BALSEM LANG 10 GR",
                "satuan" => "POT",
                "stok" => 2,
                "harga_beli" => "4950",
                "harga_jual" => "Rp5,700",
                "expired_date" => "6/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GELIGA BALSEM OTOT 40GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "15962.5",
                "harga_jual" => "Rp18,000",
                "expired_date" => "5/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GELIGA BALSEM OTOT 20GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "8048",
                "harga_jual" => "Rp9,300",
                "expired_date" => "5/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GELIGA BALSEM OTOT 10GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "4690",
                "harga_jual" => "Rp5,500",
                "expired_date" => "5/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GPU MINYAK URUT SEREH 30ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "14705",
                "harga_jual" => "Rp17,300",
                "expired_date" => "4/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GPU MINYAK URUT SEREH 60ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "16150",
                "harga_jual" => "Rp19,000",
                "expired_date" => "5/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BALPIRIK EXTRA STRONG 20GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "10499.5",
                "harga_jual" => "Rp12,000",
                "expired_date" => "1/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "NOSIB CR",
                "satuan" => "POT",
                "stok" => 1,
                "harga_beli" => "11100",
                "harga_jual" => "Rp12,800",
                "expired_date" => "11/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LION HERO BALSEM",
                "satuan" => "POT",
                "stok" => 1,
                "harga_beli" => "12210",
                "harga_jual" => "Rp14,000",
                "expired_date" => "9/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TELON LANG PLUS 30 ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "9064.6",
                "harga_jual" => "Rp12,000",
                "expired_date" => "5/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MEDICATED OIL 20ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "23310",
                "harga_jual" => "Rp28,000",
                "expired_date" => "4/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TELON LANG 30 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "10200",
                "harga_jual" => "Rp11,000",
                "expired_date" => "11/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MY BABY TELON PLIS LAVENDER 60ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15288",
                "harga_jual" => "Rp18,000",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MY BABY MINYAK TELON 150ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "32550.75",
                "harga_jual" => "Rp37,500",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK TAWON CC",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "21753",
                "harga_jual" => "Rp25,000",
                "expired_date" => "4/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK TAWON DD",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28490.3",
                "harga_jual" => "Rp33,000",
                "expired_date" => "10/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK TAWON EE",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "46176",
                "harga_jual" => "Rp53,000",
                "expired_date" => "2/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK TAWON FF",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "65231.3",
                "harga_jual" => "Rp75,000",
                "expired_date" => "11/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PARCOK 25 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "6438",
                "harga_jual" => "Rp7,500",
                "expired_date" => "4/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BAN LENG 50 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "26900",
                "harga_jual" => "Rp31,000",
                "expired_date" => "5/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK OTOT GELIGA 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "27269.3",
                "harga_jual" => "Rp31,500",
                "expired_date" => "5/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK OTOT GELIGA 30 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "13838.3",
                "harga_jual" => "Rp16,000",
                "expired_date" => "1/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK GANDAPURA 30 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "7030.34",
                "harga_jual" => "Rp8,000",
                "expired_date" => "2/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK GANDAPURA 60 ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "11932.5",
                "harga_jual" => "Rp14,000",
                "expired_date" => "",
                "category" => ""
            ],
            [
                "sku" => "",
                "name" => "MINYAK KAPAK 28 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "35739.8",
                "harga_jual" => "Rp41,000",
                "expired_date" => "1/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK KAPAK 14 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "20855.8",
                "harga_jual" => "Rp24,000",
                "expired_date" => "11/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK KAPAK 10 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "14850",
                "harga_jual" => "Rp17,000",
                "expired_date" => "4/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK KAPAK 5ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "9672.5",
                "harga_jual" => "Rp12,000",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK KAPPAK 3 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "5550",
                "harga_jual" => "Rp6,500",
                "expired_date" => "4/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK TELON CAP GAJAH 60 ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "15641",
                "harga_jual" => "Rp18,800",
                "expired_date" => "6/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK TELON CAP GAJAH 120ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "29936.7",
                "harga_jual" => "Rp34,500",
                "expired_date" => "3/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MKP CAP LANG 210ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "62992.5",
                "harga_jual" => "Rp76,500",
                "expired_date" => "5/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MKP CAP LANG 120ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "37920.8",
                "harga_jual" => "Rp44,500",
                "expired_date" => "4/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MKP CAP LANG 60ML",
                "satuan" => "BTL ",
                "stok" => 2,
                "harga_beli" => "15910.7",
                "harga_jual" => "Rp22,500",
                "expired_date" => "5/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MKP CAP LANG 30ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "9064.6",
                "harga_jual" => "Rp12,000",
                "expired_date" => "4/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "COUNTERPAIN COOL 15 GR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "22950",
                "harga_jual" => "Rp27,000",
                "expired_date" => "1/2023",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CURCUMA PLUS GROW STRAW 200ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "27417",
                "harga_jual" => "Rp31,500",
                "expired_date" => "12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CURCUMA PLUS SHARPY STRAW 60ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "14763",
                "harga_jual" => "Rp17,000",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CURCUMA PLUS SHARPY ORANGE 60ML ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "14763",
                "harga_jual" => "Rp17,000",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "APIALYS SYRUP",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "44500",
                "harga_jual" => "Rp51,200",
                "expired_date" => "2/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "APIALYS DROP",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "52500",
                "harga_jual" => "Rp63,000",
                "expired_date" => "-",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "ELKANA SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "26300",
                "harga_jual" => "Rp31,000",
                "expired_date" => "8/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "BIOLISIN SYR 60ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "14650",
                "harga_jual" => "Rp17,500",
                "expired_date" => "4/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "IMBOOST FORCE KIDS SYR 60 ML",
                "satuan" => "BTL ",
                "stok" => 2,
                "harga_beli" => "65212.5",
                "harga_jual" => "Rp75,000",
                "expired_date" => "4/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "IMBOOST KIDS SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "37185",
                "harga_jual" => "Rp43,000",
                "expired_date" => "5/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "CAVIPLEX SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "9415.2",
                "harga_jual" => "Rp11,000",
                "expired_date" => "1/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VITABUMIN SYR 130ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "56508",
                "harga_jual" => "Rp65,000",
                "expired_date" => "5/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "BIOLYSIN KIDS TAB STRAW",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15542",
                "harga_jual" => "Rp17,800",
                "expired_date" => "1/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "BIOLYSIN KIDS TAB ORANGE ",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15542",
                "harga_jual" => "Rp17,800",
                "expired_date" => "11/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "BIOLYSIN KIDS TAB ANGGUR ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15542",
                "harga_jual" => "Rp17,800",
                "expired_date" => "12/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "SAKATONIK ABC STRAW ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15542",
                "harga_jual" => "Rp17,500",
                "expired_date" => "11/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "SAKATONIK ABC ANTARIKSA",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15542",
                "harga_jual" => "Rp17,500",
                "expired_date" => "5/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "FITKOM TAB STRAW",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15540",
                "harga_jual" => "Rp18,000",
                "expired_date" => "2/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "FITKOM TAB ORANGE",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15540",
                "harga_jual" => "Rp18,000",
                "expired_date" => "12/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIDORAN SMART TAB STRAW",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "12050",
                "harga_jual" => "Rp14,000",
                "expired_date" => "6/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "SIRPLUS ANGGUR SYR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15540",
                "harga_jual" => "Rp18,000",
                "expired_date" => "1/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "SIRPLUS JERUK SYR",
                "satuan" => "BTL",
                "stok" => 5,
                "harga_beli" => "15540",
                "harga_jual" => "Rp18,000",
                "expired_date" => "1/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "SANGOBION KIDS SYR 100 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "43200",
                "harga_jual" => "Rp49,700",
                "expired_date" => "7/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "STREPSILS ORIGINAL ",
                "satuan" => "SACH",
                "stok" => 10,
                "harga_beli" => "10072.7",
                "harga_jual" => "Rp12,000",
                "expired_date" => "2/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "STREPSILS COOL",
                "satuan" => "SACH",
                "stok" => 10,
                "harga_beli" => "10072.7",
                "harga_jual" => "Rp12,000",
                "expired_date" => "12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "STREPSILS HONEY LEMON",
                "satuan" => "SACH",
                "stok" => 8,
                "harga_beli" => "10072.7",
                "harga_jual" => "Rp12,000",
                "expired_date" => "1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANTANGIN PERMEN MADU MINT",
                "satuan" => "SACH",
                "stok" => 13,
                "harga_beli" => "1875",
                "harga_jual" => "Rp2,500",
                "expired_date" => "6/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "WOODS LOZ HONEY LEMON",
                "satuan" => "SACH",
                "stok" => 13,
                "harga_beli" => "4899.5",
                "harga_jual" => "Rp6,000",
                "expired_date" => "9/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "WOODS LOZ ORIG",
                "satuan" => "SACH",
                "stok" => 13,
                "harga_beli" => "4899.5",
                "harga_jual" => "Rp6,000",
                "expired_date" => "3/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "NUTRINIDRINK PWD 400 GR",
                "satuan" => "CAN",
                "stok" => 1,
                "harga_beli" => "188000",
                "harga_jual" => "Rp206,800",
                "expired_date" => "6/2024",
                "category" => "MINUMAN "
            ],
            [
                "sku" => "",
                "name" => "ETAWALIN PWD 200GR",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "102060",
                "harga_jual" => "Rp113,400",
                "expired_date" => "7/2025",
                "category" => "MINUMAN "
            ],
            [
                "sku" => "",
                "name" => "ROSAGEN ",
                "satuan" => "SACH",
                "stok" => 39,
                "harga_beli" => "25000",
                "harga_jual" => "Rp29,000",
                "expired_date" => "3/2025",
                "category" => "MINUMAN "
            ],
            [
                "sku" => "",
                "name" => "ETAWAKU 200GR",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "92700",
                "harga_jual" => "Rp103,000",
                "expired_date" => "4/2025",
                "category" => "MINUMAN "
            ],
            [
                "sku" => "",
                "name" => "DIABETASOL VANILLA 170GR",
                "satuan" => "BOX",
                "stok" => 2,
                "harga_beli" => "48996.3",
                "harga_jual" => "Rp56,500",
                "expired_date" => "11/2024",
                "category" => "MINUMAN "
            ],
            [
                "sku" => "",
                "name" => "ENTRASOL GOLD 170 GR",
                "satuan" => "BOX",
                "stok" => 2,
                "harga_beli" => "39988",
                "harga_jual" => "Rp46,000",
                "expired_date" => "8/2024",
                "category" => "MINUMAN "
            ],
            [
                "sku" => "",
                "name" => "TENSIONE ONEMED",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "375000",
                "harga_jual" => "Rp487,500",
                "expired_date" => "2/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TROPICANA SLIM DIABET @25",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "24420",
                "harga_jual" => "Rp28,000",
                "expired_date" => "5/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TROPICANA SLIM DIABET @50",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "43290",
                "harga_jual" => "Rp50,000",
                "expired_date" => "12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LOSOSA 500GR",
                "satuan" => "BOX",
                "stok" => 2,
                "harga_beli" => "39998",
                "harga_jual" => "Rp46,000",
                "expired_date" => "5/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "POLYSILANE TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "8444.4",
                "harga_jual" => "Rp10,000",
                "expired_date" => "4/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANTANGIN HABBATUSSAUDA 12'S",
                "satuan" => "SACH",
                "stok" => 60,
                "harga_beli" => "2900",
                "harga_jual" => "Rp3,500",
                "expired_date" => "5/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANTANGIN GINGER MINT 12'S",
                "satuan" => "SACH",
                "stok" => 0,
                "harga_beli" => "2900",
                "harga_jual" => "Rp3,500",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANTANGIN JRG MADU 12'S ",
                "satuan" => "SACH",
                "stok" => 0,
                "harga_beli" => "3150",
                "harga_jual" => "Rp4,000",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK ANGIN SACH",
                "satuan" => "SACH",
                "stok" => 66,
                "harga_beli" => "3150",
                "harga_jual" => "Rp4,000",
                "expired_date" => "6/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANTANGIN JRG TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "3150",
                "harga_jual" => "Rp6,000",
                "expired_date" => "8/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANTANGIN JUNIOR SACH",
                "satuan" => "BOX",
                "stok" => 2,
                "harga_beli" => "10900",
                "harga_jual" => "Rp12,500",
                "expired_date" => "6/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ESEMAG SACH",
                "satuan" => "BOX",
                "stok" => 4,
                "harga_beli" => "1700",
                "harga_jual" => "Rp2,000",
                "expired_date" => "10/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ESEMAG TAB",
                "satuan" => "STRIP",
                "stok" => 16,
                "harga_beli" => "4100",
                "harga_jual" => "Rp5,000",
                "expired_date" => "12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK LINU MINT SACH",
                "satuan" => "SACH",
                "stok" => 25,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,500",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK ANGIN SUGAR FREE SACH",
                "satuan" => "SACH",
                "stok" => 20,
                "harga_beli" => "3405",
                "harga_jual" => "Rp4,000",
                "expired_date" => "4/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK ANGIN FLU ",
                "satuan" => "SACH",
                "stok" => 42,
                "harga_beli" => "3286",
                "harga_jual" => "Rp4,000",
                "expired_date" => "4/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK LINU HERBAL",
                "satuan" => "SACH",
                "stok" => 10,
                "harga_beli" => "2700",
                "harga_jual" => "Rp4,000",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK LINU COOL (ROLL ON)",
                "satuan" => "BTL",
                "stok" => 6,
                "harga_beli" => "9000",
                "harga_jual" => "Rp12,500",
                "expired_date" => "6/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOMPLIT \"KUKU BIMA\" ",
                "satuan" => "SACH",
                "stok" => 14,
                "harga_beli" => "4500",
                "harga_jual" => "Rp5,500",
                "expired_date" => "10/2023",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "EXTRA JOSS ROYAL JELLY",
                "satuan" => "SACH",
                "stok" => 12,
                "harga_beli" => "8100",
                "harga_jual" => "Rp9,500",
                "expired_date" => "8/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "EXTRA JOSS ANGGUR",
                "satuan" => "SACH",
                "stok" => 24,
                "harga_beli" => "8100",
                "harga_jual" => "Rp9,500",
                "expired_date" => "11/2023",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HEPAMAX",
                "satuan" => "TAB",
                "stok" => 15,
                "harga_beli" => "13500",
                "harga_jual" => "Rp15,000",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ALANG SARI ",
                "satuan" => "SACH",
                "stok" => 18,
                "harga_beli" => "5918.5",
                "harga_jual" => "Rp7,000",
                "expired_date" => "8/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ESTE EMJE SACH",
                "satuan" => "SACH",
                "stok" => 6,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,000",
                "expired_date" => "1/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "JAHE WANGI PERMEN ",
                "satuan" => "SACH",
                "stok" => 13,
                "harga_beli" => "1530",
                "harga_jual" => "Rp2,000",
                "expired_date" => "7/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BATUGIN 120ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28915.5",
                "harga_jual" => "Rp33,500",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KEJI BELING CAPS",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "5200",
                "harga_jual" => "Rp6,000",
                "expired_date" => "1/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PILKITA PEGAL LINU SACH",
                "satuan" => "SACH",
                "stok" => 10,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,000",
                "expired_date" => "1/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PILKITA PEGAL LINU TAB",
                "satuan" => "STRIP",
                "stok" => 50,
                "harga_beli" => "1836",
                "harga_jual" => "Rp2,500",
                "expired_date" => "1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CIWACING (CHRYSANTEMUM)",
                "satuan" => "BOX",
                "stok" => 3,
                "harga_beli" => "29500",
                "harga_jual" => "Rp34,000",
                "expired_date" => "5/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LO HAN KUO",
                "satuan" => "BOX",
                "stok" => 3,
                "harga_beli" => "24500",
                "harga_jual" => "Rp27,500",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SEVEN LEAVE GINSENG",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "45000",
                "harga_jual" => "Rp49,000",
                "expired_date" => "11/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PROSTESA SIDOMUNCUL",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "49500",
                "harga_jual" => "Rp57,000",
                "expired_date" => "5/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "REMAGO SIDOMUNCUL",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "54000",
                "harga_jual" => "Rp62,000",
                "expired_date" => "9/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GARLIC SIDOMUNCUL",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "49500",
                "harga_jual" => "Rp57,000",
                "expired_date" => "8/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SARI TEMULAWAK SIDOMUNCUL",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "54000",
                "harga_jual" => "Rp62,000",
                "expired_date" => "4/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SARI KUNYIT SIDOMUNCUL",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "54000",
                "harga_jual" => "Rp62,000",
                "expired_date" => "11/2023",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HERBAMON",
                "satuan" => "STRIP",
                "stok" => 12,
                "harga_beli" => "4500",
                "harga_jual" => "Rp5,200",
                "expired_date" => "7/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HEMAVITON CARDIO",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "17500",
                "harga_jual" => "Rp20,200",
                "expired_date" => "2/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADURASA ORIG SACH",
                "satuan" => "SACH",
                "stok" => 12,
                "harga_beli" => "779.5",
                "harga_jual" => "Rp1,000",
                "expired_date" => "2/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OMEPROS 30'S",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "127650",
                "harga_jual" => "Rp147,000",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OMEHEART 30'S",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "52170",
                "harga_jual" => "Rp60,000",
                "expired_date" => "4/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADU TJ STRAW SACH",
                "satuan" => "SACH",
                "stok" => 12,
                "harga_beli" => "777",
                "harga_jual" => "Rp1,000",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADU TJ ORIG + ROYAL JELLY",
                "satuan" => "SACH",
                "stok" => 12,
                "harga_beli" => "777",
                "harga_jual" => "Rp1,000",
                "expired_date" => "6/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADU TJ RASA JERUK SACH",
                "satuan" => "SACH",
                "stok" => 12,
                "harga_beli" => "777",
                "harga_jual" => "Rp1,000",
                "expired_date" => "1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADUSINDO",
                "satuan" => "SACH",
                "stok" => 18,
                "harga_beli" => "1170",
                "harga_jual" => "Rp1,200",
                "expired_date" => "8/2023",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADU TJ MURNI 250 GR",
                "satuan" => "BTL",
                "stok" => 5,
                "harga_beli" => "24059.3",
                "harga_jual" => "Rp29,000",
                "expired_date" => "6/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADU TJ MURNI 150 GR",
                "satuan" => "BTL",
                "stok" => 5,
                "harga_beli" => "15662.1",
                "harga_jual" => "Rp19,000",
                "expired_date" => "7/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OB HERBAL 100 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "21600",
                "harga_jual" => "Rp24,000",
                "expired_date" => "12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOMIX HERBAL ORIG",
                "satuan" => "PCK",
                "stok" => 5,
                "harga_beli" => "9200",
                "harga_jual" => "Rp11,000",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH ITRASAL ",
                "satuan" => "BTL",
                "stok" => 9,
                "harga_beli" => "6489",
                "harga_jual" => "Rp7,500",
                "expired_date" => "5/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBP ITRASAL",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "6200",
                "harga_jual" => "Rp8,000",
                "expired_date" => "10/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH COMBI BATUK BERDAHAK 100ML SYR",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "13500",
                "harga_jual" => "Rp15,000",
                "expired_date" => "1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH COMBI PLUS MADU 60ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "13600",
                "harga_jual" => "Rp15,500",
                "expired_date" => "9/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH COMBI PLUS JAHE 100 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "18400",
                "harga_jual" => "Rp21,000",
                "expired_date" => "9/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH COMBI PLUS ANAK STRAW 60ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15400",
                "harga_jual" => "Rp17,700",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH COMBI PLUS ANAK MADU 60ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "14400",
                "harga_jual" => "Rp17,700",
                "expired_date" => "2/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH COMBI PLUS ANAK APEL 60ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "14500",
                "harga_jual" => "Rp17,700",
                "expired_date" => "2/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LASERIN SYR 30 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "5813",
                "harga_jual" => "Rp6,800",
                "expired_date" => "8/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LASERIN ANAK SYR MADU 100ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "20052",
                "harga_jual" => "Rp23,000",
                "expired_date" => "3/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LASERIN SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "11507.4",
                "harga_jual" => "Rp13,200",
                "expired_date" => "8/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LASERIN SYR 110 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "20767",
                "harga_jual" => "Rp23,900",
                "expired_date" => "7/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBAT BATUK IBU ANAK 150ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "45500",
                "harga_jual" => "Rp52,200",
                "expired_date" => "3/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBAT BATUK IBU ANAK 75ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "24975",
                "harga_jual" => "Rp28,500",
                "expired_date" => "6/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PAMOL DROP",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "64000",
                "harga_jual" => "Rp67,200",
                "expired_date" => "9/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ZAMEL DROP",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "35100",
                "harga_jual" => "Rp39,000",
                "expired_date" => "10/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PRORIS SYRUP",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "27700",
                "harga_jual" => "Rp31,800",
                "expired_date" => "2/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PRORIS FORTE SYR",
                "satuan" => "BTL",
                "stok" => 6,
                "harga_beli" => "32400",
                "harga_jual" => "Rp37,300",
                "expired_date" => "12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "EYEVIT SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "65934",
                "harga_jual" => "Rp73,260",
                "expired_date" => "8/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "EYEVIT TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "32310",
                "harga_jual" => "Rp35,900",
                "expired_date" => "11/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANELAT",
                "satuan" => "STRIP",
                "stok" => 8,
                "harga_beli" => "1776",
                "harga_jual" => "Rp2,000",
                "expired_date" => "1/2025",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "DARSI KAPSUL",
                "satuan" => "PCK",
                "stok" => 6,
                "harga_beli" => "22200",
                "harga_jual" => "Rp24,500",
                "expired_date" => "3/2026",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "EM KAPSUL ",
                "satuan" => "PCK",
                "stok" => 6,
                "harga_beli" => "22000",
                "harga_jual" => "Rp24,200",
                "expired_date" => "01/2027",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "KAPSIDA ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "",
                "harga_jual" => "Rp0",
                "expired_date" => "08/2027",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "KAPSUL TUNTAS",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "10625",
                "harga_jual" => "Rp12,219",
                "expired_date" => "02/2026",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "RAPET WANGI ",
                "satuan" => "PCK",
                "stok" => 3,
                "harga_beli" => "10625",
                "harga_jual" => "Rp12,219",
                "expired_date" => "02/2026",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "IFREE PAD",
                "satuan" => "SACH",
                "stok" => 3,
                "harga_beli" => "7361.5",
                "harga_jual" => "Rp8,466",
                "expired_date" => "01/2026",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "SANGOBION ISI 4",
                "satuan" => "STRIP ",
                "stok" => 3,
                "harga_beli" => "6699.4",
                "harga_jual" => "Rp7,704",
                "expired_date" => "10/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "HUFABION ",
                "satuan" => "STRIP",
                "stok" => 8,
                "harga_beli" => "4080",
                "harga_jual" => "Rp4,692",
                "expired_date" => "08/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "VEGETA SCRUBBER",
                "satuan" => "SACH",
                "stok" => 6,
                "harga_beli" => "11085.6",
                "harga_jual" => "Rp12,748",
                "expired_date" => "11/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "VEGETA HERBAL",
                "satuan" => "SACH",
                "stok" => 6,
                "harga_beli" => "16667.7",
                "harga_jual" => "Rp19,168",
                "expired_date" => "10/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "SIDOMUNCUL PELANGI ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "49500",
                "harga_jual" => "Rp56,925",
                "expired_date" => "05/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "SIDOMUNCUL ALUS",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "49500",
                "harga_jual" => "Rp56,925",
                "expired_date" => "09/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "SIDOMUNCUL SUPRASI",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "36000",
                "harga_jual" => "Rp41,400",
                "expired_date" => "01/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "LANCAR ASI",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "46752.1",
                "harga_jual" => "Rp53,765",
                "expired_date" => "09/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "BEDAK MARCK'S ROSE",
                "satuan" => "POT",
                "stok" => 1,
                "harga_beli" => "16650",
                "harga_jual" => "Rp19,148",
                "expired_date" => "12/2027",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "BEDAK MARCK'S CREME",
                "satuan" => "POT",
                "stok" => 1,
                "harga_beli" => "16650",
                "harga_jual" => "Rp19,148",
                "expired_date" => "01/2027",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "ACNOL LOTION ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15540",
                "harga_jual" => "Rp17,871",
                "expired_date" => "02/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "JF ANTI ACNE CREAM ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "14600",
                "harga_jual" => "Rp16,790",
                "expired_date" => "05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DERMA XP HAIR GROW",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "70200",
                "harga_jual" => "Rp80,730",
                "expired_date" => "07/2025",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE LC SERUM \" ACNE CARE\" 10ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "55000",
                "harga_jual" => "Rp63,250",
                "expired_date" => "02/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE PL SERUM \"LIGHTENING\"",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "54000",
                "harga_jual" => "Rp62,100",
                "expired_date" => "05/2025",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE PENTAGF 10ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "265000",
                "harga_jual" => "Rp304,750",
                "expired_date" => "05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE CHROMAGLOW SERUM 10ML",
                "satuan" => "BTL ",
                "stok" => 1,
                "harga_beli" => "94000",
                "harga_jual" => "Rp108,100",
                "expired_date" => "03/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE MULTIACTION EYE SERUM",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "120000",
                "harga_jual" => "Rp138,000",
                "expired_date" => "02/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE HYDRAPROTECT",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "94000",
                "harga_jual" => "Rp108,100",
                "expired_date" => "05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE DERMA FILLER \"ANTI AGING\" 15ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "290000",
                "harga_jual" => "Rp333,500",
                "expired_date" => "02/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE DNA SALMON GOLD SERUM",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "120000",
                "harga_jual" => "Rp138,000",
                "expired_date" => "05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE DERMA MOIST CR ",
                "satuan" => "POT",
                "stok" => 10,
                "harga_beli" => "33000",
                "harga_jual" => "Rp37,950",
                "expired_date" => "05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE RW SUNSCREEN ",
                "satuan" => "POT",
                "stok" => 8,
                "harga_beli" => "41000",
                "harga_jual" => "Rp47,150",
                "expired_date" => "05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE FW DRY 60ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "27000",
                "harga_jual" => "Rp31,050",
                "expired_date" => "06/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE FW OILY",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "27000",
                "harga_jual" => "Rp31,050",
                "expired_date" => "11/2025",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE PORE ESSENCE LAVENDER ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "45000",
                "harga_jual" => "Rp51,750",
                "expired_date" => "07/2025",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE MICELLAR WATER 100ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "32000",
                "harga_jual" => "Rp36,800",
                "expired_date" => "05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE RW NIGHT CR ",
                "satuan" => "POT",
                "stok" => 11,
                "harga_beli" => "59000",
                "harga_jual" => "Rp67,850",
                "expired_date" => "02/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE ACNE SUNSCREEN ",
                "satuan" => "POT",
                "stok" => 2,
                "harga_beli" => "36000",
                "harga_jual" => "Rp41,400",
                "expired_date" => "06/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE DAY LOOK UP BB CREAM ",
                "satuan" => "POT",
                "stok" => 2,
                "harga_beli" => "45000",
                "harga_jual" => "Rp51,750",
                "expired_date" => "06/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE ACNE NIGHT CR",
                "satuan" => "POT",
                "stok" => 2,
                "harga_beli" => "45000",
                "harga_jual" => "Rp51,750",
                "expired_date" => "04/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "SUTRA MERAH 3",
                "satuan" => "PCS",
                "stok" => 21,
                "harga_beli" => "6300",
                "harga_jual" => "Rp7,245",
                "expired_date" => "03/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "SUTRA OK (HITAM) 3'S",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "7972.02",
                "harga_jual" => "Rp9,168",
                "expired_date" => "04/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "SUTRA OK (HITAM) 12'S",
                "satuan" => "PCK",
                "stok" => 3,
                "harga_beli" => "28354.95",
                "harga_jual" => "Rp32,608",
                "expired_date" => "12/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "SUTRA GERIGI 3'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "7972.02",
                "harga_jual" => "Rp9,168",
                "expired_date" => "11/2027",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "FIESTA STRAWBERRY 3'S",
                "satuan" => "PCS",
                "stok" => 3,
                "harga_beli" => "12350",
                "harga_jual" => "Rp14,203",
                "expired_date" => "05/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "FIESTA ULTRA THIN 3'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "12298.8",
                "harga_jual" => "Rp14,144",
                "expired_date" => "08/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "FIESTA DURIAN 3'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "11201.01",
                "harga_jual" => "Rp12,881",
                "expired_date" => "02/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "FIESTA MAX DOTTED 3'S",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "13500",
                "harga_jual" => "Rp15,525",
                "expired_date" => "02/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "DUREX TOGETHER 3'S",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "18000",
                "harga_jual" => "Rp20,700",
                "expired_date" => "03/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "DUREX EXTRA SAVE 3'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "23873.5",
                "harga_jual" => "Rp27,455",
                "expired_date" => "01/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "DUREX FETHERLITE 3'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "26480.2",
                "harga_jual" => "Rp30,452",
                "expired_date" => "12/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "DUREX LOVE 3'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "9997.9",
                "harga_jual" => "Rp11,498",
                "expired_date" => "09/2027",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "TISSUE MAGIC MAN CASSANOVA ",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "11100",
                "harga_jual" => "Rp12,765",
                "expired_date" => "04/2028",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "TISSUE MAGIC MAN LOVERS HITAM",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "11100",
                "harga_jual" => "Rp12,765",
                "expired_date" => "08/2027",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "TEST PACK ONE MED",
                "satuan" => "STRIP",
                "stok" => 45,
                "harga_beli" => "2775",
                "harga_jual" => "Rp3,191",
                "expired_date" => "10/2025",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "SENSITIF TEST KEHAMILAN",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "23310",
                "harga_jual" => "Rp26,807",
                "expired_date" => "03/2025",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "ABSOLUTE DAILY FEMINIME HYGIENE ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "26500",
                "harga_jual" => "Rp30,475",
                "expired_date" => "06/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "OILUM THE DRY SKIN expired_dateERT \" BRIGHTENING CARE\"",
                "satuan" => "BAR",
                "stok" => 3,
                "harga_beli" => "18500",
                "harga_jual" => "Rp21,275",
                "expired_date" => "02/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SCABIMITE BLACKSOAP",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "43000",
                "harga_jual" => "Rp49,450",
                "expired_date" => "07/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF ACNE SPOT CARE",
                "satuan" => "BAR",
                "stok" => 1,
                "harga_beli" => "11200",
                "harga_jual" => "Rp12,880",
                "expired_date" => "05/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF DERMAMED 90GR",
                "satuan" => "BAR",
                "stok" => 1,
                "harga_beli" => "11155.5",
                "harga_jual" => "Rp12,829",
                "expired_date" => "02/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF ACNE 65GR",
                "satuan" => "BAR",
                "stok" => 1,
                "harga_beli" => "11200",
                "harga_jual" => "Rp12,880",
                "expired_date" => "05/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF ACNE 90GR",
                "satuan" => "BAR",
                "stok" => 1,
                "harga_beli" => "24500",
                "harga_jual" => "Rp28,175",
                "expired_date" => "09/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ASEPSO FRESH ",
                "satuan" => "BAR",
                "stok" => 2,
                "harga_beli" => "8550",
                "harga_jual" => "Rp9,833",
                "expired_date" => "03/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ASEPSO ORIG",
                "satuan" => "BAR",
                "stok" => 3,
                "harga_beli" => "7276.71",
                "harga_jual" => "Rp8,368",
                "expired_date" => "03/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SABUN HIJAU HOLLY 60GR",
                "satuan" => "BAR",
                "stok" => 12,
                "harga_beli" => "5550",
                "harga_jual" => "Rp6,383",
                "expired_date" => "12/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "CUSSON BABY SOAP SOFT&SMOOTH",
                "satuan" => "BAR",
                "stok" => 1,
                "harga_beli" => "4050",
                "harga_jual" => "Rp4,658",
                "expired_date" => "07/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SABUN DETTOL ORI 60GR",
                "satuan" => "BAR",
                "stok" => 3,
                "harga_beli" => "3150",
                "harga_jual" => "Rp3,623",
                "expired_date" => "09/2023",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SABUN DETTOL ORI 100GR",
                "satuan" => "BAR",
                "stok" => 5,
                "harga_beli" => "4500",
                "harga_jual" => "Rp5,175",
                "expired_date" => "02/2025",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "CLOSE UP 65GR",
                "satuan" => "TUBE",
                "stok" => 6,
                "harga_beli" => "6750",
                "harga_jual" => "Rp7,763",
                "expired_date" => "10/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SENSODYNE COOL GEL 100GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "28971",
                "harga_jual" => "Rp33,317",
                "expired_date" => "01/2025",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SENSODYNE FRESH MINT 100GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "28971",
                "harga_jual" => "Rp33,317",
                "expired_date" => "04/2025",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "POLIDENT 20GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "33078",
                "harga_jual" => "Rp38,040",
                "expired_date" => "01/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "POLIDENT 60GR",
                "satuan" => "TUBE",
                "stok" => 0,
                "harga_beli" => "79476",
                "harga_jual" => "Rp91,397",
                "expired_date" => "-",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ANTIPLAQUE",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "24300",
                "harga_jual" => "Rp27,945",
                "expired_date" => "06/2025",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF DERMAMED CAIR POUCH 200ML",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "28500",
                "harga_jual" => "Rp32,775",
                "expired_date" => "07/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF DERMAMED CAIR 200ML ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28500",
                "harga_jual" => "Rp32,775",
                "expired_date" => "06/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF DERMA PROTECT POUCH 200ML",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "28500",
                "harga_jual" => "Rp32,775",
                "expired_date" => "06/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF DERMA PROTECT  200ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28500",
                "harga_jual" => "Rp32,775",
                "expired_date" => "07/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "OILUM CAIR HYDRATING CARE BODY WASH POUCH",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "18500",
                "harga_jual" => "Rp21,275",
                "expired_date" => "07/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "OILUM CAIR HYDRATING CARE BODY WASH 200ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28500",
                "harga_jual" => "Rp32,775",
                "expired_date" => "05/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "OILUM CAIR BRIGHTENING POUCH",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "28500",
                "harga_jual" => "Rp32,775",
                "expired_date" => "07/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "OILUM CAIR BRIGHTENING 200ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "18500",
                "harga_jual" => "Rp21,275",
                "expired_date" => "06/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SIKAT GIGI FORMULA ",
                "satuan" => "PCS",
                "stok" => 7,
                "harga_beli" => "3600",
                "harga_jual" => "Rp4,140",
                "expired_date" => "-",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SIKAT GIGI CIPTADENT",
                "satuan" => "PCS",
                "stok" => 12,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,105",
                "expired_date" => "-",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "TISSUE PASEO 250'S",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "10800",
                "harga_jual" => "Rp12,420",
                "expired_date" => "-",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "TISSUE GREEN SOFT",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "12500",
                "harga_jual" => "Rp14,375",
                "expired_date" => "06/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ACETON GAJAH ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "7821",
                "harga_jual" => "Rp8,994",
                "expired_date" => "04/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SOFFEL BTL",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "9450",
                "harga_jual" => "Rp10,500",
                "expired_date" => "02/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "NATUR E HAND BODY LOTION 245ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "23213.43",
                "harga_jual" => "Rp26,695",
                "expired_date" => "01/2025",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "NATUR E HAND BODY LOTION 100ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11570.64",
                "harga_jual" => "Rp13,306",
                "expired_date" => "02/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "DETTOL FRESH CAIR",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "37900",
                "harga_jual" => "Rp43,585",
                "expired_date" => "07/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ASEPSO ORI CAIR ",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "23200",
                "harga_jual" => "Rp26,680",
                "expired_date" => "05/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ASEPSO HYGIENE FRESH CAIR",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "23200",
                "harga_jual" => "Rp26,680",
                "expired_date" => "08/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ASEPSO MOISTURE CARE",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "23200",
                "harga_jual" => "Rp26,680",
                "expired_date" => "04/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "HUKI COTTON BUDS BABY 100",
                "satuan" => "PCS",
                "stok" => 6,
                "harga_beli" => "6700",
                "harga_jual" => "Rp7,705",
                "expired_date" => "05/2028",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "TISSUE PASEO 12'S",
                "satuan" => "PCS",
                "stok" => 8,
                "harga_beli" => "1350",
                "harga_jual" => "Rp1,553",
                "expired_date" => "-",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "TISSUE TESSA 10'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "1500",
                "harga_jual" => "Rp1,725",
                "expired_date" => "-",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "CUSSONS BABY TISSUE BASAH",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "10000",
                "harga_jual" => "Rp11,500",
                "expired_date" => "10/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ONE CLEAN WASH GLOVE",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "16200",
                "harga_jual" => "Rp18,630",
                "expired_date" => "10/2025",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "COTTON BALL ONE MED",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "10350",
                "harga_jual" => "Rp11,903",
                "expired_date" => "04/2028",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "KAPAS SELECTION 75GR",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "12182.25",
                "harga_jual" => "Rp14,010",
                "expired_date" => "03/2028",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ICE BAG ONE MED",
                "satuan" => "PCK",
                "stok" => 1,
                "harga_beli" => "27000",
                "harga_jual" => "Rp31,050",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "CONFIDENT XL 122-178",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "18000",
                "harga_jual" => "Rp20,700",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "UNDERPADS ONEMED DR.J",
                "satuan" => "PCS",
                "stok" => 17,
                "harga_beli" => "3150",
                "harga_jual" => "Rp3,623",
                "expired_date" => "05/2027",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MASKER ANYTIME HIJAB ",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "9900",
                "harga_jual" => "Rp11,385",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MASKER ANYTIME EARLOOP",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "9900",
                "harga_jual" => "Rp11,385",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MASKER ANYTIME KIDS",
                "satuan" => "PCS",
                "stok" => 7,
                "harga_beli" => "9900",
                "harga_jual" => "Rp11,385",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MASKER ANYTIME VIRUS GUARD",
                "satuan" => "PCS",
                "stok" => 6,
                "harga_beli" => "12600",
                "harga_jual" => "Rp14,490",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MASKER ANYTIME KID BOX",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "54000",
                "harga_jual" => "Rp62,100",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MASKER EARLOOP ONE MED",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "22500",
                "harga_jual" => "Rp25,875",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "LAURIER SUPER MAXI 8PADS",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "4050",
                "harga_jual" => "Rp4,658",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "CHARM EXTRA COMFORT MAXI 23CM 6PADS",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "4050",
                "harga_jual" => "Rp4,658",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "CHARM EXTRA COMFORT MAXI 26CM 8PADS",
                "satuan" => "PCK",
                "stok" => 3,
                "harga_beli" => "6750",
                "harga_jual" => "Rp7,763",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "CHARM BODY FIT 23CM 8PADS",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "4950",
                "harga_jual" => "Rp5,693",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "SOFTEX CELANA MENSTRUASI ",
                "satuan" => "PCS",
                "stok" => 6,
                "harga_beli" => "18000",
                "harga_jual" => "Rp20,700",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MAMY POKO PANST M-1",
                "satuan" => "PCS",
                "stok" => 10,
                "harga_beli" => "2700",
                "harga_jual" => "Rp3,105",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MAMY POKO PANST L-1",
                "satuan" => "PCS",
                "stok" => 10,
                "harga_beli" => "3150",
                "harga_jual" => "Rp3,623",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "SWEETY PANST S-1",
                "satuan" => "PCS",
                "stok" => 6,
                "harga_beli" => "1350",
                "harga_jual" => "Rp1,553",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "THERMO ONE ALPHA 2",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "16500",
                "harga_jual" => "Rp18,975",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "THERMO ONE KID",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "20000",
                "harga_jual" => "Rp23,000",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "THERMO ONE ALPHA 3",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "20000",
                "harga_jual" => "Rp23,000",
                "expired_date" => "",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "TOURINIQUET",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "11000",
                "harga_jual" => "Rp12,650",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ONEMED DOUBLE SPIKE (TRANSOFIX)",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "4000",
                "harga_jual" => "Rp4,600",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "KASA GULUNG ONE MED 5CM",
                "satuan" => "ROLL",
                "stok" => 8,
                "harga_beli" => "10440",
                "harga_jual" => "Rp12,006",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "DERMAFIX 10X8CM",
                "satuan" => "PCS",
                "stok" => 10,
                "harga_beli" => "5400",
                "harga_jual" => "Rp6,210",
                "expired_date" => "04/2028",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "TENSOCRAPE 7,5CMX4,5M",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "87300",
                "harga_jual" => "Rp100,395",
                "expired_date" => "10/2027",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "PLESTER HANSAPLAST 1.25X1M",
                "satuan" => "ROLL",
                "stok" => 2,
                "harga_beli" => "4,230.00",
                "harga_jual" => "Rp4,865",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ULTRAFIX 5CMX1M",
                "satuan" => "PCS",
                "stok" => 10,
                "harga_beli" => "3,600",
                "harga_jual" => "Rp4,140",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ULTRAFIX 10CMX1M",
                "satuan" => "PCS",
                "stok" => 3,
                "harga_beli" => "6,300",
                "harga_jual" => "Rp7,245",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "PLESTERIN ISI 10",
                "satuan" => "PCS",
                "stok" => 47,
                "harga_beli" => "1,080.00",
                "harga_jual" => "Rp1,242",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "BETADINE SOL 60ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "40,820.30",
                "harga_jual" => "Rp46,943",
                "expired_date" => "02/2026",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "BETADINE SOL 30ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "24,242.40",
                "harga_jual" => "Rp27,879",
                "expired_date" => "04/2026",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "BETADINE SOL 5ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "4,950",
                "harga_jual" => "Rp5,693",
                "expired_date" => "05/2026",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "KAPAS GULUNG ONE MED 50GR",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "3,600",
                "harga_jual" => "Rp4,140",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "KASA STERIL ONE MED",
                "satuan" => "PCK",
                "stok" => 5,
                "harga_beli" => "7,650",
                "harga_jual" => "Rp8,798",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ALKOHOL SWAB ONE MED",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "10,800",
                "harga_jual" => "Rp12,420",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "PLESTRIN KID",
                "satuan" => "PCS",
                "stok" => 25,
                "harga_beli" => "270",
                "harga_jual" => "Rp311",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "HANSAPLAST ",
                "satuan" => "PCS",
                "stok" => 122,
                "harga_beli" => "360",
                "harga_jual" => "Rp414",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "HANSAPLAST JUMBO",
                "satuan" => "PCS ",
                "stok" => 46,
                "harga_beli" => "900",
                "harga_jual" => "Rp1,035",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "GUNTING KUKU BESAR",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8000",
                "harga_jual" => "Rp9,200",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "GUNTING KUKU BENGKOK",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "7500",
                "harga_jual" => "Rp8,625",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ALKOHOL 70% 300ML ONE MED",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "10,629",
                "harga_jual" => "Rp12,224",
                "expired_date" => "01/2027",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "RIVANOL 100ML ONE MED",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "3,150",
                "harga_jual" => "Rp3,623",
                "expired_date" => "04/2026",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "DETTOL ANTISEPTIK 45ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11,450.80",
                "harga_jual" => "Rp13,168",
                "expired_date" => "01/2026",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "DETTOL ANTISEPTIK 95ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "23,180.10",
                "harga_jual" => "Rp26,657",
                "expired_date" => "12/2025",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "PLESTERIN GEL ONE MED 60ML",
                "satuan" => "TUBE ",
                "stok" => 1,
                "harga_beli" => "41,850.00",
                "harga_jual" => "Rp48,128",
                "expired_date" => "03/2025",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "DIE DA YOU JING 30ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28600",
                "harga_jual" => "Rp32,890",
                "expired_date" => "11/2026",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "URINAL WANITA",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "30000",
                "harga_jual" => "Rp34,500",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "URINAL LAKI-LAKI",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "27000",
                "harga_jual" => "Rp31,050",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "NASAL CANUL DEWASA ",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "4500",
                "harga_jual" => "Rp5,175",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "OXYCAN",
                "satuan" => "CAN",
                "stok" => 1,
                "harga_beli" => "45,408",
                "harga_jual" => "Rp52,220",
                "expired_date" => "05/2025",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "SARUNG TANGAN PLASTIK ONE MED",
                "satuan" => "PCS",
                "stok" => 200,
                "harga_beli" => "7,650.00",
                "harga_jual" => "Rp8,798",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "HANDSCOON M ",
                "satuan" => "PCS",
                "stok" => 50,
                "harga_beli" => "885.60",
                "harga_jual" => "Rp1,018",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "HANDSCOON L",
                "satuan" => "PCS",
                "stok" => 48,
                "harga_beli" => "885.60",
                "harga_jual" => "Rp1,018",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "INFUSION SET ANAK ONE MED",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "5,000.00",
                "harga_jual" => "Rp5,750",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "INFUSION SET DEWASA ONE MED",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "5,000.00",
                "harga_jual" => "Rp5,750",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "DERMAFIX 10CMX25CM",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "14,400",
                "harga_jual" => "Rp16,560",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "KACA MATA GOOGLE ",
                "satuan" => "PCS",
                "stok" => 3,
                "harga_beli" => "11,700",
                "harga_jual" => "Rp13,455",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "LIFREE POPOK DEWASA XL-1",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "8,550",
                "harga_jual" => "Rp9,833",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "LIFREE POPOK DEWASA L-1",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "7,200",
                "harga_jual" => "Rp8,280",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "SPUIT 5CC ONE MED",
                "satuan" => "PCS",
                "stok" => 100,
                "harga_beli" => "5000",
                "harga_jual" => "Rp5,750",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "NACL 500 ML (OTSUKA)",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "5,000",
                "harga_jual" => "Rp5,750",
                "expired_date" => "4/2025",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "PISPOT BAB PLASTIK",
                "satuan" => "PCS",
                "stok" => 3,
                "harga_beli" => "40,000.00",
                "harga_jual" => "Rp46,000",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ALCOHOL SWAB (ONEMED)",
                "satuan" => "PCS",
                "stok" => 101,
                "harga_beli" => "10,800",
                "harga_jual" => "Rp12,420",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ALKOHOL 70%1L",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "80000",
                "harga_jual" => "Rp92,000",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "CARGESIC TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "6,750",
                "harga_jual" => "Rp7,763",
                "expired_date" => "10/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "PONSTAN 500MG",
                "satuan" => "TAB",
                "stok" => 12,
                "harga_beli" => "3,400",
                "harga_jual" => "Rp3,910",
                "expired_date" => "7/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CATAFLAM FAST 50MG",
                "satuan" => "SACH",
                "stok" => 9,
                "harga_beli" => "9,817",
                "harga_jual" => "Rp11,290",
                "expired_date" => "01/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CATAFLAM 50MG TAB",
                "satuan" => "TAB",
                "stok" => 23,
                "harga_beli" => "7,909.12",
                "harga_jual" => "Rp9,095",
                "expired_date" => "12/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "FARSIFEN PLUS TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "5,500.00",
                "harga_jual" => "Rp6,325",
                "expired_date" => "09/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "FARSIFEN TAB",
                "satuan" => "STRIP",
                "stok" => 8,
                "harga_beli" => "5,500.00",
                "harga_jual" => "Rp6,325",
                "expired_date" => "05/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "KAFLAM 50MG TAB",
                "satuan" => "TAB ",
                "stok" => 30,
                "harga_beli" => "33,200",
                "harga_jual" => "Rp38,180",
                "expired_date" => "07/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "MELOXICAM 15MG",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "8,000",
                "harga_jual" => "Rp9,200",
                "expired_date" => "11/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "VOLTAREN 50MG ",
                "satuan" => "TAB",
                "stok" => 50,
                "harga_beli" => "7,683.84",
                "harga_jual" => "Rp8,836",
                "expired_date" => "02/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ARCOXIA 90MG",
                "satuan" => "TAB",
                "stok" => 10,
                "harga_beli" => "21476.7",
                "harga_jual" => "Rp24,698",
                "expired_date" => "09/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "MYONAL ",
                "satuan" => "TAB",
                "stok" => 10,
                "harga_beli" => "9622.8",
                "harga_jual" => "Rp11,066",
                "expired_date" => "09/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "EPERISON TAB ",
                "satuan" => "STRIP ",
                "stok" => 2,
                "harga_beli" => "17031.6",
                "harga_jual" => "Rp19,586",
                "expired_date" => "05/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "KETOPROFEN 100MG TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "16,500.00",
                "harga_jual" => "Rp18,975",
                "expired_date" => "06/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "LYRICA 75MG ",
                "satuan" => "KAPSUL",
                "stok" => 14,
                "harga_beli" => "15,874.78",
                "harga_jual" => "Rp18,256",
                "expired_date" => "08/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "HUFRALGIN TAB",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "5670",
                "harga_jual" => "Rp6,521",
                "expired_date" => "06/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ALLOPURINOL 100MG",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "3,000",
                "harga_jual" => "Rp3,450",
                "expired_date" => "03/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ALLOPURINOL 300MG",
                "satuan" => "STRIP ",
                "stok" => 1,
                "harga_beli" => "5,500",
                "harga_jual" => "Rp6,325",
                "expired_date" => "11/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "METHYLPREDNISOLON 4MG",
                "satuan" => "STRIP",
                "stok" => 7,
                "harga_beli" => "4,000",
                "harga_jual" => "Rp4,600",
                "expired_date" => "12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "METHYLPREDNISOLON 8MG",
                "satuan" => "STRIP",
                "stok" => 15,
                "harga_beli" => "5,100",
                "harga_jual" => "Rp5,865",
                "expired_date" => "02/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "METHYLPREDNISOLONE 16MG",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "9,100",
                "harga_jual" => "Rp10,465",
                "expired_date" => "01/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "LAMESON 4MG TAB",
                "satuan" => "TAB",
                "stok" => 25,
                "harga_beli" => "5350.5",
                "harga_jual" => "Rp6,153",
                "expired_date" => "02/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "DEXTAMIN TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "15,963.2",
                "harga_jual" => "Rp18,358",
                "expired_date" => "3/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "DEXTEEM PLUS TAB ",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "3,148.6",
                "harga_jual" => "Rp3,621",
                "expired_date" => "1/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "HEPTASAN TAB",
                "satuan" => "TAB",
                "stok" => 24,
                "harga_beli" => "4,662",
                "harga_jual" => "Rp5,361",
                "expired_date" => "3/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "HISTAPAN TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "8,449.9",
                "harga_jual" => "Rp9,717",
                "expired_date" => "4/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "LORATADINE TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "3,000",
                "harga_jual" => "Rp3,450",
                "expired_date" => "5/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "TEOSAL TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "15,700",
                "harga_jual" => "Rp18,055",
                "expired_date" => "12/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "VENTOLIN NEBULES",
                "satuan" => "AMPUL",
                "stok" => 5,
                "harga_beli" => "59,500",
                "harga_jual" => "Rp68,425",
                "expired_date" => "7/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SALBUTAMOL 2 MG",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "1,410",
                "harga_jual" => "Rp1,622",
                "expired_date" => "4/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "APTOR TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "4600",
                "harga_jual" => "Rp5,290",
                "expired_date" => "7/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "FUROSEMIDE 40 MG",
                "satuan" => "STRIP",
                "stok" => 13,
                "harga_beli" => "1256",
                "harga_jual" => "Rp1,444",
                "expired_date" => "5/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CAPTOPRIL 12.5 MG",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "1,716",
                "harga_jual" => "Rp1,973",
                "expired_date" => "8/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CAPTOPRIL 25 MG",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "2,173",
                "harga_jual" => "Rp2,499",
                "expired_date" => "5/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "AMLODIPINE 5 MG (PROMEDRAHARD)",
                "satuan" => "TAB",
                "stok" => 85,
                "harga_beli" => "2250",
                "harga_jual" => "Rp2,588",
                "expired_date" => "5/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GRAVASK 10 MG ",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "23332.8",
                "harga_jual" => "Rp26,833",
                "expired_date" => "3/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "AMLODIPINE 10 MG (SAMCO)",
                "satuan" => "TAB",
                "stok" => 70,
                "harga_beli" => "4,500",
                "harga_jual" => "Rp5,175",
                "expired_date" => "12/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ATORVASTATIN 20 MG (OGB DEXA)",
                "satuan" => "TAB",
                "stok" => 50,
                "harga_beli" => "25,000",
                "harga_jual" => "Rp28,750",
                "expired_date" => "5/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ATORVASTATIN 10 MG",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "17,500",
                "harga_jual" => "Rp20,125",
                "expired_date" => "3/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ATORVASTATIN 20 MG (PRATAPA)",
                "satuan" => "TAB",
                "stok" => 20,
                "harga_beli" => "25000",
                "harga_jual" => "Rp28,750",
                "expired_date" => "6/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ATORVASTATIN 40 MG (PRATAPA)",
                "satuan" => "TAB",
                "stok" => 30,
                "harga_beli" => "33,000",
                "harga_jual" => "Rp37,950",
                "expired_date" => "2/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ROSUFER 20 MG",
                "satuan" => "TAB",
                "stok" => 30,
                "harga_beli" => "131,166.67",
                "harga_jual" => "Rp150,842",
                "expired_date" => "3/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SIMVASTATIN 10 MG (HJ)",
                "satuan" => "TAB",
                "stok" => 35,
                "harga_beli" => "3,000",
                "harga_jual" => "Rp3,450",
                "expired_date" => "2/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SIMVASTATIN 20 MG (HJ)",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "10,500",
                "harga_jual" => "Rp12,075",
                "expired_date" => "5/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GEMFIBROZIL 300 MG",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "8,500",
                "harga_jual" => "Rp9,775",
                "expired_date" => "2/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "HYPOFIL KAPS",
                "satuan" => "KAPSUL",
                "stok" => 20,
                "harga_beli" => "31,500",
                "harga_jual" => "Rp36,225",
                "expired_date" => "8/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ACARBOSE 50 MG",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "10,150",
                "harga_jual" => "Rp11,673",
                "expired_date" => "1/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "METFORMIN 500 MG (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "2,500",
                "harga_jual" => "Rp2,875",
                "expired_date" => "12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GLIMEPIRIDE 1 MG (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "4,100",
                "harga_jual" => "Rp4,715",
                "expired_date" => "1/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GLIMEPIRIDE 2 MG (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "4,950",
                "harga_jual" => "Rp5,693",
                "expired_date" => "3/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GLIMEPIRIDE 3 MG (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "6,350",
                "harga_jual" => "Rp7,303",
                "expired_date" => "2/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GLIMEPIRIDE 4 MG ",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "7,150",
                "harga_jual" => "Rp8,223",
                "expired_date" => "2/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "RENABETIC TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "3,000.00",
                "harga_jual" => "Rp3,450",
                "expired_date" => "1/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "VELTHROM 10 MG",
                "satuan" => "STRIP",
                "stok" => 30,
                "harga_beli" => "18333",
                "harga_jual" => "Rp21,083",
                "expired_date" => "12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "IRVELL 300 MG ",
                "satuan" => "TAB",
                "stok" => 30,
                "harga_beli" => "132,000",
                "harga_jual" => "Rp151,800",
                "expired_date" => "1/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "VALSARTAN 160 MG",
                "satuan" => "TAB",
                "stok" => 30,
                "harga_beli" => "56,600",
                "harga_jual" => "Rp65,090",
                "expired_date" => "3/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BISOPROLOL 5 MG ",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "5,050",
                "harga_jual" => "Rp5,808",
                "expired_date" => "3/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BISOPROLOL 2.5 MG (NOVELL)",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "4,150",
                "harga_jual" => "Rp4,773",
                "expired_date" => "4/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BISOPROLOL 2.5 MG (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "5,050",
                "harga_jual" => "Rp5,808",
                "expired_date" => "4/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CANDESARTAN 8 MG (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 12,
                "harga_beli" => "5,000",
                "harga_jual" => "Rp5,750",
                "expired_date" => "1/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CANDESARTAN 16 MG",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "8,050",
                "harga_jual" => "Rp9,258",
                "expired_date" => "2/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "OMEPRAZOLE 20 MG (IFARS)",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "4,500",
                "harga_jual" => "Rp5,175",
                "expired_date" => "4/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "LANSOPRAZOLE 30 MG (EXELTIS)",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "11984.45",
                "harga_jual" => "Rp13,782",
                "expired_date" => "8/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "LANSOPRAZOLE 30 MG (NOVELL)",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "8,968.90",
                "harga_jual" => "Rp10,314",
                "expired_date" => "6/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ONDANSENTRON 4 MG (NOVELL)",
                "satuan" => "TAB",
                "stok" => 12,
                "harga_beli" => "7,200",
                "harga_jual" => "Rp8,280",
                "expired_date" => "3/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ONDANSENTRON 8 MG (NOVELL)",
                "satuan" => "TAB",
                "stok" => 12,
                "harga_beli" => "11,700",
                "harga_jual" => "Rp13,455",
                "expired_date" => "4/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GRAMETA TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "3,600",
                "harga_jual" => "Rp4,140",
                "expired_date" => "6/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "VOMETA FT TAB",
                "satuan" => "TAB",
                "stok" => 30,
                "harga_beli" => "5,140",
                "harga_jual" => "Rp5,911",
                "expired_date" => "3/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SPASMINAL TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "11000",
                "harga_jual" => "Rp12,650",
                "expired_date" => "12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ANTASIDA DOEN (TRIMAN)",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "9700",
                "harga_jual" => "Rp11,155",
                "expired_date" => "5/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "PANTOPRAZOLE 40 MG (ETERCON)",
                "satuan" => "TAB",
                "stok" => 20,
                "harga_beli" => "88,000",
                "harga_jual" => "Rp101,200",
                "expired_date" => "2/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SUCRALFAT 500MG/ML (OGB DEXA)",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "15660",
                "harga_jual" => "Rp18,009",
                "expired_date" => "-",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "RANITIDIN HCL 150MG 9HJ)",
                "satuan" => "STRIP",
                "stok" => 0,
                "harga_beli" => "2,500",
                "harga_jual" => "Rp2,875",
                "expired_date" => "-",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "KETOCONAZOLE 200 MG TAB (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "5,006.1",
                "harga_jual" => "Rp5,757",
                "expired_date" => "7/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ARDIUM 500 MG",
                "satuan" => "TAB",
                "stok" => 30,
                "harga_beli" => "9,516",
                "harga_jual" => "Rp10,943",
                "expired_date" => "1/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "VENARON KAPS",
                "satuan" => "KAPSUL",
                "stok" => 20,
                "harga_beli" => "37,030.00",
                "harga_jual" => "Rp42,585",
                "expired_date" => "11/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ORLISTAT (NOVELL)",
                "satuan" => "TAB",
                "stok" => 10,
                "harga_beli" => "70,000",
                "harga_jual" => "Rp80,500",
                "expired_date" => "5/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "POSTINOR ",
                "satuan" => "TAB",
                "stok" => 2,
                "harga_beli" => "30000.6",
                "harga_jual" => "Rp34,501",
                "expired_date" => "6/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "DIANE",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "174,611.47",
                "harga_jual" => "Rp200,803",
                "expired_date" => "8/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "DRAMAMINE TAB",
                "satuan" => "TAB",
                "stok" => 10,
                "harga_beli" => "2,400",
                "harga_jual" => "Rp2,760",
                "expired_date" => "7/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ZINC TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "7,500",
                "harga_jual" => "Rp8,625",
                "expired_date" => "12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "HISTIGO TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "9,500",
                "harga_jual" => "Rp10,925",
                "expired_date" => "2/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "MERISLON 6 MG ",
                "satuan" => "TAB",
                "stok" => 10,
                "harga_beli" => "61,000",
                "harga_jual" => "Rp70,150",
                "expired_date" => "7/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SUPER TETRA",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "8,400",
                "harga_jual" => "Rp9,660",
                "expired_date" => "1/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CIPROFLOXACIN 500 MG ",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "6,850",
                "harga_jual" => "Rp7,878",
                "expired_date" => "3/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "COTRIMOXAZOLE TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "4,500",
                "harga_jual" => "Rp5,175",
                "expired_date" => "7/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "AMOXICILLIN 500 MG (HJ)",
                "satuan" => "STRIP",
                "stok" => 12,
                "harga_beli" => "5,100",
                "harga_jual" => "Rp5,865",
                "expired_date" => "12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ALBOTHYL 5 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "29,000",
                "harga_jual" => "Rp33,350",
                "expired_date" => "1/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ERLAMYCETIN TETES TELINGA",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "10,450",
                "harga_jual" => "Rp12,018",
                "expired_date" => "9/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ERLAMYCETIN TETES MATA 0.5%",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11,000",
                "harga_jual" => "Rp12,650",
                "expired_date" => "6/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CENDO XITROL BTL 5 ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "33285",
                "harga_jual" => "Rp38,278",
                "expired_date" => "3/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CENDO XITROL MDS",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "27,100",
                "harga_jual" => "Rp31,165",
                "expired_date" => "8/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "KETOCONAZOLE CR 2% 10GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "6200",
                "harga_jual" => "Rp7,130",
                "expired_date" => "1/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ICHTYOL SALEP",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "8582",
                "harga_jual" => "Rp9,869",
                "expired_date" => "4/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "MICONAZOLE CR",
                "satuan" => "TUBE",
                "stok" => 7,
                "harga_beli" => "5,100",
                "harga_jual" => "Rp5,865",
                "expired_date" => "1/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BETASON-N CR 5 GR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "12900",
                "harga_jual" => "Rp14,835",
                "expired_date" => "6/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BENOSON-N CR 5 GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "19,500",
                "harga_jual" => "Rp22,425",
                "expired_date" => "11/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "MYCO-Z 10GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "101,000",
                "harga_jual" => "Rp116,150",
                "expired_date" => "3/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SCABIMITE CR 10 GR",
                "satuan" => "TUBE",
                "stok" => 3,
                "harga_beli" => "48,652.52",
                "harga_jual" => "Rp55,950",
                "expired_date" => "6/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GENOINT ",
                "satuan" => "TUBE",
                "stok" => 3,
                "harga_beli" => "6,534",
                "harga_jual" => "Rp7,514",
                "expired_date" => "12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BUFACORT-N CR 5 GR",
                "satuan" => "TUBE",
                "stok" => 3,
                "harga_beli" => "8,000",
                "harga_jual" => "Rp9,200",
                "expired_date" => "3/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BIOPLACENTON",
                "satuan" => "TUBE",
                "stok" => 3,
                "harga_beli" => "25,999",
                "harga_jual" => "Rp29,899",
                "expired_date" => "11/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SAGESTAM CR 10 GR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "15517",
                "harga_jual" => "Rp17,845",
                "expired_date" => "9/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "KLODERMA OINT 10GR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "40,530",
                "harga_jual" => "Rp46,610",
                "expired_date" => "5/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "INERSON CR 15GR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "80,000",
                "harga_jual" => "Rp92,000",
                "expired_date" => "8/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "LAFALOS CR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "15609.6",
                "harga_jual" => "Rp17,951",
                "expired_date" => "5/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ACYCLOVIR CR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "8200",
                "harga_jual" => "Rp9,430",
                "expired_date" => "5/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "TRICOFLEM INJ (SUNTIK KB)",
                "satuan" => "VIAL",
                "stok" => 20,
                "harga_beli" => "182,700",
                "harga_jual" => "Rp210,105",
                "expired_date" => "4/2028",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CYCOFLEM INJ (SUNTIK KB)",
                "satuan" => "VIAL",
                "stok" => 20,
                "harga_beli" => "194,600",
                "harga_jual" => "Rp223,790",
                "expired_date" => "8/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "NEUROSANBE INJ",
                "satuan" => "AMPUL",
                "stok" => 16,
                "harga_beli" => "13050",
                "harga_jual" => "Rp14,500",
                "expired_date" => "6/2026",
                "category" => ""
            ],
            [
                "sku" => "",
                "name" => "YAKULT LIGHT (LESS SUGAR)",
                "satuan" => "PACK",
                "stok" => 0,
                "harga_beli" => "2,260",
                "harga_jual" => "Rp2,599",
                "expired_date" => "-",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "YAKULT ORIGINAL",
                "satuan" => "PACK",
                "stok" => 36,
                "harga_beli" => "1,780",
                "harga_jual" => "Rp2,047",
                "expired_date" => "09/2023",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "KIRANTI ORANGE JUICE",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "7,000",
                "harga_jual" => "Rp8,050",
                "expired_date" => "07/2024",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "KIRANTI ORIGINAL",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "6300",
                "harga_jual" => "Rp7,245",
                "expired_date" => "-",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "LARUTAN CAP BADAK JERUK",
                "satuan" => "CAN",
                "stok" => 2,
                "harga_beli" => "5,583.30",
                "harga_jual" => "Rp6,421",
                "expired_date" => "03/2025",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "ORONAMIN C",
                "satuan" => "BTL",
                "stok" => 12,
                "harga_beli" => "5460",
                "harga_jual" => "Rp6,279",
                "expired_date" => "6/2024",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "ION WATER 350ML",
                "satuan" => "BTL",
                "stok" => 24,
                "harga_beli" => "5400",
                "harga_jual" => "Rp6,210",
                "expired_date" => "6/2024",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "FIBEMINI ",
                "satuan" => "BTL",
                "stok" => 12,
                "harga_beli" => "6100",
                "harga_jual" => "Rp7,015",
                "expired_date" => "6/2024",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "POCARI SWEAT SACH 13G",
                "satuan" => "SACH",
                "stok" => 20,
                "harga_beli" => "1636.36",
                "harga_jual" => "Rp1,882",
                "expired_date" => "6/2024",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "SOYJOY COKLAT",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8378.35",
                "harga_jual" => "Rp9,635",
                "expired_date" => "06/2024",
                "category" => "MAKANAN"
            ],
            [
                "sku" => "",
                "name" => "SOYJOY BLUEBERRY",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8378.35",
                "harga_jual" => "Rp9,635",
                "expired_date" => "06/2024",
                "category" => "MAKANAN"
            ],
            [
                "sku" => "",
                "name" => "SOYJOY STRAW",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8378.35",
                "harga_jual" => "Rp9,635",
                "expired_date" => "06/2024",
                "category" => "MAKANAN"
            ],
            [
                "sku" => "",
                "name" => "SOYJOY DANISH CHEESE",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8378.35",
                "harga_jual" => "Rp9,635",
                "expired_date" => "06/2024",
                "category" => "MAKANAN"
            ],
            [
                "sku" => "",
                "name" => "SOYJOY TROPICAL ",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8378.35",
                "harga_jual" => "Rp9,635",
                "expired_date" => "06/2024",
                "category" => "MAKANAN"
            ],
            [
                "sku" => "",
                "name" => "SOYJOY LEKKERS NUTS",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8378.35",
                "harga_jual" => "Rp9,635",
                "expired_date" => "06/2024",
                "category" => "MAKANAN"
            ]
        ];

        foreach ($produk as $key => $value) {
            $category = Kategori::whereName($value['category'])->first();
            if (!$category) {
                $category = Kategori::create(['name' => $value['category']]);
            }

            Produk::create([
                "id_kategori" => $category->id,
                "sku" => mb_substr($value['category'] ?? '', 0, 4) . preg_replace('/\b(\w)\w*\W*/', '\1', $value['name'] ?? '') . $key,
                "name" => $value['name'],
                "satuan" => $value['satuan'],
                "stok" => $value['stok'],
                "harga_beli" => $value['harga_beli'],
                "harga_jual" => $value['harga_jual'],
                "expired_date" => $value['expired_date'],
                "merk" => "",
                "diskon" => 0
            ]);
        }
    }
}
