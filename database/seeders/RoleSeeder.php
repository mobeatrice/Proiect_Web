<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 'A01',
                'denumire_rol' => 'admin'
            ],
            [
                'id' => 'E01',
                'denumire_rol' => 'editor'
            ],
            [
                'id' => 'J01',
                'denumire_rol' => 'jurnalist'
            ],
            [
                'id' => 'C01',
                'denumire_rol' => 'cititor'
            ]
        ];

        foreach ($roles as $key => $value) {
            Role::create($value);
        }
    }
}
