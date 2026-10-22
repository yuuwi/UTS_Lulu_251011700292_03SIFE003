<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Recipe;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'name' => 'Nasi Goreng Spesial',
                'ingredients' => 'Nasi putih, Telur, Bawang merah, Bawang putih, Kecap manis, Garam',
                'steps' => "1. Tumis bumbu halus hingga harum.\n2. Masukkan telur, orak-arik.\n3. Masukkan nasi dan kecap, aduk rata.",
                'cook_time' => '20 Menit',
                'image' => 'nasi_goreng.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'name' => 'Soto Ayam Lamongan',
                'ingredients' => 'Daging ayam, Serai, Daun jeruk, Bawang merah, Bawang putih, Kunyit, Bihun',
                'steps' => "1. Rebus ayam hingga empuk.\n2. Tumis bumbu halus, masukkan ke kuah.\n3. Sajikan dengan bihun dan koya.",
                'cook_time' => '45 Menit',
                'image' => 'soto_ayam.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'name' => 'Es Cendol Dawet',
                'ingredients' => 'Cendol, Santan kelapa, Gula merah cair, Es batu',
                'steps' => "1. Siapkan gelas saji.\n2. Masukkan gula merah cair dan cendol.\n3. Tuang santan dan es batu.",
                'cook_time' => '10 Menit',
                'image' => 'es_cendol.jpg',
                'category' => 'Minuman'
            ],
            [
                'name' => 'Rendang Daging Sapi',
                'ingredients' => 'Daging sapi, Santan kental, Serai, Lengkuas, Cabai merah, Bawang merah, Bawang putih',
                'steps' => "1. Tumis bumbu halus dan rempah.\n2. Masukkan daging sapi, aduk rata.\n3. Tuang santan, masak dengan api kecil hingga berminyak.",
                'cook_time' => '120 Menit',
                'image' => 'rendang.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'name' => 'Sate Ayam Madura',
                'ingredients' => 'Daging ayam, Kacang tanah goreng, Bawang putih, Kecap manis, Bawang merah, Tusuk sate',
                'steps' => "1. Potong daging dan tusuk ke tusukan sate.\n2. Haluskan bumbu kacang, campur kecap.\n3. Bakar sate sambil dioles bumbu hingga matang.",
                'cook_time' => '40 Menit',
                'image' => 'sate_ayam.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'name' => 'Bakso Kuah Sapi',
                'ingredients' => 'Daging sapi halus, Tepung tapioka, Bawang putih, Tulang sapi untuk kuah, Seledri, Mie kuning',
                'steps' => "1. Bentuk adonan bakso lalu rebus hingga mengapung.\n2. Rebus tulang sapi untuk membuat kuah gurih.\n3. Sajikan bakso bersama mie dan kuah panas.",
                'cook_time' => '60 Menit',
                'image' => 'bakso.jpg',
                'category' => 'Makanan Utama'
            ],
            [
                'name' => 'Gado-Gado Jakarta',
                'ingredients' => 'Kangkung, Tauge, Tahu goreng, Tempe goreng, Telur rebus, Bumbu kacang, Kerupuk',
                'steps' => "1. Rebus sayuran hingga matang.\n2. Ulek bumbu kacang dengan sedikit air asam.\n3. Campur sayuran dengan bumbu kacang, sajikan dengan kerupuk.",
                'cook_time' => '25 Menit',
                'image' => 'gado_gado.jpg',
                'category' => 'Makanan Tradisional'
            ],
        ];

        foreach ($data as $recipe) {
            Recipe::create($recipe);
        }
    }
}