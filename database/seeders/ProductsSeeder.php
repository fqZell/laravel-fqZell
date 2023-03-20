<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::query()->create([
            'title' => 'test 1',
            'content' => 'test 1 test 1 test 1',
        ]);

        Product::query()->create([
            'title' => 'test 2',
            'content' => 'test 2 test 2 test 2',
        ]);

        Product::query()->create([
            'title' => 'test 3',
            'content' => 'test 3 test 3 test 3',
        ]);

        Product::query()->create([
            'title' => 'test 4',
            'content' => 'test 4 test 4 test 4',
        ]);

        Product::query()->create([
            'title' => 'test 6',
            'content' => 'test 6 test 6 test 6',
        ]);

        Product::query()->create([
            'title' => 'test 5',
            'content' => 'test 5 test 5 test 5',
        ]);

        Product::query()->create([
            'title' => 'test 7',
            'content' => 'test 7 test 7 test 7',
        ]);

        Product::query()->create([
            'title' => 'test 8',
            'content' => 'test 8 test 8 test 8',
        ]);

        Product::query()->create([
            'title' => 'test 9',
            'content' => 'test 9 test 9 test 9',
        ]);

        Product::query()->create([
            'title' => 'test 10',
            'content' => 'test 10 test 10 test 10',
        ]);
    }
}
