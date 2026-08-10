<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categoria = Categoria::find(1);

        Produto::create([
            'Nome' => "Notebook",
            'Preco' => 7000.50,
            'Quantidade' => 12,
            'categoria_id' => $categoria->id,
        ]);
    }
}