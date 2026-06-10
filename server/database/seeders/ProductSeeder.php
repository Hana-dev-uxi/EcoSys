<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name'        => 'MacBook Pro 14"',
                'description' => 'Apple M3 Pro chip, 18GB RAM, 512GB SSD. A powerhouse for developers and creatives. Stunning Liquid Retina XDR display with ProMotion technology.',
                'price'       => 1999.99,
                'category'    => 'computers',
                'brand'       => 'apple',
                'shipping'    => true,
                'sku'         => 'MBP14-M3-512',
                'thumbnail'   => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=400&h=300&fit=crop',
                'images'      => [
                    'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1611186871525-81aa92cad6e7?w=800&h=600&fit=crop',
                ],
            ],
            [
                'name'        => 'Dell XPS 15',
                'description' => 'Intel Core i9, 32GB RAM, 1TB NVMe SSD, NVIDIA RTX 4060. Premium build quality with OLED touch display. Perfect for power users.',
                'price'       => 1749.99,
                'category'    => 'computers',
                'brand'       => 'dell',
                'shipping'    => true,
                'sku'         => 'XPS15-I9-1TB',
                'thumbnail'   => 'https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=400&h=300&fit=crop',
                'images'      => [
                    'https://images.unsplash.com/photo-1593642632559-0c6d3fc62b89?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1588872657578-7efd1f1555ed?w=800&h=600&fit=crop',
                ],
            ],
            [
                'name'        => 'Lenovo ThinkPad X1 Carbon',
                'description' => 'Intel Core i7, 16GB RAM, 512GB SSD. Ultra-lightweight at 1.12kg. Military-grade durability with legendary ThinkPad keyboard.',
                'price'       => 1399.99,
                'category'    => 'computers',
                'brand'       => 'lenovo',
                'shipping'    => true,
                'sku'         => 'X1C-I7-512',
                'thumbnail'   => 'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=400&h=300&fit=crop',
                'images'      => [
                    'https://images.unsplash.com/photo-1496181133206-80ce9b88a853?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1525547719571-a2d4ac8945e2?w=800&h=600&fit=crop',
                ],
            ],
            [
                'name'        => 'ASUS ROG Strix G16',
                'description' => 'AMD Ryzen 9, 32GB RAM, 1TB SSD, NVIDIA RTX 4070. Built for gaming. 240Hz QHD display with ROG Nebula technology.',
                'price'       => 1599.99,
                'category'    => 'computers',
                'brand'       => 'asus',
                'shipping'    => true,
                'sku'         => 'ROG-R9-4070',
                'thumbnail'   => 'https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=400&h=300&fit=crop',
                'images'      => [
                    'https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1542393545-10f5cde2c810?w=800&h=600&fit=crop',
                ],
            ],
            [
                'name'        => 'HP Spectre x360 14',
                'description' => 'Intel Core i7, 16GB RAM, 512GB SSD. 2-in-1 convertible with OLED touch display. Elegant design with HP Sure View privacy screen.',
                'price'       => 1299.99,
                'category'    => 'computers',
                'brand'       => 'hp',
                'shipping'    => false,
                'sku'         => 'SPX360-I7-512',
                'thumbnail'   => 'https://images.unsplash.com/photo-1544731612-de7f96afe55f?w=400&h=300&fit=crop',
                'images'      => [
                    'https://images.unsplash.com/photo-1544731612-de7f96afe55f?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1483389127117-b6a2102724ae?w=800&h=600&fit=crop',
                ],
            ],
            [
                'name'        => 'Microsoft Surface Pro 9',
                'description' => 'Intel Core i5, 8GB RAM, 256GB SSD. The most versatile laptop-tablet hybrid. Includes Surface Slim Pen 2 support.',
                'price'       => 999.99,
                'category'    => 'computers',
                'brand'       => 'microsoft',
                'shipping'    => true,
                'sku'         => 'SP9-I5-256',
                'thumbnail'   => 'https://images.unsplash.com/photo-1563770660941-20978e870e26?w=400&h=300&fit=crop',
                'images'      => [
                    'https://images.unsplash.com/photo-1563770660941-20978e870e26?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1585792180666-f7347c490ee2?w=800&h=600&fit=crop',
                ],
            ],
            [
                'name'        => 'Acer Swift 3',
                'description' => 'AMD Ryzen 5, 8GB RAM, 512GB SSD. Lightweight everyday laptop with all-day battery life. IPS display with wide viewing angles.',
                'price'       => 649.99,
                'category'    => 'computers',
                'brand'       => 'acer',
                'shipping'    => true,
                'sku'         => 'SW3-R5-512',
                'thumbnail'   => 'https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=400&h=300&fit=crop',
                'images'      => [
                    'https://images.unsplash.com/photo-1541807084-5c52b6b3adef?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1526657782461-9fe13402a841?w=800&h=600&fit=crop',
                ],
            ],
            [
                'name'        => 'MacBook Air M2',
                'description' => 'Apple M2 chip, 8GB RAM, 256GB SSD. Fanless design, all-day battery, stunning 13.6" Liquid Retina display. The everyday laptop, perfected.',
                'price'       => 1099.99,
                'category'    => 'computers',
                'brand'       => 'apple',
                'shipping'    => false,
                'sku'         => 'MBA-M2-256',
                'thumbnail'   => 'https://images.unsplash.com/photo-1611186871525-81aa92cad6e7?w=400&h=300&fit=crop',
                'images'      => [
                    'https://images.unsplash.com/photo-1611186871525-81aa92cad6e7?w=800&h=600&fit=crop',
                    'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?w=800&h=600&fit=crop',
                ],
            ],
        ];

        foreach ($products as $productData) {
            $thumbnail = $productData['thumbnail'];
            $images    = $productData['images'];

            unset($productData['thumbnail'], $productData['images']);

            $productData['created_at'] = now();
            $productData['updated_at'] = now();

            $productId = DB::table('products')->insertGetId($productData);

            // Insert thumbnail
            DB::table('thumbnails')->insert([
                'product_id' => $productId,
                'thumbnail'  => $thumbnail,
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert images
            foreach ($images as $image) {
                DB::table('images')->insert([
                    'product_id' => $productId,
                    'image'      => $image,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
