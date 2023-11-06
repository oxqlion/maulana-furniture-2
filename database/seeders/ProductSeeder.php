<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // Kursi Cafe
            [
                'nama' => 'Wishbone chair cafe & resto',
                'harga' => 750000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 7,
                'minimal_pemesanan' => 1,
                'kategori' => 'Kursi Cafe',
                'material' => 'Kayu Jati Perhutani + Anyaman Tali Loom',
                'furnish' => 'Melamine Natural / Custom',
                'ukuran' => '46 x 43 x 75',
            ],
            [
                'nama' => 'Kursi makan kayu jati jepara',
                'harga' => 725000,
                'kondisi' => 'Baru',
                'waktu_preorder' => null,
                'minimal_pemesanan' => 4,
                'kategori' => 'Kursi Cafe',
                'material' => 'Kayu Jati Perhutani Grade A Abangan + Rotan',
                'furnish' => 'Melamine Natural / Custom',
                'ukuran' => '46 x 48 x 83',
            ],
            [
                'nama' => 'Kursi Makan Kayu Jati',
                'harga' => 375000,
                'kondisi' => 'Baru',
                'waktu_preorder' => null,
                'minimal_pemesanan' => 4,
                'kategori' => 'Kursi Cafe',
                'material' => 'Kayu Jati Grade A',
                'furnish' => 'Bleaching treatment',
                'ukuran' => 'Standar kursi',
            ],
            [
                'nama' => 'Japandi Rattan Chair',
                'harga' => 2500000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 14,
                'minimal_pemesanan' => 3,
                'kategori' => 'Kursi Cafe',
                'material' => 'Kayu Jati + Rotan Alami',
                'furnish' => 'Pilihan warna natural woodstain, salak muda, salak brown, gold, duco melamine semi/doff/glossy (NC/ML)',
                'ukuran' => null,
            ],
            [
                'nama' => 'Rattan Dining Chair',
                'harga' => 725000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 14,
                'minimal_pemesanan' => 4,
                'kategori' => 'Kursi Cafe',
                'material' => 'Kayu Jati + Rotan',
                'furnish' => 'Pilihan warna natural woodstain, salak muda, salak brown, gold, duco melamine semi/doff/glossy (NC/ML)',
                'ukuran' => null,
            ],
            [
                'nama' => 'Ropan Dining Chair',
                'harga' => 550000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 14,
                'minimal_pemesanan' => 4,
                'kategori' => 'Kursi Cafe',
                'material' => 'Kayu Jati Grade Abangan',
                'furnish' => 'Melamine Natural',
                'ukuran' => '42 x 40 x 80 cm',
            ],
            [
                'nama' => 'Kursi Cafe Kayu Jati',
                'harga' => 799000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 15,
                'minimal_pemesanan' => 1,
                'kategori' => 'Kursi Cafe',
                'material' => 'Kayu Jati',
                'furnish' => 'Melamine Natural',
                'ukuran' => null,
            ],
            [
                'nama' => 'Kursi Cafe Minimalis',
                'harga' => 799000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 15,
                'minimal_pemesanan' => 1,
                'kategori' => 'Kursi Cafe',
                'material' => 'Kayu Jati Grade Abangan',
                'furnish' => 'Melamine Natural',
                'ukuran' => null,
            ],
            [
                'nama' => 'Ropan Chair',
                'harga' => 450000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 14,
                'minimal_pemesanan' => 4,
                'kategori' => 'Kursi Cafe',
                'material' => 'Kayu Jati Grade Abangan',
                'furnish' => 'Melamine Natural',
                'ukuran' => '42 x 40 x 80 cm',
            ],
            [
                'nama' => 'Lounge Chair',
                'harga' => 795000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 15,
                'minimal_pemesanan' => 4,
                'kategori' => 'Kursi Cafe',
                'material' => 'Kayu Jati dan Rotan',
                'furnish' => 'Melamine Natural',
                'ukuran' => null,
            ],
            [
                'nama' => 'Kursi Makan Rotan Kayu Jati',
                'harga' => 550000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 15,
                'minimal_pemesanan' => 4,
                'kategori' => 'Kursi Cafe',
                'material' => 'Kayu Jati',
                'furnish' => 'Melamine Natural',
                'ukuran' => '45 x 45 x 80 cm',
            ],

            // Meja Tamu
            [
                'nama' => 'Coffee Table Kayu Jati Minimalis',
                'harga' => 1650000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 15,
                'minimal_pemesanan' => 1,
                'kategori' => 'Meja Tamu',
                'material' => 'Kayu Jati Perhutani',
                'furnish' => 'Melamine',
                'ukuran' => '120 x 45 x 45 cm',
            ],

            // Set Meja Makan
            [
                'nama' => 'Dining Set Hiroshima',
                'harga' => 2250000,
                'kondisi' => 'Baru',
                'waktu_preorder' => null,
                'minimal_pemesanan' => 1,
                'kategori' => 'Set Meja Makan',
                'material' => 'Kayu Jati Perhutani Grade A',
                'furnish' => 'Melamine',
                'ukuran' => '120 x 45 x 45 cm dan Kursi Standart',
            ],
            [
                'nama' => 'Dining set meja makan',
                'harga' => 5250000,
                'kondisi' => 'Baru',
                'waktu_preorder' => null,
                'minimal_pemesanan' => 1,
                'kategori' => 'Set Meja Makan',
                'material' => 'Kayu Jati Grade A',
                'furnish' => 'Bleaching treatment',
                'ukuran' => 'Standar Kursi',
            ],
            [
                'nama' => 'set meja makan 4 kursi',
                'harga' => 4375000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 14,
                'minimal_pemesanan' => 1,
                'kategori' => 'Set Meja Makan',
                'material' => 'Kayu Jati',
                'furnish' => 'natural / Black semi dof',
                'ukuran' => null,
            ],
            [
                'nama' => 'set meja makan jati',
                'harga' => 5000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 14,
                'minimal_pemesanan' => 1,
                'kategori' => 'Set Meja Makan',
                'material' => 'Kayu Jati x Besi',
                'furnish' => 'natural / Black semi dof',
                'ukuran' => '240 x 90 x 78 cm',
            ],
            [
                'nama' => 'Set Meja Kursi Cafe Jati - Set Kursi Meja',
                'harga' => 3100000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 14,
                'minimal_pemesanan' => 4,
                'kategori' => 'Set Meja Makan',
                'material' => 'Kayu Jati',
                'furnish' => 'Melamine Natural',
                'ukuran' => '80 x 80 x 75 cm dan 45 x 45 x 80 cm',
            ],

            // Pintu Kayu
            [
                'nama' => 'Pintu Kayu Meranti',
                'harga' => 1550000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 7,
                'minimal_pemesanan' => 1,
                'kategori' => 'Pintu Kayu',
                'material' => 'Kayu Meranti',
                'furnish' => 'Melamine Natural (sesuai pesanan)',
                'ukuran' => null,
            ],

            // Sofa
            [
                'nama' => 'Foostool Sofa',
                'harga' => 3500000,
                'kondisi' => 'Baru',
                'waktu_preorder' => null,
                'minimal_pemesanan' => 1,
                'kategori' => 'Sofa',
                'material' => 'Kayu Jati Perhutani',
                'furnish' => 'Melamine Natural / Custom',
                'ukuran' => '160 x 75 x 60',
            ],
            [
                'nama' => 'Sofa Kayu Jati Minimalis',
                'harga' => 4000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 15,
                'minimal_pemesanan' => 1,
                'kategori' => 'Sofa',
                'material' => 'Kayu Jati Perhutani Grade A (Abangan)',
                'furnish' => 'Natural / Custom',
                'ukuran' => null,
            ],
            [
                'nama' => 'Kursi Sofa Minimalis Kayu Jati Solid',
                'harga' => 3500000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 15,
                'minimal_pemesanan' => 1,
                'kategori' => 'Sofa',
                'material' => 'Kayu Jati Perhutani Grade A (Abangan)',
                'furnish' => 'Walnut / custom',
                'ukuran' => null,
            ],

            // Kitchen Set
            [
                'nama' => 'Kitchen Set Jati Jepara',
                'harga' => 3500000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 15,
                'minimal_pemesanan' => 1,
                'kategori' => 'Kitchen Set',
                'material' => 'Kayu Jati Perhutani Grade A (Abangan)',
                'furnish' => 'Walnut / custom',
                'ukuran' => null,
            ],

            // Gebyok Kayu Jati
            [
                'nama' => 'Gebyok Pintu Rumah Kayu Jati',
                'harga' => 12000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => null,
                'minimal_pemesanan' => 1,
                'kategori' => 'Gebyok Kayu Jati',
                'material' => 'Kayu Jati',
                'furnish' => 'Custom',
                'ukuran' => '3 x 2,7 m',
            ],
            [
                'nama' => 'Gebyok Ukir Jepara Asli Pengrajin',
                'harga' => 10000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => null,
                'minimal_pemesanan' => 1,
                'kategori' => 'Gebyok Kayu Jati',
                'material' => 'Kayu Jati',
                'furnish' => 'Custom',
                'ukuran' => '3 x 2,7 m',
            ],
            [
                'nama' => 'Gebyok Ukir Jepara READY STOCK',
                'harga' => 12500000,
                'kondisi' => 'Baru',
                'waktu_preorder' => null,
                'minimal_pemesanan' => 1,
                'kategori' => 'Gebyok Kayu Jati',
                'material' => 'Kayu Jati',
                'furnish' => 'Custom',
                'ukuran' => '3 x 2,7 m',
            ],
            [
                'nama' => 'Gebyok Jati Ukir Jepara Terbaru',
                'harga' => 12000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => NULL,
                'minimal_pemesanan' => 1,
                'kategori' => 'Gebyok Kayu Jati',
                'material' => 'Kayu Jati',
                'furnish' => 'Custom',
                'ukuran' => '3 x 2,7 m',
            ],
            [
                'nama' => 'Ready Stock Gebyok Kayu Jati Ukir',
                'harga' => 12500000,
                'kondisi' => 'Baru',
                'waktu_preorder' => NULL,
                'minimal_pemesanan' => 1,
                'kategori' => 'Gebyok Kayu Jati',
                'material' => 'Kayu Jati',
                'furnish' => 'Custom',
                'ukuran' => '3 x 2,7 m',
            ],
            [
                'nama' => 'Jual Gebyok Kayu Jati',
                'harga' => 12000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => NULL,
                'minimal_pemesanan' => 1,
                'kategori' => 'Gebyok Kayu Jati',
                'material' => 'Kayu Jati',
                'furnish' => 'Custom',
                'ukuran' => '3 x 2,7 m',
            ],

            // Rumah Kayu
            [
                'nama' => 'Rumah Kayu Jati Panggung',
                'harga' => 95000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 50,
                'minimal_pemesanan' => 1,
                'kategori' => 'Rumah Kayu',
                'material' => 'Kayu Jati Perhutani',
                'furnish' => 'Melamine Natural / Custom',
                'ukuran' => '4 x 6 M',
            ],
            [
                'nama' => 'Rumah Gladak Kayu Jati Ukir',
                'harga' => 99000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 50,
                'minimal_pemesanan' => 1,
                'kategori' => 'Rumah Kayu',
                'material' => 'Kayu Jati Perhutani',
                'furnish' => 'Melamine Natural / Custom',
                'ukuran' => '6 x 4 M',
            ],
            [
                'nama' => 'Rumah Segitiga 2 Lantai Kayu Jati',
                'harga' => 87000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 50,
                'minimal_pemesanan' => 1,
                'kategori' => 'Rumah Kayu',
                'material' => 'Kayu Jati Perhutani',
                'furnish' => 'Melamine Natural / Custom',
                'ukuran' => '4 x 4 M',
            ],
            [
                'nama' => 'Rumah Lumbung Kayu Jati Tingkat',
                'harga' => 97500000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 30,
                'minimal_pemesanan' => 1,
                'kategori' => 'Rumah Kayu',
                'material' => 'Kayu Jati Perhutani',
                'furnish' => 'Melamine Natural / Custom',
                'ukuran' => '4 x 4 M',
            ],
            [
                'nama' => 'Rumah Lumbung Kayu Jati',
                'harga' => 97000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 30,
                'minimal_pemesanan' => 1,
                'kategori' => 'Rumah Kayu',
                'material' => 'Kayu Jati Perhutani',
                'furnish' => 'Melamine Natural / Custom',
                'ukuran' => '4 x 4 M',
            ],
            [
                'nama' => 'Rumah Kayu Lumbung 2 Lantai',
                'harga' => 98000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 30,
                'minimal_pemesanan' => 1,
                'kategori' => 'Rumah Kayu',
                'material' => 'Kayu Jati Perhutani',
                'furnish' => 'Melamine Natural / Custom',
                'ukuran' => '4 x 4 M',
            ],
            [
                'nama' => 'Rumah Kayu Lumbung Tingkat Kayu Jati',
                'harga' => 97000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 30,
                'minimal_pemesanan' => 1,
                'kategori' => 'Rumah Kayu',
                'material' => 'Kayu Jati Perhutani',
                'furnish' => 'Melamine Natural / Custom',
                'ukuran' => '4 x 4 M',
            ],

            //Gazebo
            [
                'nama'=> 'Gaszebo Pergola Minimalis',
                'harga' => 43000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 30,
                'minimal_pemesanan' => 1,
                'kategori' => 'Gazebo',
                'material' => 'Kayu Jati Perhutani',
                'furnish' => 'Melamine Natural / Custom',
                'ukuran' => '4 x 3 M',
            ],
            [
                'nama'=> 'Gaszebo Minimalis Kayu Jati',
                'harga' => 29000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 30,
                'minimal_pemesanan' => 1,
                'kategori' => 'Gazebo',
                'material' => 'Kayu Jati Perhutani',
                'furnish' => 'Melamine Natural / Custom',
                'ukuran' => '2 x 2 M',
            ],
            [
                'nama'=> 'Gaszebo Tingkat Kayu Jati',
                'harga' => 58000000,
                'kondisi' => 'Baru',
                'waktu_preorder' => 30,
                'minimal_pemesanan' => 1,
                'kategori' => 'Gazebo',
                'material' => 'Kayu Jati Perhutani',
                'furnish' => 'Melamine Natural / Custom',
                'ukuran' => '3 x 3 M',
            ],
        ];
        foreach ($products as $product) {
            DB::table('products')->insert($product);
        }
    }
}
