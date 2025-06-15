<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Order;
use App\Models\Product;

class OrderSeeder extends Seeder
{
    public function run(): void
    {
        // Örnek durumlar
        $statuses = ['Pending', 'Completed', 'Cancelled'];

        // 10 adet rastgele sipariş oluştur
        for ($i = 0; $i < 10; $i++) {
            $product = Product::inRandomOrder()->first();
            $quantity = rand(1, 5);
            $totalPrice = $product->price * $quantity;

            Order::create([
                'product_id' => $product->id,
                'quantity' => $quantity,
                'total_price' => $totalPrice,
                'status' => $statuses[array_rand($statuses)],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
