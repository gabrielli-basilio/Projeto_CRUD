<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produto;
use App\Models\Categoria;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        // pega todas as categorias já cadastradas, na ordem que foram criadas
        $categorias = Categoria::all();

        $eletronicos = $categorias[0]; // Eletrônicos
        $roupas = $categorias[1];      // Roupas
        $alimentos = $categorias[2];   // Alimentos

        Produto::create([
            'Nome' => "Notebook",
            'Preco' => 7000.50,
            'Quantidade' => 12,
            'categoria_id' => $eletronicos->id,
        ]);

        Produto::create([
            'Nome' => "Camiseta Branca",
            'Preco' => 90.00,
            'Quantidade' => 10,
            'categoria_id' => $roupas->id,
        ]);

        Produto::create([
            'Nome' => "Chocolate",
            'Preco' => 11.00,
            'Quantidade' => 25,
            'categoria_id' => $alimentos->id,
        ]);
    }
}