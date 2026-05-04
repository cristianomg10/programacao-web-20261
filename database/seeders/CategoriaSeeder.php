<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categorias = ['Eletrônicos', 'Roupas', 'Alimentos', 'Livros', 'Brinquedos'];

        foreach ($categorias as $nome) {
            $c = new Categoria();
            $c->nome = $nome;
            $c->save();
        }
    }
}
