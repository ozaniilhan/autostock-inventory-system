<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::create([
            'name' => 'Fren Balatası',
            'stock_quantity' => 100,
            'price' => 299.99,
            'category_id' => 3, // Yedek Parça
        ]);

        Product::create([
            'name' => 'Yağ Filtresi',
            'stock_quantity' => 50,
            'price' => 89.50,
            'category_id' => 3, // Yedek Parça
        ]);

        Product::create([
            'name' => 'USB Bellek 64GB',
            'stock_quantity' => 200,
            'price' => 149.00,
            'category_id' => 1, // Elektronik
        ]);

        Product::create([
            'name' => 'HDMI Kablosu',
            'stock_quantity' => 120,
            'price' => 59.99,
            'category_id' => 1, // Elektronik
        ]);

        Product::create([
            'name' => 'Defter A4 Spiralli',
            'stock_quantity' => 300,
            'price' => 19.90,
            'category_id' => 2, // Kırtasiye
        ]);

        Product::create([
            'name' => 'Tükenmez Kalem Seti',
            'stock_quantity' => 500,
            'price' => 24.50,
            'category_id' => 2, // Kırtasiye
        ]);

        Product::create([
            'name' => 'Motor Yağı 4L',
            'stock_quantity' => 80,
            'price' => 349.00,
            'category_id' => 3, // Yedek Parça
        ]);

        Product::create([
            'name' => 'Bluetooth Kulaklık',
            'stock_quantity' => 60,
            'price' => 499.00,
            'category_id' => 1, // Elektronik
        ]);

        Product::create([
            'name' => 'Silgi',
            'stock_quantity' => 800,
            'price' => 2.50,
            'category_id' => 2, // Kırtasiye
        ]);

        Product::create([
            'name' => 'Flaş Bellek 128GB',
            'stock_quantity' => 100,
            'price' => 239.00,
            'category_id' => 1, // Elektronik
        ]);
    }
}
