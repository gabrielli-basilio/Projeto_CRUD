<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = ['Eletrônicos', 'Roupas', 'Alimentos'];

        foreach ($categorias as $nome) {
            Categoria::create([
                'Nome' => $nome,
            ]);
        }
    }
}