<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Produk;
use App\Models\Satuan;
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
                "harga_jual" => "8000",
                "expired_date" => "01/07/2027",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "LODECON FORTE TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "4950",
                "harga_jual" => "5500",
                "expired_date" => "01/12/2024",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "ALPARA TAB",
                "satuan" => "STRIP",
                "stok" => 7,
                "harga_beli" => "9000",
                "harga_jual" => "11000",
                "expired_date" => "01/03/2026",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "FLUTAMOL KAPL",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "4230",
                "harga_jual" => "4700",
                "expired_date" => "01/1/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "GRANTUSIF TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "8640",
                "harga_jual" => "7000",
                "expired_date" => "01/04/2027",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "TERRA-F",
                "satuan" => "STRIP",
                "stok" => 0,
                "harga_beli" => "6480",
                "harga_jual" => "7200",
                "expired_date" => "-",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "FLUCADEX TAB",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "9000",
                "harga_jual" => "11000",
                "expired_date" => "01/06/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "DECOLSIN KAPS",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "2925",
                "harga_jual" => "3500",
                "expired_date" => "01/03/2026",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "TUZALOS KAPL",
                "satuan" => "STRIP",
                "stok" => 8,
                "harga_beli" => "4750.8",
                "harga_jual" => "5500",
                "expired_date" => "01/12/2024",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "STOP COLD",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "3100",
                "harga_jual" => "4000",
                "expired_date" => "01/03/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "PANADOL COLD & FLU",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "14500",
                "harga_jual" => "17000",
                "expired_date" => "01/02/2026",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "INZANA TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "1800",
                "harga_jual" => "2000",
                "expired_date" => "01/11/2024",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "BODREX FLU & BATUK PE TAB",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "2450",
                "harga_jual" => "3000",
                "expired_date" => "01/07/2026",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "BODREX FLU & BATUK BRDHK PE",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "2080",
                "harga_jual" => "3000",
                "expired_date" => "01/08/2024",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "ULTRAFLU EXTRA (HIJAU) TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "3100",
                "harga_jual" => "3500",
                "expired_date" => "01/05/2027",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "ULTAFLU PE TAB (PUTIH)",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "3100",
                "harga_jual" => "3600",
                "expired_date" => "01/05/2027",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "MIXAGRIP FLU & BATUK (HIJAU)",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "2700",
                "harga_jual" => "3000",
                "expired_date" => "01/05/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "MIXAGRIP FLU (KUNING)",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "2700",
                "harga_jual" => "3000",
                "expired_date" => "01/06/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "KONIDIN TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2700",
                "harga_jual" => "3000",
                "expired_date" => "01/02/2026",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "DECOLGEN FX TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "6466.75",
                "harga_jual" => "7000",
                "expired_date" => "01/1/2026",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "PARAMEX FLU & BATUK TAB ",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "2450",
                "harga_jual" => "3100",
                "expired_date" => "01/09/2023",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "PROCOLD FLU ",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "3500",
                "harga_jual" => "4000",
                "expired_date" => "01/05/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "PROCOLD FLU & BATUK",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "4000",
                "harga_jual" => "4500",
                "expired_date" => "01/12/2024",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "NOZA TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "2700",
                "harga_jual" => "3000",
                "expired_date" => "01/04/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "DECOLGEN TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "2600",
                "harga_jual" => "3000",
                "expired_date" => "01/12/2025",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "SANAFLU TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "2700",
                "harga_jual" => "3000",
                "expired_date" => "01/05/2024",
                "category" => "PREKURSOR"
            ],
            [
                "sku" => "",
                "name" => "PARAMEX NYERI OTOT ",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2200",
                "harga_jual" => "3000",
                "expired_date" => "01/10/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PAMOL TAB",
                "satuan" => "STRIP",
                "stok" => 8,
                "harga_beli" => "10233",
                "harga_jual" => "12000",
                "expired_date" => "01/11/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PANADOL TAB (BIRU)",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "10500",
                "harga_jual" => "12500",
                "expired_date" => "01/08/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PANADOL EXTRA TAB (MERAH)",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "12700",
                "harga_jual" => "14600",
                "expired_date" => "01/04/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "DUMIN 500MG TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "7150",
                "harga_jual" => "8000",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MIRASIC 500MG TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "4500",
                "harga_jual" => "5500",
                "expired_date" => "01/08/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SANMOL FORTE TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "2700",
                "harga_jual" => "3000",
                "expired_date" => "01/10/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SUMAGESIC TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2450",
                "harga_jual" => "3000",
                "expired_date" => "01/03/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SANMOL 500 MG TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "2218",
                "harga_jual" => "2500",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PUYER CAP WALANG KERIK",
                "satuan" => "SACH",
                "stok" => 48,
                "harga_beli" => "658.3",
                "harga_jual" => "1000",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PUDER CAP 38 SAKIT KEPALA",
                "satuan" => "SACH",
                "stok" => 24,
                "harga_beli" => "658.3",
                "harga_jual" => "1000",
                "expired_date" => "01/12/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BODREX TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "4400",
                "harga_jual" => "5000",
                "expired_date" => "01/03/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "INZA TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "2700",
                "harga_jual" => "3000",
                "expired_date" => "01/11/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BRONCHIFAR PLUS TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "5580",
                "harga_jual" => "6200",
                "expired_date" => "01/04/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BISOLVON TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "24650.2",
                "harga_jual" => "29500",
                "expired_date" => "01/1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "POLDAN MIG TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "3500",
                "harga_jual" => "4000",
                "expired_date" => "01/08/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OSKADON SP ",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "1800",
                "harga_jual" => "3000",
                "expired_date" => "01/03/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "NEO RHEUMACYL TAB",
                "satuan" => "STRIP",
                "stok" => 46,
                "harga_beli" => "4950",
                "harga_jual" => "6000",
                "expired_date" => "01/03/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OSKADON TAB (BIRU)",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "1800",
                "harga_jual" => "2000",
                "expired_date" => "01/02/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PARAMEX TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2200",
                "harga_jual" => "2500",
                "expired_date" => "01/12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SARIDON TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "4000",
                "harga_jual" => "4500",
                "expired_date" => "01/07/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BIOGESIC TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2450",
                "harga_jual" => "3000",
                "expired_date" => "01/09/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PUYER BINTANG TOEDJOE",
                "satuan" => "SACH",
                "stok" => 120,
                "harga_beli" => "658.3",
                "harga_jual" => "1000",
                "expired_date" => "01/05/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BODREX MIGRA TAB",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "2450",
                "harga_jual" => "3000",
                "expired_date" => "01/07/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BODREX EXTRA TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2200",
                "harga_jual" => "5000",
                "expired_date" => "01/02/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "NEO NAPACIN TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2850",
                "harga_jual" => "3000",
                "expired_date" => "01/07/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MUCOHEXIN TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "2600",
                "harga_jual" => "3000",
                "expired_date" => "01/12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MEXTRIL TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "2700",
                "harga_jual" => "3000",
                "expired_date" => "01/02/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOMIX PEPPERMINT",
                "satuan" => "SACH",
                "stok" => 15,
                "harga_beli" => "2250",
                "harga_jual" => "2500",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOMIX JERUK NIPIS",
                "satuan" => "SACH",
                "stok" => 15,
                "harga_beli" => "2250",
                "harga_jual" => "2500",
                "expired_date" => "01/02/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOMIX KIDS STRW ",
                "satuan" => "SACH",
                "stok" => 5,
                "harga_beli" => "1400",
                "harga_jual" => "2000",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOMIX KIDS MADU",
                "satuan" => "SACH",
                "stok" => 11,
                "harga_beli" => "1350",
                "harga_jual" => "2000",
                "expired_date" => "01/04/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ORPHEN TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "1350",
                "harga_jual" => "2000",
                "expired_date" => "01/09/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "INSOVEN KAPS",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "5600",
                "harga_jual" => "6500",
                "expired_date" => "01/05/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BODREXIN TAB",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "3500",
                "harga_jual" => "4000",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "INHALER LANG",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "6752.8",
                "harga_jual" => "8000",
                "expired_date" => "01/11/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK ANGIN CARE (ROLL ON)",
                "satuan" => "BTL",
                "stok" => 12,
                "harga_beli" => "11000",
                "harga_jual" => "12700",
                "expired_date" => "01/07/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PLOSSA HIJAU",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "11100",
                "harga_jual" => "13000",
                "expired_date" => "01/12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PLOSSA BIRU",
                "satuan" => "PCS",
                "stok" => 5,
                "harga_beli" => "11100",
                "harga_jual" => "13000",
                "expired_date" => "01/12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PLOSSA HOT MERAH",
                "satuan" => "PCS",
                "stok" => 6,
                "harga_beli" => "11100",
                "harga_jual" => "13000",
                "expired_date" => "01/11/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE PRESS RELAX STRONG",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "11250",
                "harga_jual" => "13000",
                "expired_date" => "01/03/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE LAVENDER",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "12832",
                "harga_jual" => "15000",
                "expired_date" => "01/03/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE STRONG",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "12832",
                "harga_jual" => "15000",
                "expired_date" => "01/05/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE MKP",
                "satuan" => "PCS",
                "stok" => 3,
                "harga_beli" => "12832",
                "harga_jual" => "15000",
                "expired_date" => "01/08/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE GREEN TEA",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "12832",
                "harga_jual" => "15000",
                "expired_date" => "01/1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE CITRUS",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "12832",
                "harga_jual" => "15000",
                "expired_date" => "01/08/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FRESH CARE SPLASH FRUITY",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "12832",
                "harga_jual" => "15000",
                "expired_date" => "01/1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SAFE CARE ROLL ON",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "15150.4",
                "harga_jual" => "17500",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PURE KIDS INHALANT",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "49810",
                "harga_jual" => "58600",
                "expired_date" => "01/03/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "COPAL CHEST RUB",
                "satuan" => "TUBE",
                "stok" => 3,
                "harga_beli" => "15540",
                "harga_jual" => "18000",
                "expired_date" => "01/02/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK ANGIN LANG ",
                "satuan" => "PCK",
                "stok" => 1,
                "harga_beli" => "17760",
                "harga_jual" => "20500",
                "expired_date" => "01/12/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CESSA FEDROP (MERAH)",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28860",
                "harga_jual" => "33000",
                "expired_date" => "01/05/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SIRUP INDRA 10 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "3180.2",
                "harga_jual" => "4000",
                "expired_date" => "01/1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CESSA HAPPY NOSE (BIRU)",
                "satuan" => "BTL",
                "stok" => 9,
                "harga_beli" => "28860",
                "harga_jual" => "34000",
                "expired_date" => "01/05/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ROHTO COOL",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "16900",
                "harga_jual" => "20000",
                "expired_date" => "01/03/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "INSTO DRY EYES 7.5ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "13200",
                "harga_jual" => "15000",
                "expired_date" => "01/1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "INSTO REG 7.5ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "14100",
                "harga_jual" => "14700",
                "expired_date" => "01/12/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "INSTO REG 15ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "19100",
                "harga_jual" => "22200",
                "expired_date" => "01/05/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ROHTO TETES MATA (PUTIH)",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "11000",
                "harga_jual" => "13000",
                "expired_date" => "01/12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CENDO EYEFRESH ",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "34650",
                "harga_jual" => "38500",
                "expired_date" => "01/12/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CENDO EYEFRESH MDS",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "25470",
                "harga_jual" => "28300",
                "expired_date" => "01/11/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CENDO CENFRESH MDS",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "25560",
                "harga_jual" => "28400",
                "expired_date" => "01/09/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "DEGIROL TAB",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "12800",
                "harga_jual" => "14500",
                "expired_date" => "01/05/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BETADINE GARLE 100 ML ",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "22500",
                "harga_jual" => "26000",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BETADINE GARGLE 190 ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "36630",
                "harga_jual" => "40700",
                "expired_date" => "01/12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LISTERINE COOL MINT 100 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "8380.5",
                "harga_jual" => "10000",
                "expired_date" => "01/12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LISTERINE COOL MINT 250 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "23400",
                "harga_jual" => "27000",
                "expired_date" => "01/12/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ENKASARI HERBAL ",
                "satuan" => "BTL",
                "stok" => 5,
                "harga_beli" => "20962",
                "harga_jual" => "22000",
                "expired_date" => "01/12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GENTIANT VIOLET",
                "satuan" => "BTL",
                "stok" => 24,
                "harga_beli" => "3321.7",
                "harga_jual" => "4000",
                "expired_date" => "01/04/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ASTRIA 4MG",
                "satuan" => "STRIP",
                "stok" => 0,
                "harga_beli" => "39600",
                "harga_jual" => "44000",
                "expired_date" => "-",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "ENERVON C 4'S TAB",
                "satuan" => "STRIP",
                "stok" => 23,
                "harga_beli" => "4566.4",
                "harga_jual" => "5500",
                "expired_date" => "01/08/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "ENERVON C 30'S",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "33624",
                "harga_jual" => "39000",
                "expired_date" => "01/04/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "REDOXON TRIPLE ACTION 15'S",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "43068",
                "harga_jual" => "49500",
                "expired_date" => "01/05/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "CDR 10'S",
                "satuan" => "TUBE",
                "stok" => 0,
                "harga_beli" => "46298",
                "harga_jual" => "53500",
                "expired_date" => "-",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "PHARMATON FORMULA ",
                "satuan" => "STRIP",
                "stok" => 8,
                "harga_beli" => "24208",
                "harga_jual" => "28000",
                "expired_date" => "01/08/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "IMBOOST FORCE TAB",
                "satuan" => "TAB",
                "stok" => 20,
                "harga_beli" => "7204",
                "harga_jual" => "8800",
                "expired_date" => "01/11/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "IMBOOST TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "35453.4",
                "harga_jual" => "41000",
                "expired_date" => "01/1/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "NEUROBION 1000 MG TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "24350",
                "harga_jual" => "28000",
                "expired_date" => "01/08/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "NEUROBION 5000 MG TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "42500",
                "harga_jual" => "49000",
                "expired_date" => "01/08/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "CEREBROVIT X-CEL",
                "satuan" => "BOX",
                "stok" => 3,
                "harga_beli" => "18083",
                "harga_jual" => "20000",
                "expired_date" => "01/11/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "THERAGRAN-M ",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "22000",
                "harga_jual" => "25300",
                "expired_date" => "01/11/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIT D3 IPI",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "10999",
                "harga_jual" => "13000",
                "expired_date" => "01/05/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "ZINC PLUS IPI",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "8499.74",
                "harga_jual" => "10000",
                "expired_date" => "01/07/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIT B1 IPI",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "5045.45",
                "harga_jual" => "6000",
                "expired_date" => "01/05/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIT B12 IPI",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "5045.45",
                "harga_jual" => "6000",
                "expired_date" => "01/10/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIT A IPI",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "5045.45",
                "harga_jual" => "6000",
                "expired_date" => "01/1/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIT C IPI",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "6100",
                "harga_jual" => "7000",
                "expired_date" => "-",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIT B KOMPLEX IPI",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "6000",
                "harga_jual" => "6500",
                "expired_date" => "-",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "XONCE ORANGE TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "1980",
                "harga_jual" => "2300",
                "expired_date" => "01/09/2023",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VITACIMIN LEMON TAB",
                "satuan" => "STRIP",
                "stok" => 27,
                "harga_beli" => "1576.2",
                "harga_jual" => "2000",
                "expired_date" => "01/07/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "WELMOVE ",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "15567.7",
                "harga_jual" => "19000",
                "expired_date" => "01/07/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "MY WELL VIT C+ZN",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "5661",
                "harga_jual" => "6600",
                "expired_date" => "01/05/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VITALONG C KAPS",
                "satuan" => "STRIP",
                "stok" => 24,
                "harga_beli" => "5550",
                "harga_jual" => "6500",
                "expired_date" => "01/04/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "RENOVIT @4KAPL",
                "satuan" => "STRIP",
                "stok" => 21,
                "harga_beli" => "9990",
                "harga_jual" => "11500",
                "expired_date" => "01/1/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "RENOVIT GOLD @4KPL",
                "satuan" => "STRIP",
                "stok" => 23,
                "harga_beli" => "11510.7",
                "harga_jual" => "13200",
                "expired_date" => "01/02/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "HOLISTICARE ESTER C 30'S ",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "45343.5",
                "harga_jual" => "52300",
                "expired_date" => "01/08/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "HOLISTICARE ESTER C 4'S ",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "6271.5",
                "harga_jual" => "7200",
                "expired_date" => "01/1/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "FATIGON SPIRIT 6'S",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "8775",
                "harga_jual" => "10091",
                "expired_date" => "01/03/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "HEMAVITON ACTION",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "6250",
                "harga_jual" => "7188",
                "expired_date" => "01/03/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "HEMAVITON STAMINA PLUS",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "6025",
                "harga_jual" => "6929",
                "expired_date" => "01/05/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "BECOM C ",
                "satuan" => "STRIP",
                "stok" => 15,
                "harga_beli" => "19440",
                "harga_jual" => "23000",
                "expired_date" => "01/05/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "BECOM ZET",
                "satuan" => "STRIP",
                "stok" => 14,
                "harga_beli" => "26122.5",
                "harga_jual" => "31000",
                "expired_date" => "01/03/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VERMOX TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "19083",
                "harga_jual" => "22000",
                "expired_date" => "01/09/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "COMBANTRIN SUSP",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "17525",
                "harga_jual" => "20100",
                "expired_date" => "01/04/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "COMBANTRIN 250 MG TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "17280",
                "harga_jual" => "19200",
                "expired_date" => "01/06/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "GUANISTREP SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "7000",
                "harga_jual" => "8500",
                "expired_date" => "01/02/2027",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "DIAPET ANAK SACH",
                "satuan" => "SACH",
                "stok" => 6,
                "harga_beli" => "1665",
                "harga_jual" => "2000",
                "expired_date" => "01/03/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "PHAROLIT",
                "satuan" => "SACH",
                "stok" => 10,
                "harga_beli" => "1800",
                "harga_jual" => "2000",
                "expired_date" => "01/11/2023",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "DIAPET KAPS 10'S",
                "satuan" => "STRIP",
                "stok" => 12,
                "harga_beli" => "4597.3",
                "harga_jual" => "5500",
                "expired_date" => "01/12/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "NORIT",
                "satuan" => "PCK",
                "stok" => 7,
                "harga_beli" => "14615",
                "harga_jual" => "17000",
                "expired_date" => "01/05/2028",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "DIAPET NR CAPS 4'S",
                "satuan" => "STRIP",
                "stok" => 24,
                "harga_beli" => "2748.4",
                "harga_jual" => "3500",
                "expired_date" => "01/09/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "PROMAG HERBAL (GAZERO)",
                "satuan" => "SACH",
                "stok" => 18,
                "harga_beli" => "2200",
                "harga_jual" => "3000",
                "expired_date" => "01/12/2024",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "NEW DIATABS ",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "3000",
                "harga_jual" => "4000",
                "expired_date" => "01/06/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "ENTROSTOP TAB",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "7500",
                "harga_jual" => "8000",
                "expired_date" => "01/04/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "PROMAG TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "6983.3",
                "harga_jual" => "8200",
                "expired_date" => "01/08/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "MYLANTA TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "7900",
                "harga_jual" => "9000",
                "expired_date" => "01/1/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "ANTASIDA DOEN TAB",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "2000",
                "harga_jual" => "2500",
                "expired_date" => "01/04/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "TRIOCID",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "3000",
                "harga_jual" => "3500",
                "expired_date" => "01/06/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "SANMAG SYR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28900",
                "harga_jual" => "33500",
                "expired_date" => "01/1/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "HUFAMAG PLUS SYR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "8800",
                "harga_jual" => "10200",
                "expired_date" => "01/10/2024",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "ANTIMO TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "4950",
                "harga_jual" => "6000",
                "expired_date" => "01/04/2027",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "MAAGTRAL TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "4500",
                "harga_jual" => "5500",
                "expired_date" => "01/05/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "MYLANTA SYR 150 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "38500",
                "harga_jual" => "44500",
                "expired_date" => "01/05/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "MYLANTA SYR 50 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "14500",
                "harga_jual" => "17000",
                "expired_date" => "01/1/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "PROMAG SUSP 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11000",
                "harga_jual" => "44500",
                "expired_date" => "01/1/2026",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "POLYSILANE SUSP 180ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "32222",
                "harga_jual" => "35500",
                "expired_date" => "01/10/2025",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "POLYSILANE SUSP 100ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "21900",
                "harga_jual" => "24100",
                "expired_date" => "-",
                "category" => "PENCERNAAN"
            ],
            [
                "sku" => "",
                "name" => "AMBEVEN ",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "16317",
                "harga_jual" => "18800",
                "expired_date" => "01/12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "DIMENHYDRINATE TAB",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "2700",
                "harga_jual" => "3500",
                "expired_date" => "01/10/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MICROLAX GEL",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "21000",
                "harga_jual" => "24000",
                "expired_date" => "01/06/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ACTIFED COUGH SYR (MERAH)",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "61479.3",
                "harga_jual" => "68000",
                "expired_date" => "01/10/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BODREXIN PILEK ALERGI SYR PE",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11400",
                "harga_jual" => "12700",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ALLERIN expired_date SYR 120ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "21000",
                "harga_jual" => "24200",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HUFAGRIP SYR (KUNING)",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "21998.6",
                "harga_jual" => "25500",
                "expired_date" => "01/10/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HUFAGRIP BP SYR (HIJAU)",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "19744",
                "harga_jual" => "20200",
                "expired_date" => "01/12/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HUFAGRIP PILEK SYR (BIRU)",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15444.3",
                "harga_jual" => "17200",
                "expired_date" => "01/10/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ZENIREX SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "7000",
                "harga_jual" => "8000",
                "expired_date" => "01/02/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "FASIDOL DROP",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11700",
                "harga_jual" => "13000",
                "expired_date" => "01/04/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANAKONIDIN SYR 30 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "7500",
                "harga_jual" => "8700",
                "expired_date" => "01/03/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANAKONIDIN SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11700",
                "harga_jual" => "13700",
                "expired_date" => "01/04/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "VICKS FORMULA 44 27 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "8800",
                "harga_jual" => "10200",
                "expired_date" => "01/08/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "VICKS FORMULA 44 ANAK 27ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "9700",
                "harga_jual" => "11200",
                "expired_date" => "01/1/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOOL FEVER ADULT (DWS)",
                "satuan" => "PCS",
                "stok" => 0,
                "harga_beli" => "6678.5",
                "harga_jual" => "9000",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOOL FEVER ANAK-ANAK",
                "satuan" => "PCS",
                "stok" => 7,
                "harga_beli" => "6068",
                "harga_jual" => "7000",
                "expired_date" => "01/02/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOOL FEVER BABY",
                "satuan" => "PCS",
                "stok" => 12,
                "harga_beli" => "4884",
                "harga_jual" => "6000",
                "expired_date" => "01/12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BYE BYE FEVER BABY",
                "satuan" => "PCS",
                "stok" => 27,
                "harga_beli" => "6439.6",
                "harga_jual" => "7000",
                "expired_date" => "01/11/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BYE BYE FEVER ANAK",
                "satuan" => "PCS",
                "stok" => 18,
                "harga_beli" => "9167.4",
                "harga_jual" => "11500",
                "expired_date" => "01/12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TEMPRA SYR 30 ML ANGGUR",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "26500",
                "harga_jual" => "32000",
                "expired_date" => "01/09/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TEMPRA FORTE SYR 60 ML ORANGE",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "49995.5",
                "harga_jual" => "55000",
                "expired_date" => "01/03/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TEMPRA DROPS 15ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "53250",
                "harga_jual" => "57500",
                "expired_date" => "01/03/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "VICKS FORMULA 44 SYR 54ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "16700",
                "harga_jual" => "19200",
                "expired_date" => "01/10/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SANMOL SYRUP",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "19300",
                "harga_jual" => "21500",
                "expired_date" => "01/06/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SANMOL FORTE SYR",
                "satuan" => "BTL",
                "stok" => 5,
                "harga_beli" => "35100",
                "harga_jual" => "39000",
                "expired_date" => "01/05/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TREMENZA SYR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "25499.25",
                "harga_jual" => "31000",
                "expired_date" => "01/06/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ACTIFED expired_date SYR (HIJAU)",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "61479.35",
                "harga_jual" => "68000",
                "expired_date" => "01/10/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ACTIFED SYRUP (ORANGE)",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "61479.35",
                "harga_jual" => "68000",
                "expired_date" => "01/08/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "WOODS expired_date 100ML SYR",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "28000",
                "harga_jual" => "32200",
                "expired_date" => "01/06/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PARATUSIN SYR",
                "satuan" => "BTL",
                "stok" => 5,
                "harga_beli" => "38350",
                "harga_jual" => "44000",
                "expired_date" => "01/02/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "IKADRYL SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15800",
                "harga_jual" => "18200",
                "expired_date" => "01/08/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "IKADRYL SYR 100ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "20600",
                "harga_jual" => "24000",
                "expired_date" => "01/04/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "IKADRYL FLU SYR 60ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "18000",
                "harga_jual" => "20000",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BISOLVON EXTRA SYR 125ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "80500",
                "harga_jual" => "89000",
                "expired_date" => "01/12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BISOLVON EXTRA SYR 60ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "49500",
                "harga_jual" => "55000",
                "expired_date" => "01/07/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BISOLVON KIDS SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "43800",
                "harga_jual" => "48200",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "DEMACOLIN SYR",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "19440",
                "harga_jual" => "23500",
                "expired_date" => "01/09/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANAKONIDIN OBH SYR 30 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "7500",
                "harga_jual" => "9000",
                "expired_date" => "01/05/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANAKONIDIN OBH SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "12700",
                "harga_jual" => "14700",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "COPARCETIN KIDS SYR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "7450",
                "harga_jual" => "9000",
                "expired_date" => "01/04/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "VICKS FORMULA 44 SYR 100 ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "28170",
                "harga_jual" => "31300",
                "expired_date" => "01/11/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PIMTRAKOL SYR LEMON ",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "14000",
                "harga_jual" => "15500",
                "expired_date" => "01/06/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PIMTRAKOL SYR CHERRY",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15500",
                "harga_jual" => "17000",
                "expired_date" => "01/06/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TERMOREX PLUS SYR 30 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "8800",
                "harga_jual" => "10000",
                "expired_date" => "01/12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX ATT SYR 100ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "17500",
                "harga_jual" => "20000",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX ATT SYR 60ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "14100",
                "harga_jual" => "15500",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX COUGH&COLD SYR 100ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "17500",
                "harga_jual" => "19500",
                "expired_date" => "01/04/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX COUGH&COLD SYR 60ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "13200",
                "harga_jual" => "15000",
                "expired_date" => "01/02/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX COUGH&COLD SYR 30ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "7900",
                "harga_jual" => "10000",
                "expired_date" => "01/12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX M&E SYR 60ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "14400",
                "harga_jual" => "16000",
                "expired_date" => "01/05/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SILADEX M&ESYR 30ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "7900",
                "harga_jual" => "8700",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "COUNTERPAIN 30GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "42231",
                "harga_jual" => "49684",
                "expired_date" => "01/11/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "COUNTERPAIN 120GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "104229",
                "harga_jual" => "120000",
                "expired_date" => "01/05/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PEDITOX ",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "8800",
                "harga_jual" => "10200",
                "expired_date" => "01/04/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR STRONG TUBE 120G",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "31080",
                "harga_jual" => "32000",
                "expired_date" => "01/05/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR AROMATHERAPY TUBE 60G",
                "satuan" => "TUBE",
                "stok" => 3,
                "harga_beli" => "18648",
                "harga_jual" => "24200",
                "expired_date" => "01/05/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR AROMATHERAPY TUBE 120G",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "31080",
                "harga_jual" => "36000",
                "expired_date" => "01/08/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR TUBE 60G",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "18648",
                "harga_jual" => "22400",
                "expired_date" => "01/04/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR TUBE 120G",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "31080",
                "harga_jual" => "36000",
                "expired_date" => "01/1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KUTILOS",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "24500",
                "harga_jual" => "28200",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KALPANAX K CR 5GR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "14150",
                "harga_jual" => "16300",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KALPANAX K SALEP",
                "satuan" => "POT",
                "stok" => 1,
                "harga_beli" => "7000",
                "harga_jual" => "8500",
                "expired_date" => "01/08/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR STRONG BTL 120G",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "27861",
                "harga_jual" => "36000",
                "expired_date" => "01/05/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HOT IN CR AROMATHERAPY BTL 120GR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "31080",
                "harga_jual" => "36000",
                "expired_date" => "01/05/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HANSAPLAST KOYO HANGAT",
                "satuan" => "PCS",
                "stok" => 20,
                "harga_beli" => "6774.3",
                "harga_jual" => "8000",
                "expired_date" => "01/05/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOYO CABE",
                "satuan" => "PCS",
                "stok" => 16,
                "harga_beli" => "10125",
                "harga_jual" => "11500",
                "expired_date" => "01/02/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HANSAPLAST KOYO PANAS",
                "satuan" => "PCS",
                "stok" => 10,
                "harga_beli" => "6774.3",
                "harga_jual" => "8000",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SALONPAS KOYO",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "5850",
                "harga_jual" => "7000",
                "expired_date" => "01/03/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SALONPAS KOYO HOT",
                "satuan" => "PCS",
                "stok" => 8,
                "harga_beli" => "5752",
                "harga_jual" => "7000",
                "expired_date" => "01/1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PAGODA SALEP",
                "satuan" => "POT",
                "stok" => 13,
                "harga_beli" => "6427.5",
                "harga_jual" => "7000",
                "expired_date" => "01/08/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TJING TJAU BALSEM 36GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "18737.8",
                "harga_jual" => "22000",
                "expired_date" => "01/05/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TJING TJAU BALSEM 20GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "12236",
                "harga_jual" => "14000",
                "expired_date" => "01/11/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SALEP 88",
                "satuan" => "POT",
                "stok" => 2,
                "harga_beli" => "10500",
                "harga_jual" => "12000",
                "expired_date" => "01/12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GPU KRIM 250G",
                "satuan" => "POT ",
                "stok" => 1,
                "harga_beli" => "25067.8",
                "harga_jual" => "29000",
                "expired_date" => "01/04/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GPU KRIM 150GR",
                "satuan" => "POT",
                "stok" => 1,
                "harga_beli" => "16187.8",
                "harga_jual" => "19000",
                "expired_date" => "01/03/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CANESTEN CR 10GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "40800",
                "harga_jual" => "47000",
                "expired_date" => "01/03/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "NEO ULTRASILINE CR ",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "10500",
                "harga_jual" => "13000",
                "expired_date" => "01/02/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BEDAK SALICYL CAP GAJAH 100G",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "7316",
                "harga_jual" => "8500",
                "expired_date" => "01/10/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HEROCYN BABY POWDER 100GR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "7548",
                "harga_jual" => "8700",
                "expired_date" => "01/12/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HEROCYN BABY POWDER 200GR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "12099",
                "harga_jual" => "14000",
                "expired_date" => "01/07/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CALADINE POWDER 100GR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "14652",
                "harga_jual" => "17000",
                "expired_date" => "01/07/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CALADINE POWDER 60GR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "10434",
                "harga_jual" => "12000",
                "expired_date" => "01/07/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HEROCYN 85GR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11322",
                "harga_jual" => "13000",
                "expired_date" => "01/05/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SALONPAS JET SPRAY",
                "satuan" => "CAN",
                "stok" => 1,
                "harga_beli" => "67950",
                "harga_jual" => "75500",
                "expired_date" => "01/10/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "YB AEROSOL ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "113850",
                "harga_jual" => "126500",
                "expired_date" => "01/11/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BALSEM LANG 40 GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "15725",
                "harga_jual" => "18000",
                "expired_date" => "01/12/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BALSEM LANG 20GR",
                "satuan" => "POT",
                "stok" => 6,
                "harga_beli" => "8523.8",
                "harga_jual" => "10500",
                "expired_date" => "01/07/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BALSEM LANG 10 GR",
                "satuan" => "POT",
                "stok" => 2,
                "harga_beli" => "4950",
                "harga_jual" => "5700",
                "expired_date" => "01/06/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GELIGA BALSEM OTOT 40GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "15962.5",
                "harga_jual" => "18000",
                "expired_date" => "01/05/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GELIGA BALSEM OTOT 20GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "8048",
                "harga_jual" => "9300",
                "expired_date" => "01/05/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GELIGA BALSEM OTOT 10GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "4690",
                "harga_jual" => "5500",
                "expired_date" => "01/05/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GPU MINYAK URUT SEREH 30ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "14705",
                "harga_jual" => "17300",
                "expired_date" => "01/04/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GPU MINYAK URUT SEREH 60ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "16150",
                "harga_jual" => "19000",
                "expired_date" => "01/05/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BALPIRIK EXTRA STRONG 20GR",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "10499.5",
                "harga_jual" => "12000",
                "expired_date" => "01/1/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "NOSIB CR",
                "satuan" => "POT",
                "stok" => 1,
                "harga_beli" => "11100",
                "harga_jual" => "12800",
                "expired_date" => "01/11/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LION HERO BALSEM",
                "satuan" => "POT",
                "stok" => 1,
                "harga_beli" => "12210",
                "harga_jual" => "14000",
                "expired_date" => "01/09/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TELON LANG PLUS 30 ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "9064.6",
                "harga_jual" => "12000",
                "expired_date" => "01/05/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MEDICATED OIL 20ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "23310",
                "harga_jual" => "28000",
                "expired_date" => "01/04/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TELON LANG 30 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "10200",
                "harga_jual" => "11000",
                "expired_date" => "01/11/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MY BABY TELON PLIS LAVENDER 60ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15288",
                "harga_jual" => "18000",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MY BABY MINYAK TELON 150ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "32550.75",
                "harga_jual" => "37500",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK TAWON CC",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "21753",
                "harga_jual" => "25000",
                "expired_date" => "01/04/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK TAWON DD",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28490.3",
                "harga_jual" => "33000",
                "expired_date" => "01/10/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK TAWON EE",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "46176",
                "harga_jual" => "53000",
                "expired_date" => "01/02/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK TAWON FF",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "65231.3",
                "harga_jual" => "75000",
                "expired_date" => "01/11/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PARCOK 25 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "6438",
                "harga_jual" => "7500",
                "expired_date" => "01/04/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BAN LENG 50 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "26900",
                "harga_jual" => "31000",
                "expired_date" => "01/05/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK OTOT GELIGA 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "27269.3",
                "harga_jual" => "31500",
                "expired_date" => "01/05/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK OTOT GELIGA 30 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "13838.3",
                "harga_jual" => "16000",
                "expired_date" => "01/1/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK GANDAPURA 30 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "7030.34",
                "harga_jual" => "8000",
                "expired_date" => "01/02/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK GANDAPURA 60 ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "11932.5",
                "harga_jual" => "14000",
                "expired_date" => "",
                "category" => ""
            ],
            [
                "sku" => "",
                "name" => "MINYAK KAPAK 28 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "35739.8",
                "harga_jual" => "41000",
                "expired_date" => "01/1/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK KAPAK 14 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "20855.8",
                "harga_jual" => "24000",
                "expired_date" => "01/11/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK KAPAK 10 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "14850",
                "harga_jual" => "17000",
                "expired_date" => "01/04/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK KAPAK 5ML",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "9672.5",
                "harga_jual" => "12000",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK KAPPAK 3 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "5550",
                "harga_jual" => "6500",
                "expired_date" => "01/04/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK TELON CAP GAJAH 60 ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "15641",
                "harga_jual" => "18800",
                "expired_date" => "01/06/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MINYAK TELON CAP GAJAH 120ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "29936.7",
                "harga_jual" => "34500",
                "expired_date" => "01/03/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MKP CAP LANG 210ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "62992.5",
                "harga_jual" => "76500",
                "expired_date" => "01/05/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MKP CAP LANG 120ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "37920.8",
                "harga_jual" => "44500",
                "expired_date" => "01/04/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MKP CAP LANG 60ML",
                "satuan" => "BTL ",
                "stok" => 2,
                "harga_beli" => "15910.7",
                "harga_jual" => "22500",
                "expired_date" => "01/05/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MKP CAP LANG 30ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "9064.6",
                "harga_jual" => "12000",
                "expired_date" => "01/04/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "COUNTERPAIN COOL 15 GR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "22950",
                "harga_jual" => "27000",
                "expired_date" => "01/1/2023",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CURCUMA PLUS GROW STRAW 200ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "27417",
                "harga_jual" => "31500",
                "expired_date" => "01/12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CURCUMA PLUS SHARPY STRAW 60ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "14763",
                "harga_jual" => "17000",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CURCUMA PLUS SHARPY ORANGE 60ML ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "14763",
                "harga_jual" => "17000",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "APIALYS SYRUP",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "44500",
                "harga_jual" => "51200",
                "expired_date" => "01/02/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "APIALYS DROP",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "52500",
                "harga_jual" => "63000",
                "expired_date" => "-",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "ELKANA SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "26300",
                "harga_jual" => "31000",
                "expired_date" => "01/08/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "BIOLISIN SYR 60ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "14650",
                "harga_jual" => "17500",
                "expired_date" => "01/04/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "IMBOOST FORCE KIDS SYR 60 ML",
                "satuan" => "BTL ",
                "stok" => 2,
                "harga_beli" => "65212.5",
                "harga_jual" => "75000",
                "expired_date" => "01/04/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "IMBOOST KIDS SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "37185",
                "harga_jual" => "43000",
                "expired_date" => "01/05/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "CAVIPLEX SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "9415.2",
                "harga_jual" => "11000",
                "expired_date" => "01/1/2026",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VITABUMIN SYR 130ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "56508",
                "harga_jual" => "65000",
                "expired_date" => "01/05/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "BIOLYSIN KIDS TAB STRAW",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15542",
                "harga_jual" => "17800",
                "expired_date" => "01/1/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "BIOLYSIN KIDS TAB ORANGE ",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15542",
                "harga_jual" => "17800",
                "expired_date" => "01/11/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "BIOLYSIN KIDS TAB ANGGUR ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15542",
                "harga_jual" => "17800",
                "expired_date" => "01/12/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "SAKATONIK ABC STRAW ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15542",
                "harga_jual" => "17500",
                "expired_date" => "01/11/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "SAKATONIK ABC ANTARIKSA",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15542",
                "harga_jual" => "17500",
                "expired_date" => "01/05/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "FITKOM TAB STRAW",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15540",
                "harga_jual" => "18000",
                "expired_date" => "01/02/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "FITKOM TAB ORANGE",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15540",
                "harga_jual" => "18000",
                "expired_date" => "01/12/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "VIDORAN SMART TAB STRAW",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "12050",
                "harga_jual" => "14000",
                "expired_date" => "01/06/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "SIRPLUS ANGGUR SYR",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15540",
                "harga_jual" => "18000",
                "expired_date" => "01/1/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "SIRPLUS JERUK SYR",
                "satuan" => "BTL",
                "stok" => 5,
                "harga_beli" => "15540",
                "harga_jual" => "18000",
                "expired_date" => "01/1/2025",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "SANGOBION KIDS SYR 100 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "43200",
                "harga_jual" => "49700",
                "expired_date" => "01/07/2024",
                "category" => "SUPLEMEN"
            ],
            [
                "sku" => "",
                "name" => "STREPSILS ORIGINAL ",
                "satuan" => "SACH",
                "stok" => 10,
                "harga_beli" => "10072.7",
                "harga_jual" => "12000",
                "expired_date" => "01/02/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "STREPSILS COOL",
                "satuan" => "SACH",
                "stok" => 10,
                "harga_beli" => "10072.7",
                "harga_jual" => "12000",
                "expired_date" => "01/12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "STREPSILS HONEY LEMON",
                "satuan" => "SACH",
                "stok" => 8,
                "harga_beli" => "10072.7",
                "harga_jual" => "12000",
                "expired_date" => "01/1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANTANGIN PERMEN MADU MINT",
                "satuan" => "SACH",
                "stok" => 13,
                "harga_beli" => "1875",
                "harga_jual" => "2500",
                "expired_date" => "01/06/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "WOODS LOZ HONEY LEMON",
                "satuan" => "SACH",
                "stok" => 13,
                "harga_beli" => "4899.5",
                "harga_jual" => "6000",
                "expired_date" => "01/09/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "WOODS LOZ ORIG",
                "satuan" => "SACH",
                "stok" => 13,
                "harga_beli" => "4899.5",
                "harga_jual" => "6000",
                "expired_date" => "01/03/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "NUTRINIDRINK PWD 400 GR",
                "satuan" => "CAN",
                "stok" => 1,
                "harga_beli" => "188000",
                "harga_jual" => "206800",
                "expired_date" => "01/06/2024",
                "category" => "MINUMAN "
            ],
            [
                "sku" => "",
                "name" => "ETAWALIN PWD 200GR",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "102060",
                "harga_jual" => "113400",
                "expired_date" => "01/07/2025",
                "category" => "MINUMAN "
            ],
            [
                "sku" => "",
                "name" => "ROSAGEN ",
                "satuan" => "SACH",
                "stok" => 39,
                "harga_beli" => "25000",
                "harga_jual" => "29000",
                "expired_date" => "01/03/2025",
                "category" => "MINUMAN "
            ],
            [
                "sku" => "",
                "name" => "ETAWAKU 200GR",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "92700",
                "harga_jual" => "103000",
                "expired_date" => "01/04/2025",
                "category" => "MINUMAN "
            ],
            [
                "sku" => "",
                "name" => "DIABETASOL VANILLA 170GR",
                "satuan" => "BOX",
                "stok" => 2,
                "harga_beli" => "48996.3",
                "harga_jual" => "56500",
                "expired_date" => "01/11/2024",
                "category" => "MINUMAN "
            ],
            [
                "sku" => "",
                "name" => "ENTRASOL GOLD 170 GR",
                "satuan" => "BOX",
                "stok" => 2,
                "harga_beli" => "39988",
                "harga_jual" => "46000",
                "expired_date" => "01/08/2024",
                "category" => "MINUMAN "
            ],
            [
                "sku" => "",
                "name" => "TENSIONE ONEMED",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "375000",
                "harga_jual" => "487500",
                "expired_date" => "01/02/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TROPICANA SLIM DIABET @25",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "24420",
                "harga_jual" => "28000",
                "expired_date" => "01/05/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TROPICANA SLIM DIABET @50",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "43290",
                "harga_jual" => "50000",
                "expired_date" => "01/12/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LOSOSA 500GR",
                "satuan" => "BOX",
                "stok" => 2,
                "harga_beli" => "39998",
                "harga_jual" => "46000",
                "expired_date" => "01/05/2028",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "POLYSILANE TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "8444.4",
                "harga_jual" => "10000",
                "expired_date" => "01/04/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANTANGIN HABBATUSSAUDA 12'S",
                "satuan" => "SACH",
                "stok" => 60,
                "harga_beli" => "2900",
                "harga_jual" => "3500",
                "expired_date" => "01/05/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANTANGIN GINGER MINT 12'S",
                "satuan" => "SACH",
                "stok" => 0,
                "harga_beli" => "2900",
                "harga_jual" => "3500",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANTANGIN JRG MADU 12'S ",
                "satuan" => "SACH",
                "stok" => 0,
                "harga_beli" => "3150",
                "harga_jual" => "4000",
                "expired_date" => "-",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK ANGIN SACH",
                "satuan" => "SACH",
                "stok" => 66,
                "harga_beli" => "3150",
                "harga_jual" => "4000",
                "expired_date" => "01/06/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANTANGIN JRG TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "3150",
                "harga_jual" => "6000",
                "expired_date" => "01/08/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANTANGIN JUNIOR SACH",
                "satuan" => "BOX",
                "stok" => 2,
                "harga_beli" => "10900",
                "harga_jual" => "12500",
                "expired_date" => "01/06/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ESEMAG SACH",
                "satuan" => "BOX",
                "stok" => 4,
                "harga_beli" => "1700",
                "harga_jual" => "2000",
                "expired_date" => "01/10/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ESEMAG TAB",
                "satuan" => "STRIP",
                "stok" => 16,
                "harga_beli" => "4100",
                "harga_jual" => "5000",
                "expired_date" => "01/12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK LINU MINT SACH",
                "satuan" => "SACH",
                "stok" => 25,
                "harga_beli" => "2700",
                "harga_jual" => "3500",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK ANGIN SUGAR FREE SACH",
                "satuan" => "SACH",
                "stok" => 20,
                "harga_beli" => "3405",
                "harga_jual" => "4000",
                "expired_date" => "01/04/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK ANGIN FLU ",
                "satuan" => "SACH",
                "stok" => 42,
                "harga_beli" => "3286",
                "harga_jual" => "4000",
                "expired_date" => "01/04/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK LINU HERBAL",
                "satuan" => "SACH",
                "stok" => 10,
                "harga_beli" => "2700",
                "harga_jual" => "4000",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "TOLAK LINU COOL (ROLL ON)",
                "satuan" => "BTL",
                "stok" => 6,
                "harga_beli" => "9000",
                "harga_jual" => "12500",
                "expired_date" => "01/06/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOMPLIT \"KUKU BIMA\" ",
                "satuan" => "SACH",
                "stok" => 14,
                "harga_beli" => "4500",
                "harga_jual" => "5500",
                "expired_date" => "01/10/2023",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "EXTRA JOSS ROYAL JELLY",
                "satuan" => "SACH",
                "stok" => 12,
                "harga_beli" => "8100",
                "harga_jual" => "9500",
                "expired_date" => "01/08/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "EXTRA JOSS ANGGUR",
                "satuan" => "SACH",
                "stok" => 24,
                "harga_beli" => "8100",
                "harga_jual" => "9500",
                "expired_date" => "01/11/2023",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HEPAMAX",
                "satuan" => "TAB",
                "stok" => 15,
                "harga_beli" => "13500",
                "harga_jual" => "15000",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ALANG SARI ",
                "satuan" => "SACH",
                "stok" => 18,
                "harga_beli" => "5918.5",
                "harga_jual" => "7000",
                "expired_date" => "01/08/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ESTE EMJE SACH",
                "satuan" => "SACH",
                "stok" => 6,
                "harga_beli" => "2700",
                "harga_jual" => "3000",
                "expired_date" => "01/1/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "JAHE WANGI PERMEN ",
                "satuan" => "SACH",
                "stok" => 13,
                "harga_beli" => "1530",
                "harga_jual" => "2000",
                "expired_date" => "01/07/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "BATUGIN 120ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28915.5",
                "harga_jual" => "33500",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KEJI BELING CAPS",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "5200",
                "harga_jual" => "6000",
                "expired_date" => "01/1/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PILKITA PEGAL LINU SACH",
                "satuan" => "SACH",
                "stok" => 10,
                "harga_beli" => "2700",
                "harga_jual" => "3000",
                "expired_date" => "01/1/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PILKITA PEGAL LINU TAB",
                "satuan" => "STRIP",
                "stok" => 50,
                "harga_beli" => "1836",
                "harga_jual" => "2500",
                "expired_date" => "01/1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "CIWACING (CHRYSANTEMUM)",
                "satuan" => "BOX",
                "stok" => 3,
                "harga_beli" => "29500",
                "harga_jual" => "34000",
                "expired_date" => "01/05/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LO HAN KUO",
                "satuan" => "BOX",
                "stok" => 3,
                "harga_beli" => "24500",
                "harga_jual" => "27500",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SEVEN LEAVE GINSENG",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "45000",
                "harga_jual" => "49000",
                "expired_date" => "01/11/2027",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PROSTESA SIDOMUNCUL",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "49500",
                "harga_jual" => "57000",
                "expired_date" => "01/05/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "REMAGO SIDOMUNCUL",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "54000",
                "harga_jual" => "62000",
                "expired_date" => "01/09/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "GARLIC SIDOMUNCUL",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "49500",
                "harga_jual" => "57000",
                "expired_date" => "01/08/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SARI TEMULAWAK SIDOMUNCUL",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "54000",
                "harga_jual" => "62000",
                "expired_date" => "01/04/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "SARI KUNYIT SIDOMUNCUL",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "54000",
                "harga_jual" => "62000",
                "expired_date" => "01/11/2023",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HERBAMON",
                "satuan" => "STRIP",
                "stok" => 12,
                "harga_beli" => "4500",
                "harga_jual" => "5200",
                "expired_date" => "01/07/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "HEMAVITON CARDIO",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "17500",
                "harga_jual" => "20200",
                "expired_date" => "01/02/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADURASA ORIG SACH",
                "satuan" => "SACH",
                "stok" => 12,
                "harga_beli" => "779.5",
                "harga_jual" => "1000",
                "expired_date" => "01/02/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OMEPROS 30'S",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "127650",
                "harga_jual" => "147000",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OMEHEART 30'S",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "52170",
                "harga_jual" => "60000",
                "expired_date" => "01/04/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADU TJ STRAW SACH",
                "satuan" => "SACH",
                "stok" => 12,
                "harga_beli" => "777",
                "harga_jual" => "1000",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADU TJ ORIG + ROYAL JELLY",
                "satuan" => "SACH",
                "stok" => 12,
                "harga_beli" => "777",
                "harga_jual" => "1000",
                "expired_date" => "01/06/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADU TJ RASA JERUK SACH",
                "satuan" => "SACH",
                "stok" => 12,
                "harga_beli" => "777",
                "harga_jual" => "1000",
                "expired_date" => "01/1/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADUSINDO",
                "satuan" => "SACH",
                "stok" => 18,
                "harga_beli" => "1170",
                "harga_jual" => "1200",
                "expired_date" => "01/08/2023",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADU TJ MURNI 250 GR",
                "satuan" => "BTL",
                "stok" => 5,
                "harga_beli" => "24059.3",
                "harga_jual" => "29000",
                "expired_date" => "01/06/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "MADU TJ MURNI 150 GR",
                "satuan" => "BTL",
                "stok" => 5,
                "harga_beli" => "15662.1",
                "harga_jual" => "19000",
                "expired_date" => "01/07/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OB HERBAL 100 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "21600",
                "harga_jual" => "24000",
                "expired_date" => "01/12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "KOMIX HERBAL ORIG",
                "satuan" => "PCK",
                "stok" => 5,
                "harga_beli" => "9200",
                "harga_jual" => "11000",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH ITRASAL ",
                "satuan" => "BTL",
                "stok" => 9,
                "harga_beli" => "6489",
                "harga_jual" => "7500",
                "expired_date" => "01/05/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBP ITRASAL",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "6200",
                "harga_jual" => "8000",
                "expired_date" => "01/10/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH COMBI BATUK BERDAHAK 100ML SYR",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "13500",
                "harga_jual" => "15000",
                "expired_date" => "01/1/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH COMBI PLUS MADU 60ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "13600",
                "harga_jual" => "15500",
                "expired_date" => "01/09/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH COMBI PLUS JAHE 100 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "18400",
                "harga_jual" => "21000",
                "expired_date" => "01/09/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH COMBI PLUS ANAK STRAW 60ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "15400",
                "harga_jual" => "17700",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH COMBI PLUS ANAK MADU 60ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "14400",
                "harga_jual" => "17700",
                "expired_date" => "01/02/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBH COMBI PLUS ANAK APEL 60ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "14500",
                "harga_jual" => "17700",
                "expired_date" => "01/02/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LASERIN SYR 30 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "5813",
                "harga_jual" => "6800",
                "expired_date" => "01/08/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LASERIN ANAK SYR MADU 100ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "20052",
                "harga_jual" => "23000",
                "expired_date" => "01/03/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LASERIN SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "11507.4",
                "harga_jual" => "13200",
                "expired_date" => "01/08/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "LASERIN SYR 110 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "20767",
                "harga_jual" => "23900",
                "expired_date" => "01/07/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBAT BATUK IBU ANAK 150ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "45500",
                "harga_jual" => "52200",
                "expired_date" => "01/03/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "OBAT BATUK IBU ANAK 75ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "24975",
                "harga_jual" => "28500",
                "expired_date" => "01/06/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PAMOL DROP",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "64000",
                "harga_jual" => "67200",
                "expired_date" => "01/09/2026",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ZAMEL DROP",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "35100",
                "harga_jual" => "39000",
                "expired_date" => "01/10/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PRORIS SYRUP",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "27700",
                "harga_jual" => "31800",
                "expired_date" => "01/02/2025",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "PRORIS FORTE SYR",
                "satuan" => "BTL",
                "stok" => 6,
                "harga_beli" => "32400",
                "harga_jual" => "37300",
                "expired_date" => "01/12/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "EYEVIT SYR 60 ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "65934",
                "harga_jual" => "73260",
                "expired_date" => "01/08/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "EYEVIT TAB",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "32310",
                "harga_jual" => "35900",
                "expired_date" => "01/11/2024",
                "category" => "OTC"
            ],
            [
                "sku" => "",
                "name" => "ANELAT",
                "satuan" => "STRIP",
                "stok" => 8,
                "harga_beli" => "1776",
                "harga_jual" => "2000",
                "expired_date" => "01/1/2025",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "DARSI KAPSUL",
                "satuan" => "PCK",
                "stok" => 6,
                "harga_beli" => "22200",
                "harga_jual" => "24500",
                "expired_date" => "01/03/2026",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "EM KAPSUL ",
                "satuan" => "PCK",
                "stok" => 6,
                "harga_beli" => "22000",
                "harga_jual" => "24200",
                "expired_date" => "01/01/2027",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "KAPSIDA ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "",
                "harga_jual" => "0",
                "expired_date" => "01/08/2027",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "KAPSUL TUNTAS",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "10625",
                "harga_jual" => "12219",
                "expired_date" => "01/02/2026",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "RAPET WANGI ",
                "satuan" => "PCK",
                "stok" => 3,
                "harga_beli" => "10625",
                "harga_jual" => "12219",
                "expired_date" => "01/02/2026",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "IFREE PAD",
                "satuan" => "SACH",
                "stok" => 3,
                "harga_beli" => "7361.5",
                "harga_jual" => "8466",
                "expired_date" => "01/01/2026",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "SANGOBION ISI 4",
                "satuan" => "STRIP ",
                "stok" => 3,
                "harga_beli" => "6699.4",
                "harga_jual" => "7704",
                "expired_date" => "01/10/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "HUFABION ",
                "satuan" => "STRIP",
                "stok" => 8,
                "harga_beli" => "4080",
                "harga_jual" => "4692",
                "expired_date" => "01/08/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "VEGETA SCRUBBER",
                "satuan" => "SACH",
                "stok" => 6,
                "harga_beli" => "11085.6",
                "harga_jual" => "12748",
                "expired_date" => "01/11/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "VEGETA HERBAL",
                "satuan" => "SACH",
                "stok" => 6,
                "harga_beli" => "16667.7",
                "harga_jual" => "19168",
                "expired_date" => "01/10/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "SIDOMUNCUL PELANGI ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "49500",
                "harga_jual" => "56925",
                "expired_date" => "01/05/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "SIDOMUNCUL ALUS",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "49500",
                "harga_jual" => "56925",
                "expired_date" => "01/09/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "SIDOMUNCUL SUPRASI",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "36000",
                "harga_jual" => "41400",
                "expired_date" => "01/01/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "LANCAR ASI",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "46752.1",
                "harga_jual" => "53765",
                "expired_date" => "01/09/2024",
                "category" => "PERAWATAN WANITA"
            ],
            [
                "sku" => "",
                "name" => "BEDAK MARCK'S ROSE",
                "satuan" => "POT",
                "stok" => 1,
                "harga_beli" => "16650",
                "harga_jual" => "19148",
                "expired_date" => "01/12/2027",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "BEDAK MARCK'S CREME",
                "satuan" => "POT",
                "stok" => 1,
                "harga_beli" => "16650",
                "harga_jual" => "19148",
                "expired_date" => "01/01/2027",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "ACNOL LOTION ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "15540",
                "harga_jual" => "17871",
                "expired_date" => "01/02/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "JF ANTI ACNE CREAM ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "14600",
                "harga_jual" => "16790",
                "expired_date" => "01/05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DERMA XP HAIR GROW",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "70200",
                "harga_jual" => "80730",
                "expired_date" => "01/07/2025",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE LC SERUM \" ACNE CARE\" 10ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "55000",
                "harga_jual" => "63250",
                "expired_date" => "01/02/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE PL SERUM \"LIGHTENING\"",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "54000",
                "harga_jual" => "62100",
                "expired_date" => "01/05/2025",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE PENTAGF 10ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "265000",
                "harga_jual" => "304750",
                "expired_date" => "01/05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE CHROMAGLOW SERUM 10ML",
                "satuan" => "BTL ",
                "stok" => 1,
                "harga_beli" => "94000",
                "harga_jual" => "108100",
                "expired_date" => "01/03/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE MULTIACTION EYE SERUM",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "120000",
                "harga_jual" => "138000",
                "expired_date" => "01/02/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE HYDRAPROTECT",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "94000",
                "harga_jual" => "108100",
                "expired_date" => "01/05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE DERMA FILLER \"ANTI AGING\" 15ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "290000",
                "harga_jual" => "333500",
                "expired_date" => "01/02/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE DNA SALMON GOLD SERUM",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "120000",
                "harga_jual" => "138000",
                "expired_date" => "01/05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE DERMA MOIST CR ",
                "satuan" => "POT",
                "stok" => 10,
                "harga_beli" => "33000",
                "harga_jual" => "37950",
                "expired_date" => "01/05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE RW SUNSCREEN ",
                "satuan" => "POT",
                "stok" => 8,
                "harga_beli" => "41000",
                "harga_jual" => "47150",
                "expired_date" => "01/05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE FW DRY 60ML",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "27000",
                "harga_jual" => "31050",
                "expired_date" => "01/06/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE FW OILY",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "27000",
                "harga_jual" => "31050",
                "expired_date" => "01/11/2025",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE PORE ESSENCE LAVENDER ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "45000",
                "harga_jual" => "51750",
                "expired_date" => "01/07/2025",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE MICELLAR WATER 100ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "32000",
                "harga_jual" => "36800",
                "expired_date" => "01/05/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE RW NIGHT CR ",
                "satuan" => "POT",
                "stok" => 11,
                "harga_beli" => "59000",
                "harga_jual" => "67850",
                "expired_date" => "01/02/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE ACNE SUNSCREEN ",
                "satuan" => "POT",
                "stok" => 2,
                "harga_beli" => "36000",
                "harga_jual" => "41400",
                "expired_date" => "01/06/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE DAY LOOK UP BB CREAM ",
                "satuan" => "POT",
                "stok" => 2,
                "harga_beli" => "45000",
                "harga_jual" => "51750",
                "expired_date" => "01/06/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "DKE ACNE NIGHT CR",
                "satuan" => "POT",
                "stok" => 2,
                "harga_beli" => "45000",
                "harga_jual" => "51750",
                "expired_date" => "01/04/2026",
                "category" => "KOSMETIK"
            ],
            [
                "sku" => "",
                "name" => "SUTRA MERAH 3",
                "satuan" => "PCS",
                "stok" => 21,
                "harga_beli" => "6300",
                "harga_jual" => "7245",
                "expired_date" => "01/03/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "SUTRA OK (HITAM) 3'S",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "7972.02",
                "harga_jual" => "9168",
                "expired_date" => "01/04/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "SUTRA OK (HITAM) 12'S",
                "satuan" => "PCK",
                "stok" => 3,
                "harga_beli" => "28354.95",
                "harga_jual" => "32608",
                "expired_date" => "01/12/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "SUTRA GERIGI 3'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "7972.02",
                "harga_jual" => "9168",
                "expired_date" => "01/11/2027",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "FIESTA STRAWBERRY 3'S",
                "satuan" => "PCS",
                "stok" => 3,
                "harga_beli" => "12350",
                "harga_jual" => "14203",
                "expired_date" => "01/05/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "FIESTA ULTRA THIN 3'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "12298.8",
                "harga_jual" => "14144",
                "expired_date" => "01/08/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "FIESTA DURIAN 3'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "11201.01",
                "harga_jual" => "12881",
                "expired_date" => "01/02/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "FIESTA MAX DOTTED 3'S",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "13500",
                "harga_jual" => "15525",
                "expired_date" => "01/02/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "DUREX TOGETHER 3'S",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "18000",
                "harga_jual" => "20700",
                "expired_date" => "01/03/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "DUREX EXTRA SAVE 3'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "23873.5",
                "harga_jual" => "27455",
                "expired_date" => "01/01/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "DUREX FETHERLITE 3'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "26480.2",
                "harga_jual" => "30452",
                "expired_date" => "01/12/2026",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "DUREX LOVE 3'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "9997.9",
                "harga_jual" => "11498",
                "expired_date" => "01/09/2027",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "TISSUE MAGIC MAN CASSANOVA ",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "11100",
                "harga_jual" => "12765",
                "expired_date" => "01/04/2028",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "TISSUE MAGIC MAN LOVERS HITAM",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "11100",
                "harga_jual" => "12765",
                "expired_date" => "01/08/2027",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "TEST PACK ONE MED",
                "satuan" => "STRIP",
                "stok" => 45,
                "harga_beli" => "2775",
                "harga_jual" => "3191",
                "expired_date" => "01/10/2025",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "SENSITIF TEST KEHAMILAN",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "23310",
                "harga_jual" => "26807",
                "expired_date" => "01/03/2025",
                "category" => "KONTRASEPSI"
            ],
            [
                "sku" => "",
                "name" => "ABSOLUTE DAILY FEMINIME HYGIENE ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "26500",
                "harga_jual" => "30475",
                "expired_date" => "01/06/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "OILUM THE DRY SKIN expired_dateERT \" BRIGHTENING CARE\"",
                "satuan" => "BAR",
                "stok" => 3,
                "harga_beli" => "18500",
                "harga_jual" => "21275",
                "expired_date" => "01/02/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SCABIMITE BLACKSOAP",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "43000",
                "harga_jual" => "49450",
                "expired_date" => "01/07/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF ACNE SPOT CARE",
                "satuan" => "BAR",
                "stok" => 1,
                "harga_beli" => "11200",
                "harga_jual" => "12880",
                "expired_date" => "01/05/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF DERMAMED 90GR",
                "satuan" => "BAR",
                "stok" => 1,
                "harga_beli" => "11155.5",
                "harga_jual" => "12829",
                "expired_date" => "01/02/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF ACNE 65GR",
                "satuan" => "BAR",
                "stok" => 1,
                "harga_beli" => "11200",
                "harga_jual" => "12880",
                "expired_date" => "01/05/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF ACNE 90GR",
                "satuan" => "BAR",
                "stok" => 1,
                "harga_beli" => "24500",
                "harga_jual" => "28175",
                "expired_date" => "01/09/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ASEPSO FRESH ",
                "satuan" => "BAR",
                "stok" => 2,
                "harga_beli" => "8550",
                "harga_jual" => "9833",
                "expired_date" => "01/03/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ASEPSO ORIG",
                "satuan" => "BAR",
                "stok" => 3,
                "harga_beli" => "7276.71",
                "harga_jual" => "8368",
                "expired_date" => "01/03/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SABUN HIJAU HOLLY 60GR",
                "satuan" => "BAR",
                "stok" => 12,
                "harga_beli" => "5550",
                "harga_jual" => "6383",
                "expired_date" => "01/12/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "CUSSON BABY SOAP SOFT&SMOOTH",
                "satuan" => "BAR",
                "stok" => 1,
                "harga_beli" => "4050",
                "harga_jual" => "4658",
                "expired_date" => "01/07/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SABUN DETTOL ORI 60GR",
                "satuan" => "BAR",
                "stok" => 3,
                "harga_beli" => "3150",
                "harga_jual" => "3623",
                "expired_date" => "01/09/2023",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SABUN DETTOL ORI 100GR",
                "satuan" => "BAR",
                "stok" => 5,
                "harga_beli" => "4500",
                "harga_jual" => "5175",
                "expired_date" => "01/02/2025",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "CLOSE UP 65GR",
                "satuan" => "TUBE",
                "stok" => 6,
                "harga_beli" => "6750",
                "harga_jual" => "7763",
                "expired_date" => "01/10/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SENSODYNE COOL GEL 100GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "28971",
                "harga_jual" => "33317",
                "expired_date" => "01/01/2025",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SENSODYNE FRESH MINT 100GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "28971",
                "harga_jual" => "33317",
                "expired_date" => "01/04/2025",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "POLIDENT 20GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "33078",
                "harga_jual" => "38040",
                "expired_date" => "01/01/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "POLIDENT 60GR",
                "satuan" => "TUBE",
                "stok" => 0,
                "harga_beli" => "79476",
                "harga_jual" => "91397",
                "expired_date" => "-",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ANTIPLAQUE",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "24300",
                "harga_jual" => "27945",
                "expired_date" => "01/06/2025",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF DERMAMED CAIR POUCH 200ML",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "28500",
                "harga_jual" => "32775",
                "expired_date" => "01/07/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF DERMAMED CAIR 200ML ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28500",
                "harga_jual" => "32775",
                "expired_date" => "01/06/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF DERMA PROTECT POUCH 200ML",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "28500",
                "harga_jual" => "32775",
                "expired_date" => "01/06/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "JF DERMA PROTECT  200ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28500",
                "harga_jual" => "32775",
                "expired_date" => "01/07/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "OILUM CAIR HYDRATING CARE BODY WASH POUCH",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "18500",
                "harga_jual" => "21275",
                "expired_date" => "01/07/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "OILUM CAIR HYDRATING CARE BODY WASH 200ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28500",
                "harga_jual" => "32775",
                "expired_date" => "01/05/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "OILUM CAIR BRIGHTENING POUCH",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "28500",
                "harga_jual" => "32775",
                "expired_date" => "01/07/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "OILUM CAIR BRIGHTENING 200ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "18500",
                "harga_jual" => "21275",
                "expired_date" => "01/06/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SIKAT GIGI FORMULA ",
                "satuan" => "PCS",
                "stok" => 7,
                "harga_beli" => "3600",
                "harga_jual" => "4140",
                "expired_date" => "-",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SIKAT GIGI CIPTADENT",
                "satuan" => "PCS",
                "stok" => 12,
                "harga_beli" => "2700",
                "harga_jual" => "3105",
                "expired_date" => "-",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "TISSUE PASEO 250'S",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "10800",
                "harga_jual" => "12420",
                "expired_date" => "-",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "TISSUE GREEN SOFT",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "12500",
                "harga_jual" => "14375",
                "expired_date" => "01/06/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ACETON GAJAH ",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "7821",
                "harga_jual" => "8994",
                "expired_date" => "01/04/2027",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "SOFFEL BTL",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "9450",
                "harga_jual" => "10500",
                "expired_date" => "01/02/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "NATUR E HAND BODY LOTION 245ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "23213.43",
                "harga_jual" => "26695",
                "expired_date" => "01/01/2025",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "NATUR E HAND BODY LOTION 100ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11570.64",
                "harga_jual" => "13306",
                "expired_date" => "01/02/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "DETTOL FRESH CAIR",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "37900",
                "harga_jual" => "43585",
                "expired_date" => "01/07/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ASEPSO ORI CAIR ",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "23200",
                "harga_jual" => "26680",
                "expired_date" => "01/05/2026",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ASEPSO HYGIENE FRESH CAIR",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "23200",
                "harga_jual" => "26680",
                "expired_date" => "01/08/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ASEPSO MOISTURE CARE",
                "satuan" => "POUCH",
                "stok" => 1,
                "harga_beli" => "23200",
                "harga_jual" => "26680",
                "expired_date" => "01/04/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "HUKI COTTON BUDS BABY 100",
                "satuan" => "PCS",
                "stok" => 6,
                "harga_beli" => "6700",
                "harga_jual" => "7705",
                "expired_date" => "01/05/2028",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "TISSUE PASEO 12'S",
                "satuan" => "PCS",
                "stok" => 8,
                "harga_beli" => "1350",
                "harga_jual" => "1553",
                "expired_date" => "-",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "TISSUE TESSA 10'S",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "1500",
                "harga_jual" => "1725",
                "expired_date" => "-",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "CUSSONS BABY TISSUE BASAH",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "10000",
                "harga_jual" => "11500",
                "expired_date" => "01/10/2024",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ONE CLEAN WASH GLOVE",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "16200",
                "harga_jual" => "18630",
                "expired_date" => "01/10/2025",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "COTTON BALL ONE MED",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "10350",
                "harga_jual" => "11903",
                "expired_date" => "01/04/2028",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "KAPAS SELECTION 75GR",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "12182.25",
                "harga_jual" => "14010",
                "expired_date" => "01/03/2028",
                "category" => "PERAWATAN TUBUH"
            ],
            [
                "sku" => "",
                "name" => "ICE BAG ONE MED",
                "satuan" => "PCK",
                "stok" => 1,
                "harga_beli" => "27000",
                "harga_jual" => "31050",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "CONFIDENT XL 122-178",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "18000",
                "harga_jual" => "20700",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "UNDERPADS ONEMED DR.J",
                "satuan" => "PCS",
                "stok" => 17,
                "harga_beli" => "3150",
                "harga_jual" => "3623",
                "expired_date" => "01/05/2027",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MASKER ANYTIME HIJAB ",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "9900",
                "harga_jual" => "11385",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MASKER ANYTIME EARLOOP",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "9900",
                "harga_jual" => "11385",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MASKER ANYTIME KIDS",
                "satuan" => "PCS",
                "stok" => 7,
                "harga_beli" => "9900",
                "harga_jual" => "11385",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MASKER ANYTIME VIRUS GUARD",
                "satuan" => "PCS",
                "stok" => 6,
                "harga_beli" => "12600",
                "harga_jual" => "14490",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MASKER ANYTIME KID BOX",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "54000",
                "harga_jual" => "62100",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MASKER EARLOOP ONE MED",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "22500",
                "harga_jual" => "25875",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "LAURIER SUPER MAXI 8PADS",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "4050",
                "harga_jual" => "4658",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "CHARM EXTRA COMFORT MAXI 23CM 6PADS",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "4050",
                "harga_jual" => "4658",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "CHARM EXTRA COMFORT MAXI 26CM 8PADS",
                "satuan" => "PCK",
                "stok" => 3,
                "harga_beli" => "6750",
                "harga_jual" => "7763",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "CHARM BODY FIT 23CM 8PADS",
                "satuan" => "PCK",
                "stok" => 2,
                "harga_beli" => "4950",
                "harga_jual" => "5693",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "SOFTEX CELANA MENSTRUASI ",
                "satuan" => "PCS",
                "stok" => 6,
                "harga_beli" => "18000",
                "harga_jual" => "20700",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MAMY POKO PANST M-1",
                "satuan" => "PCS",
                "stok" => 10,
                "harga_beli" => "2700",
                "harga_jual" => "3105",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "MAMY POKO PANST L-1",
                "satuan" => "PCS",
                "stok" => 10,
                "harga_beli" => "3150",
                "harga_jual" => "3623",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "SWEETY PANST S-1",
                "satuan" => "PCS",
                "stok" => 6,
                "harga_beli" => "1350",
                "harga_jual" => "1553",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "THERMO ONE ALPHA 2",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "16500",
                "harga_jual" => "18975",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "THERMO ONE KID",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "20000",
                "harga_jual" => "23000",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "THERMO ONE ALPHA 3",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "20000",
                "harga_jual" => "23000",
                "expired_date" => "",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "TOURINIQUET",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "11000",
                "harga_jual" => "12650",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ONEMED DOUBLE SPIKE (TRANSOFIX)",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "4000",
                "harga_jual" => "4600",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "KASA GULUNG ONE MED 5CM",
                "satuan" => "ROLL",
                "stok" => 8,
                "harga_beli" => "10440",
                "harga_jual" => "12006",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "DERMAFIX 10X8CM",
                "satuan" => "PCS",
                "stok" => 10,
                "harga_beli" => "5400",
                "harga_jual" => "6210",
                "expired_date" => "01/04/2028",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "TENSOCRAPE 75CMX45M",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "87300",
                "harga_jual" => "100395",
                "expired_date" => "01/10/2027",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "PLESTER HANSAPLAST 1.25X1M",
                "satuan" => "ROLL",
                "stok" => 2,
                "harga_beli" => "4230.00",
                "harga_jual" => "4865",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ULTRAFIX 5CMX1M",
                "satuan" => "PCS",
                "stok" => 10,
                "harga_beli" => "3600",
                "harga_jual" => "4140",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ULTRAFIX 10CMX1M",
                "satuan" => "PCS",
                "stok" => 3,
                "harga_beli" => "6300",
                "harga_jual" => "7245",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "PLESTERIN ISI 10",
                "satuan" => "PCS",
                "stok" => 47,
                "harga_beli" => "1080.00",
                "harga_jual" => "1242",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "BETADINE SOL 60ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "40820.30",
                "harga_jual" => "46943",
                "expired_date" => "01/02/2026",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "BETADINE SOL 30ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "24242.40",
                "harga_jual" => "27879",
                "expired_date" => "01/04/2026",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "BETADINE SOL 5ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "4950",
                "harga_jual" => "5693",
                "expired_date" => "01/05/2026",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "KAPAS GULUNG ONE MED 50GR",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "3600",
                "harga_jual" => "4140",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "KASA STERIL ONE MED",
                "satuan" => "PCK",
                "stok" => 5,
                "harga_beli" => "7650",
                "harga_jual" => "8798",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ALKOHOL SWAB ONE MED",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "10800",
                "harga_jual" => "12420",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "PLESTRIN KID",
                "satuan" => "PCS",
                "stok" => 25,
                "harga_beli" => "270",
                "harga_jual" => "311",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "HANSAPLAST ",
                "satuan" => "PCS",
                "stok" => 122,
                "harga_beli" => "360",
                "harga_jual" => "414",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "HANSAPLAST JUMBO",
                "satuan" => "PCS ",
                "stok" => 46,
                "harga_beli" => "900",
                "harga_jual" => "1035",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "GUNTING KUKU BESAR",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8000",
                "harga_jual" => "9200",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "GUNTING KUKU BENGKOK",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "7500",
                "harga_jual" => "8625",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ALKOHOL 70% 300ML ONE MED",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "10629",
                "harga_jual" => "12224",
                "expired_date" => "01/01/2027",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "RIVANOL 100ML ONE MED",
                "satuan" => "BTL",
                "stok" => 3,
                "harga_beli" => "3150",
                "harga_jual" => "3623",
                "expired_date" => "01/04/2026",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "DETTOL ANTISEPTIK 45ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11450.80",
                "harga_jual" => "13168",
                "expired_date" => "01/01/2026",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "DETTOL ANTISEPTIK 95ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "23180.10",
                "harga_jual" => "26657",
                "expired_date" => "01/12/2025",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "PLESTERIN GEL ONE MED 60ML",
                "satuan" => "TUBE ",
                "stok" => 1,
                "harga_beli" => "41850.00",
                "harga_jual" => "48128",
                "expired_date" => "01/03/2025",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "DIE DA YOU JING 30ML",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "28600",
                "harga_jual" => "32890",
                "expired_date" => "01/11/2026",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "URINAL WANITA",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "30000",
                "harga_jual" => "34500",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "URINAL LAKI-LAKI",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "27000",
                "harga_jual" => "31050",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "NASAL CANUL DEWASA ",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "4500",
                "harga_jual" => "5175",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "OXYCAN",
                "satuan" => "CAN",
                "stok" => 1,
                "harga_beli" => "45408",
                "harga_jual" => "52220",
                "expired_date" => "01/05/2025",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "SARUNG TANGAN PLASTIK ONE MED",
                "satuan" => "PCS",
                "stok" => 200,
                "harga_beli" => "7650.00",
                "harga_jual" => "8798",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "HANDSCOON M ",
                "satuan" => "PCS",
                "stok" => 50,
                "harga_beli" => "885.60",
                "harga_jual" => "1018",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "HANDSCOON L",
                "satuan" => "PCS",
                "stok" => 48,
                "harga_beli" => "885.60",
                "harga_jual" => "1018",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "INFUSION SET ANAK ONE MED",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "5000.00",
                "harga_jual" => "5750",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "INFUSION SET DEWASA ONE MED",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "5000.00",
                "harga_jual" => "5750",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "DERMAFIX 10CMX25CM",
                "satuan" => "PCS",
                "stok" => 1,
                "harga_beli" => "14400",
                "harga_jual" => "16560",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "KACA MATA GOOGLE ",
                "satuan" => "PCS",
                "stok" => 3,
                "harga_beli" => "11700",
                "harga_jual" => "13455",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "LIFREE POPOK DEWASA XL-1",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "8550",
                "harga_jual" => "9833",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "LIFREE POPOK DEWASA L-1",
                "satuan" => "PCS",
                "stok" => 4,
                "harga_beli" => "7200",
                "harga_jual" => "8280",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "SPUIT 5CC ONE MED",
                "satuan" => "PCS",
                "stok" => 100,
                "harga_beli" => "5000",
                "harga_jual" => "5750",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "NACL 500 ML (OTSUKA)",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "5000",
                "harga_jual" => "5750",
                "expired_date" => "01/04/2025",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "PISPOT BAB PLASTIK",
                "satuan" => "PCS",
                "stok" => 3,
                "harga_beli" => "40000.00",
                "harga_jual" => "46000",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ALCOHOL SWAB (ONEMED)",
                "satuan" => "PCS",
                "stok" => 101,
                "harga_beli" => "10800",
                "harga_jual" => "12420",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "ALKOHOL 70%1L",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "80000",
                "harga_jual" => "92000",
                "expired_date" => "-",
                "category" => "ALKES"
            ],
            [
                "sku" => "",
                "name" => "CARGESIC TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "6750",
                "harga_jual" => "7763",
                "expired_date" => "01/10/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "PONSTAN 500MG",
                "satuan" => "TAB",
                "stok" => 12,
                "harga_beli" => "3400",
                "harga_jual" => "3910",
                "expired_date" => "01/07/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CATAFLAM FAST 50MG",
                "satuan" => "SACH",
                "stok" => 9,
                "harga_beli" => "9817",
                "harga_jual" => "11290",
                "expired_date" => "01/01/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CATAFLAM 50MG TAB",
                "satuan" => "TAB",
                "stok" => 23,
                "harga_beli" => "7909.12",
                "harga_jual" => "9095",
                "expired_date" => "01/12/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "FARSIFEN PLUS TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "5500.00",
                "harga_jual" => "6325",
                "expired_date" => "01/09/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "FARSIFEN TAB",
                "satuan" => "STRIP",
                "stok" => 8,
                "harga_beli" => "5500.00",
                "harga_jual" => "6325",
                "expired_date" => "01/05/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "KAFLAM 50MG TAB",
                "satuan" => "TAB ",
                "stok" => 30,
                "harga_beli" => "33200",
                "harga_jual" => "38180",
                "expired_date" => "01/07/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "MELOXICAM 15MG",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "8000",
                "harga_jual" => "9200",
                "expired_date" => "01/11/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "VOLTAREN 50MG ",
                "satuan" => "TAB",
                "stok" => 50,
                "harga_beli" => "7683.84",
                "harga_jual" => "8836",
                "expired_date" => "01/02/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ARCOXIA 90MG",
                "satuan" => "TAB",
                "stok" => 10,
                "harga_beli" => "21476.7",
                "harga_jual" => "24698",
                "expired_date" => "01/09/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "MYONAL ",
                "satuan" => "TAB",
                "stok" => 10,
                "harga_beli" => "9622.8",
                "harga_jual" => "11066",
                "expired_date" => "01/09/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "EPERISON TAB ",
                "satuan" => "STRIP ",
                "stok" => 2,
                "harga_beli" => "17031.6",
                "harga_jual" => "19586",
                "expired_date" => "01/05/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "KETOPROFEN 100MG TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "16500.00",
                "harga_jual" => "18975",
                "expired_date" => "01/06/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "LYRICA 75MG ",
                "satuan" => "KAPSUL",
                "stok" => 14,
                "harga_beli" => "15874.78",
                "harga_jual" => "18256",
                "expired_date" => "01/08/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "HUFRALGIN TAB",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "5670",
                "harga_jual" => "6521",
                "expired_date" => "01/06/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ALLOPURINOL 100MG",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "3000",
                "harga_jual" => "3450",
                "expired_date" => "01/03/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ALLOPURINOL 300MG",
                "satuan" => "STRIP ",
                "stok" => 1,
                "harga_beli" => "5500",
                "harga_jual" => "6325",
                "expired_date" => "01/11/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "METHYLPREDNISOLON 4MG",
                "satuan" => "STRIP",
                "stok" => 7,
                "harga_beli" => "4000",
                "harga_jual" => "4600",
                "expired_date" => "01/12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "METHYLPREDNISOLON 8MG",
                "satuan" => "STRIP",
                "stok" => 15,
                "harga_beli" => "5100",
                "harga_jual" => "5865",
                "expired_date" => "01/02/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "METHYLPREDNISOLONE 16MG",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "9100",
                "harga_jual" => "10465",
                "expired_date" => "01/01/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "LAMESON 4MG TAB",
                "satuan" => "TAB",
                "stok" => 25,
                "harga_beli" => "5350.5",
                "harga_jual" => "6153",
                "expired_date" => "01/02/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "DEXTAMIN TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "15963.2",
                "harga_jual" => "18358",
                "expired_date" => "01/03/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "DEXTEEM PLUS TAB ",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "3148.6",
                "harga_jual" => "3621",
                "expired_date" => "01/1/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "HEPTASAN TAB",
                "satuan" => "TAB",
                "stok" => 24,
                "harga_beli" => "4662",
                "harga_jual" => "5361",
                "expired_date" => "01/03/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "HISTAPAN TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "8449.9",
                "harga_jual" => "9717",
                "expired_date" => "01/04/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "LORATADINE TAB",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "3000",
                "harga_jual" => "3450",
                "expired_date" => "01/05/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "TEOSAL TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "15700",
                "harga_jual" => "18055",
                "expired_date" => "01/12/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "VENTOLIN NEBULES",
                "satuan" => "AMPUL",
                "stok" => 5,
                "harga_beli" => "59500",
                "harga_jual" => "68425",
                "expired_date" => "01/07/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SALBUTAMOL 2 MG",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "1410",
                "harga_jual" => "1622",
                "expired_date" => "01/04/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "APTOR TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "4600",
                "harga_jual" => "5290",
                "expired_date" => "01/07/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "FUROSEMIDE 40 MG",
                "satuan" => "STRIP",
                "stok" => 13,
                "harga_beli" => "1256",
                "harga_jual" => "1444",
                "expired_date" => "01/05/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CAPTOPRIL 12.5 MG",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "1716",
                "harga_jual" => "1973",
                "expired_date" => "01/08/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CAPTOPRIL 25 MG",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "2173",
                "harga_jual" => "2499",
                "expired_date" => "01/05/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "AMLODIPINE 5 MG (PROMEDRAHARD)",
                "satuan" => "TAB",
                "stok" => 85,
                "harga_beli" => "2250",
                "harga_jual" => "2588",
                "expired_date" => "01/05/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GRAVASK 10 MG ",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "23332.8",
                "harga_jual" => "26833",
                "expired_date" => "01/03/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "AMLODIPINE 10 MG (SAMCO)",
                "satuan" => "TAB",
                "stok" => 70,
                "harga_beli" => "4500",
                "harga_jual" => "5175",
                "expired_date" => "01/12/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ATORVASTATIN 20 MG (OGB DEXA)",
                "satuan" => "TAB",
                "stok" => 50,
                "harga_beli" => "25000",
                "harga_jual" => "28750",
                "expired_date" => "01/05/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ATORVASTATIN 10 MG",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "17500",
                "harga_jual" => "20125",
                "expired_date" => "01/03/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ATORVASTATIN 20 MG (PRATAPA)",
                "satuan" => "TAB",
                "stok" => 20,
                "harga_beli" => "25000",
                "harga_jual" => "28750",
                "expired_date" => "01/06/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ATORVASTATIN 40 MG (PRATAPA)",
                "satuan" => "TAB",
                "stok" => 30,
                "harga_beli" => "33000",
                "harga_jual" => "37950",
                "expired_date" => "01/02/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ROSUFER 20 MG",
                "satuan" => "TAB",
                "stok" => 30,
                "harga_beli" => "131166.67",
                "harga_jual" => "150842",
                "expired_date" => "01/03/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SIMVASTATIN 10 MG (HJ)",
                "satuan" => "TAB",
                "stok" => 35,
                "harga_beli" => "3000",
                "harga_jual" => "3450",
                "expired_date" => "01/02/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SIMVASTATIN 20 MG (HJ)",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "10500",
                "harga_jual" => "12075",
                "expired_date" => "01/05/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GEMFIBROZIL 300 MG",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "8500",
                "harga_jual" => "9775",
                "expired_date" => "01/02/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "HYPOFIL KAPS",
                "satuan" => "KAPSUL",
                "stok" => 20,
                "harga_beli" => "31500",
                "harga_jual" => "36225",
                "expired_date" => "01/08/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ACARBOSE 50 MG",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "10150",
                "harga_jual" => "11673",
                "expired_date" => "01/1/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "METFORMIN 500 MG (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "2500",
                "harga_jual" => "2875",
                "expired_date" => "01/12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GLIMEPIRIDE 1 MG (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "4100",
                "harga_jual" => "4715",
                "expired_date" => "01/1/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GLIMEPIRIDE 2 MG (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "4950",
                "harga_jual" => "5693",
                "expired_date" => "01/03/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GLIMEPIRIDE 3 MG (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "6350",
                "harga_jual" => "7303",
                "expired_date" => "01/02/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GLIMEPIRIDE 4 MG ",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "7150",
                "harga_jual" => "8223",
                "expired_date" => "01/02/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "RENABETIC TAB",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "3000.00",
                "harga_jual" => "3450",
                "expired_date" => "01/1/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "VELTHROM 10 MG",
                "satuan" => "STRIP",
                "stok" => 30,
                "harga_beli" => "18333",
                "harga_jual" => "21083",
                "expired_date" => "01/12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "IRVELL 300 MG ",
                "satuan" => "TAB",
                "stok" => 30,
                "harga_beli" => "132000",
                "harga_jual" => "151800",
                "expired_date" => "01/1/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "VALSARTAN 160 MG",
                "satuan" => "TAB",
                "stok" => 30,
                "harga_beli" => "56600",
                "harga_jual" => "65090",
                "expired_date" => "01/03/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BISOPROLOL 5 MG ",
                "satuan" => "STRIP",
                "stok" => 9,
                "harga_beli" => "5050",
                "harga_jual" => "5808",
                "expired_date" => "01/03/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BISOPROLOL 2.5 MG (NOVELL)",
                "satuan" => "STRIP",
                "stok" => 5,
                "harga_beli" => "4150",
                "harga_jual" => "4773",
                "expired_date" => "01/04/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BISOPROLOL 2.5 MG (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "5050",
                "harga_jual" => "5808",
                "expired_date" => "01/04/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CANDESARTAN 8 MG (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 12,
                "harga_beli" => "5000",
                "harga_jual" => "5750",
                "expired_date" => "01/1/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CANDESARTAN 16 MG",
                "satuan" => "STRIP",
                "stok" => 6,
                "harga_beli" => "8050",
                "harga_jual" => "9258",
                "expired_date" => "01/02/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "OMEPRAZOLE 20 MG (IFARS)",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "4500",
                "harga_jual" => "5175",
                "expired_date" => "01/04/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "LANSOPRAZOLE 30 MG (EXELTIS)",
                "satuan" => "STRIP",
                "stok" => 4,
                "harga_beli" => "11984.45",
                "harga_jual" => "13782",
                "expired_date" => "01/08/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "LANSOPRAZOLE 30 MG (NOVELL)",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "8968.90",
                "harga_jual" => "10314",
                "expired_date" => "01/06/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ONDANSENTRON 4 MG (NOVELL)",
                "satuan" => "TAB",
                "stok" => 12,
                "harga_beli" => "7200",
                "harga_jual" => "8280",
                "expired_date" => "01/03/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ONDANSENTRON 8 MG (NOVELL)",
                "satuan" => "TAB",
                "stok" => 12,
                "harga_beli" => "11700",
                "harga_jual" => "13455",
                "expired_date" => "01/04/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GRAMETA TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "3600",
                "harga_jual" => "4140",
                "expired_date" => "01/06/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "VOMETA FT TAB",
                "satuan" => "TAB",
                "stok" => 30,
                "harga_beli" => "5140",
                "harga_jual" => "5911",
                "expired_date" => "01/03/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SPASMINAL TAB",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "11000",
                "harga_jual" => "12650",
                "expired_date" => "01/12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ANTASIDA DOEN (TRIMAN)",
                "satuan" => "STRIP",
                "stok" => 10,
                "harga_beli" => "9700",
                "harga_jual" => "11155",
                "expired_date" => "01/05/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "PANTOPRAZOLE 40 MG (ETERCON)",
                "satuan" => "TAB",
                "stok" => 20,
                "harga_beli" => "88000",
                "harga_jual" => "101200",
                "expired_date" => "01/02/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SUCRALFAT 500MG/ML (OGB DEXA)",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "15660",
                "harga_jual" => "18009",
                "expired_date" => "-",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "RANITIDIN HCL 150MG 9HJ)",
                "satuan" => "STRIP",
                "stok" => 0,
                "harga_beli" => "2500",
                "harga_jual" => "2875",
                "expired_date" => "-",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "KETOCONAZOLE 200 MG TAB (OGB DEXA)",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "5006.1",
                "harga_jual" => "5757",
                "expired_date" => "01/07/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ARDIUM 500 MG",
                "satuan" => "TAB",
                "stok" => 30,
                "harga_beli" => "9516",
                "harga_jual" => "10943",
                "expired_date" => "01/1/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "VENARON KAPS",
                "satuan" => "KAPSUL",
                "stok" => 20,
                "harga_beli" => "37030.00",
                "harga_jual" => "42585",
                "expired_date" => "01/11/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ORLISTAT (NOVELL)",
                "satuan" => "TAB",
                "stok" => 10,
                "harga_beli" => "70000",
                "harga_jual" => "80500",
                "expired_date" => "01/05/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "POSTINOR ",
                "satuan" => "TAB",
                "stok" => 2,
                "harga_beli" => "30000.6",
                "harga_jual" => "34501",
                "expired_date" => "01/06/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "DIANE",
                "satuan" => "BOX",
                "stok" => 1,
                "harga_beli" => "174611.47",
                "harga_jual" => "200803",
                "expired_date" => "01/08/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "DRAMAMINE TAB",
                "satuan" => "TAB",
                "stok" => 10,
                "harga_beli" => "2400",
                "harga_jual" => "2760",
                "expired_date" => "01/07/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ZINC TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "7500",
                "harga_jual" => "8625",
                "expired_date" => "01/12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "HISTIGO TAB",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "9500",
                "harga_jual" => "10925",
                "expired_date" => "01/02/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "MERISLON 6 MG ",
                "satuan" => "TAB",
                "stok" => 10,
                "harga_beli" => "61000",
                "harga_jual" => "70150",
                "expired_date" => "01/07/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SUPER TETRA",
                "satuan" => "STRIP",
                "stok" => 2,
                "harga_beli" => "8400",
                "harga_jual" => "9660",
                "expired_date" => "01/1/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CIPROFLOXACIN 500 MG ",
                "satuan" => "STRIP",
                "stok" => 3,
                "harga_beli" => "6850",
                "harga_jual" => "7878",
                "expired_date" => "01/03/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "COTRIMOXAZOLE TAB",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "4500",
                "harga_jual" => "5175",
                "expired_date" => "01/07/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "AMOXICILLIN 500 MG (HJ)",
                "satuan" => "STRIP",
                "stok" => 12,
                "harga_beli" => "5100",
                "harga_jual" => "5865",
                "expired_date" => "01/12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ALBOTHYL 5 ML",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "29000",
                "harga_jual" => "33350",
                "expired_date" => "01/1/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ERLAMYCETIN TETES TELINGA",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "10450",
                "harga_jual" => "12018",
                "expired_date" => "01/09/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ERLAMYCETIN TETES MATA 0.5%",
                "satuan" => "BTL",
                "stok" => 1,
                "harga_beli" => "11000",
                "harga_jual" => "12650",
                "expired_date" => "01/06/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CENDO XITROL BTL 5 ML",
                "satuan" => "BTL",
                "stok" => 4,
                "harga_beli" => "33285",
                "harga_jual" => "38278",
                "expired_date" => "01/03/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CENDO XITROL MDS",
                "satuan" => "STRIP",
                "stok" => 1,
                "harga_beli" => "27100",
                "harga_jual" => "31165",
                "expired_date" => "01/08/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "KETOCONAZOLE CR 2% 10GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "6200",
                "harga_jual" => "7130",
                "expired_date" => "01/1/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ICHTYOL SALEP",
                "satuan" => "POT",
                "stok" => 3,
                "harga_beli" => "8582",
                "harga_jual" => "9869",
                "expired_date" => "01/04/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "MICONAZOLE CR",
                "satuan" => "TUBE",
                "stok" => 7,
                "harga_beli" => "5100",
                "harga_jual" => "5865",
                "expired_date" => "01/1/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BETASON-N CR 5 GR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "12900",
                "harga_jual" => "14835",
                "expired_date" => "01/06/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BENOSON-N CR 5 GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "19500",
                "harga_jual" => "22425",
                "expired_date" => "01/11/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "MYCO-Z 10GR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "101000",
                "harga_jual" => "116150",
                "expired_date" => "01/03/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SCABIMITE CR 10 GR",
                "satuan" => "TUBE",
                "stok" => 3,
                "harga_beli" => "48652.52",
                "harga_jual" => "55950",
                "expired_date" => "01/06/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "GENOINT ",
                "satuan" => "TUBE",
                "stok" => 3,
                "harga_beli" => "6534",
                "harga_jual" => "7514",
                "expired_date" => "01/12/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BUFACORT-N CR 5 GR",
                "satuan" => "TUBE",
                "stok" => 3,
                "harga_beli" => "8000",
                "harga_jual" => "9200",
                "expired_date" => "01/03/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "BIOPLACENTON",
                "satuan" => "TUBE",
                "stok" => 3,
                "harga_beli" => "25999",
                "harga_jual" => "29899",
                "expired_date" => "01/11/2024",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "SAGESTAM CR 10 GR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "15517",
                "harga_jual" => "17845",
                "expired_date" => "01/09/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "KLODERMA OINT 10GR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "40530",
                "harga_jual" => "46610",
                "expired_date" => "01/05/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "INERSON CR 15GR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "80000",
                "harga_jual" => "92000",
                "expired_date" => "01/08/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "LAFALOS CR",
                "satuan" => "TUBE",
                "stok" => 1,
                "harga_beli" => "15609.6",
                "harga_jual" => "17951",
                "expired_date" => "01/05/2027",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "ACYCLOVIR CR",
                "satuan" => "TUBE",
                "stok" => 2,
                "harga_beli" => "8200",
                "harga_jual" => "9430",
                "expired_date" => "01/05/2025",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "TRICOFLEM INJ (SUNTIK KB)",
                "satuan" => "VIAL",
                "stok" => 20,
                "harga_beli" => "182700",
                "harga_jual" => "210105",
                "expired_date" => "01/04/2028",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "CYCOFLEM INJ (SUNTIK KB)",
                "satuan" => "VIAL",
                "stok" => 20,
                "harga_beli" => "194600",
                "harga_jual" => "223790",
                "expired_date" => "01/08/2026",
                "category" => "ETHICAL"
            ],
            [
                "sku" => "",
                "name" => "NEUROSANBE INJ",
                "satuan" => "AMPUL",
                "stok" => 16,
                "harga_beli" => "13050",
                "harga_jual" => "14500",
                "expired_date" => "01/06/2026",
                "category" => ""
            ],
            [
                "sku" => "",
                "name" => "YAKULT LIGHT (LESS SUGAR)",
                "satuan" => "PACK",
                "stok" => 0,
                "harga_beli" => "2260",
                "harga_jual" => "2599",
                "expired_date" => "-",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "YAKULT ORIGINAL",
                "satuan" => "PACK",
                "stok" => 36,
                "harga_beli" => "1780",
                "harga_jual" => "2047",
                "expired_date" => "01/09/2023",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "KIRANTI ORANGE JUICE",
                "satuan" => "BTL",
                "stok" => 2,
                "harga_beli" => "7000",
                "harga_jual" => "8050",
                "expired_date" => "01/07/2024",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "KIRANTI ORIGINAL",
                "satuan" => "BTL",
                "stok" => 0,
                "harga_beli" => "6300",
                "harga_jual" => "7245",
                "expired_date" => "-",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "LARUTAN CAP BADAK JERUK",
                "satuan" => "CAN",
                "stok" => 2,
                "harga_beli" => "5583.30",
                "harga_jual" => "6421",
                "expired_date" => "01/03/2025",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "ORONAMIN C",
                "satuan" => "BTL",
                "stok" => 12,
                "harga_beli" => "5460",
                "harga_jual" => "6279",
                "expired_date" => "01/06/2024",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "ION WATER 350ML",
                "satuan" => "BTL",
                "stok" => 24,
                "harga_beli" => "5400",
                "harga_jual" => "6210",
                "expired_date" => "01/06/2024",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "FIBEMINI ",
                "satuan" => "BTL",
                "stok" => 12,
                "harga_beli" => "6100",
                "harga_jual" => "7015",
                "expired_date" => "01/06/2024",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "POCARI SWEAT SACH 13G",
                "satuan" => "SACH",
                "stok" => 20,
                "harga_beli" => "1636.36",
                "harga_jual" => "1882",
                "expired_date" => "01/06/2024",
                "category" => "MINUMAN"
            ],
            [
                "sku" => "",
                "name" => "SOYJOY COKLAT",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8378.35",
                "harga_jual" => "9635",
                "expired_date" => "01/06/2024",
                "category" => "MAKANAN"
            ],
            [
                "sku" => "",
                "name" => "SOYJOY BLUEBERRY",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8378.35",
                "harga_jual" => "9635",
                "expired_date" => "01/06/2024",
                "category" => "MAKANAN"
            ],
            [
                "sku" => "",
                "name" => "SOYJOY STRAW",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8378.35",
                "harga_jual" => "9635",
                "expired_date" => "01/06/2024",
                "category" => "MAKANAN"
            ],
            [
                "sku" => "",
                "name" => "SOYJOY DANISH CHEESE",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8378.35",
                "harga_jual" => "9635",
                "expired_date" => "01/06/2024",
                "category" => "MAKANAN"
            ],
            [
                "sku" => "",
                "name" => "SOYJOY TROPICAL ",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8378.35",
                "harga_jual" => "9635",
                "expired_date" => "01/06/2024",
                "category" => "MAKANAN"
            ],
            [
                "sku" => "",
                "name" => "SOYJOY LEKKERS NUTS",
                "satuan" => "PCS",
                "stok" => 2,
                "harga_beli" => "8378.35",
                "harga_jual" => "9635",
                "expired_date" => "01/06/2024",
                "category" => "MAKANAN"
            ]
        ];

        $categoryCount = [];

        foreach ($produk as $key => $value) {
            \Log::info($categoryCount);
            if ($value['category'] != "") {
                $category = Kategori::whereName($value['category'])->first();
                if (!$category) {
                    $category = Kategori::create(['name' => $value['category']]);
                }

                if (array_key_exists($value['category'], $categoryCount)) {
                    $categoryCount[$value['category']] += 1;
                } else {
                    $categoryCount[$value['category']] = 1;
                }
            }



            $satuan = Satuan::whereName($value['satuan'])->first();
            if (!$satuan) {
                $satuan = Satuan::create(['name' => $value['satuan']]);
            }

            Produk::create([
                "id_kategori" => $value['category'] == "" ? null : $category->id,
                "sku" => mb_substr($value['category'] ?? '', 0, 4) . preg_replace('/\b(\w)\w*\W*/', '\1', $value['name'] ?? '') . ($categoryCount[$value['category']] ?? $key),
                "name" => $value['name'],
                "satuan" => $value['satuan'],
                "stok" => $value['stok'],
                "harga_beli" => $value['harga_beli'] == '' ? 0 : ceil($value['harga_beli']),
                "harga_jual" => $value['harga_jual'] == '' ? 0 : ceil($value['harga_jual']),
                "expired_date" => date("Y-m-d", strtotime($value['expired_date'])),
                "merk" => "",
                "diskon" => 0
            ]);
        }
    }
}
