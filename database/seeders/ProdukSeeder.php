<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        $produks = [
            [
                'nama' => 'Sourdough Original',
                'harga' => 25000,
                'stok' => 10,
                'gambar' => null,
                'deskripsi' => 'Sourdough Original adalah roti yang dibuat melalui fermentasi alami menggunakan starter tanpa ragi instan. Proses ini menghasilkan rasa sedikit asam yang khas serta aroma yang lebih alami. Teksturnya berongga dan lembut di bagian dalam dengan kulit luar yang renyah. Karena fermentasinya alami, pembuatannya membutuhkan waktu lebih lama dan dipercaya lebih mudah dicerna dibanding roti biasa.',
            ],
            [
                'nama' => 'Sourdough Pandan',
                'harga' => 30000,
                'stok' => 10,
                'gambar' => null,
                'deskripsi' => 'Sourdough Pandan adalah roti sourdough dengan tambahan rasa dan aroma pandan pada adonannya. Tetap dibuat melalui fermentasi alami menggunakan starter, roti ini memiliki rasa asam khas yang lembut. Aroma harum dan manis ringan dari pandan memberikan cita rasa yang unik dan khas Indonesia. Teksturnya berongga dan lembut di dalam, dengan kulit luar yang renyah serta warna hijau alami yang menarik.',
            ],
            [
                'nama' => 'Sourdough Keju',
                'harga' => 35000,
                'stok' => 10,
                'gambar' => null,
                'deskripsi' => 'Sourdough Cheese adalah roti sourdough yang dibuat melalui fermentasi alami dengan starter, sehingga memiliki rasa asam khas. Adonan roti ini dipadukan dengan keju yang memberikan cita rasa gurih, creamy, dan sedikit asin, berpadu harmonis dengan rasa asamnya. Teksturnya lembut dan berongga di bagian dalam, dengan kulit luar yang renyah. Saat dipanggang, aroma keju yang meleleh membuat roti ini semakin menggugah selera.',
            ],
            [
                'nama' => 'Sourdough Coklat',
                'harga' => 35000,
                'stok' => 10,
                'gambar' => null,
                'deskripsi' => 'Sourdough Chocolate adalah roti sourdough yang dipadukan dengan chocolate chips atau potongan cokelat di dalam adonannya. Dibuat melalui fermentasi alami dengan starter, roti ini memiliki rasa asam khas yang lembut. Perpaduan rasa sedikit asam dengan manis dan legit cokelat menciptakan cita rasa yang unik dan seimbang. Teksturnya berongga di bagian dalam dengan kulit luar yang renyah, serta aroma cokelat yang semakin menggoda saat dipanggang.',
            ],
        ];

        foreach ($produks as $produk) {
            Produk::updateOrCreate(
                ['nama' => $produk['nama']],
                $produk
            );
        }
    }
}
