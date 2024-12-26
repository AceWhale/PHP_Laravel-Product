<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            // Канцтовари
            [
                'name' => 'Тетрадь A4 в клетку',
                'description' => 'Тетрадь с мягкой обложкой, 80 страниц.',
                'price' => 20.00,
                'category_id' => 1,
            ],
            [
                'name' => 'Ручка гелевая синяя',
                'description' => 'Гелевая ручка с мягким корпусом для комфортного письма.',
                'price' => 15.50,
                'category_id' => 1,
            ],
            [
                'name' => 'Карандаши цветные (набор 12 шт.)',
                'description' => 'Цветные карандаши для рисования.',
                'price' => 50.00,
                'category_id' => 1,
            ],

            // Напої
            [
                'name' => 'Сік апельсиновий 1 л',
                'description' => 'Натуральный апельсиновый сок, без добавленного сахара.',
                'price' => 25.00,
                'category_id' => 2,
            ],
            [
                'name' => 'Мінеральна вода 0.5 л',
                'description' => 'Газированная минеральная вода в пластиковой бутылке.',
                'price' => 12.00,
                'category_id' => 2,
            ],
            [
                'name' => 'Кава розчинна 200 г',
                'description' => 'Быстрорастворимый кофе с насыщенным вкусом.',
                'price' => 85.00,
                'category_id' => 2,
            ],

            // Молочні вироби
            [
                'name' => 'Молоко 2.5% жирності 1 л',
                'description' => 'Пастеризованное молоко с оптимальной жирностью.',
                'price' => 23.00,
                'category_id' => 3,
            ],
            [
                'name' => 'Йогурт полуничний 300 мл',
                'description' => 'Натуральный йогурт с кусочками клубники.',
                'price' => 18.00,
                'category_id' => 3,
            ],
            [
                'name' => 'Сир твердий Гауда 200 г',
                'description' => 'Твёрдый сыр с насыщенным вкусом.',
                'price' => 60.00,
                'category_id' => 3,
            ],
            [
                'name' => 'Сметана 15% жирності 400 г',
                'description' => 'Нежная сметана для супов и выпечки.',
                'price' => 35.00,
                'category_id' => 3,
            ],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
