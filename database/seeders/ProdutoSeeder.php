<?php

namespace Database\Seeders;

use App\Models\Produto;
use Database\Factories\ProdutoFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produto::factory(99)->create();
    }
}
