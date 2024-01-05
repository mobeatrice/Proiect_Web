<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id' => 101,
                'nume_categorie' => 'arta'
            ],
            [
                'id' => 102,
                'nume_categorie' => 'tehnica'
            ],
            [
                'id' => 103,
                'nume_categorie' => 'stiinta'
            ],
            [
                'id' => 104,
                'nume_categorie' => 'moda'
            ]
        ];

        foreach ($categories as $key => $value) {
            Categorie::create($value);
        }
    }
}
