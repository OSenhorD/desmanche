<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Categories;
use Illuminate\Database\Seeder;

final class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categories::factory()
            ->count(10)
            ->hasProducts(20)
            ->create();
    }
}
