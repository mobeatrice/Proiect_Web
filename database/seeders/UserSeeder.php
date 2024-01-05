<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'nume' => 'Popescu',
                'prenume' => 'Ana',
                'username' => 'PopescuA',
                'password' => 'Ana1234@!',
                'email' => 'ana@gmail.com',
                'id_rol' => 'A01',
                'id_categorie' => NULL
            ],
            [
                'nume' => 'Dumitrescu',
                'prenume' => 'Ion',
                'username' => 'Ionica',
                'password' => 'Parola33',
                'email' => 'ion@yahoo.com',
                'id_rol' => 'C01',
                'id_categorie' => NULL
            ],
            [
                'nume' => 'Avram',
                'prenume' => 'Amelia',
                'username' => 'AmyyA',
                'password' => 'LaptopA2',
                'email' => 'amy@gmail.com',
                'id_rol' => 'J01',
                'id_categorie' => 104
            ],
            [
                'nume' => 'Mateias',
                'prenume' => 'Radu',
                'username' => 'RaduMateias',
                'password' => 'MatRadu3',
                'email' => 'radu@gmail.com',
                'id_rol' => 'E01',
                'id_categorie' => NULL
            ],
            [
                'nume' => 'Bondor',
                'prenume' => 'Laura',
                'username' => 'BLaura',
                'password' => 'Cos745!',
                'email' => 'laura@yahoo.com',
                'id_rol' => 'E01',
                'id_categorie' => NULL
            ],
            [
                'nume' => 'Mihalescu',
                'prenume' => 'Maria',
                'username' => 'Maria1',
                'password' => 'MouseM8',
                'email' => 'maria@yahoo.com',
                'id_rol' => 'C01',
                'id_categorie' => NULL
            ],
            [
                'nume' => 'Ionescu',
                'prenume' => 'Mihai',
                'username' => 'Imihai',
                'password' => 'Mihai89@',
                'email' => 'mihai@gmail.com',
                'id_rol' => 'J01',
                'id_categorie' => 101
            ],
            [
                'nume' => 'Juravle',
                'prenume' => 'Alex',
                'username' => 'AAlex',
                'password' => 'Tel021?',
                'email' => 'alex@gmail.com',
                'id_rol' => 'J01',
                'id_categorie' => 102
            ],
            [
                'nume' => 'Popescu',
                'prenume' => 'Ilie',
                'username' => 'IlieP',
                'password' => 'Hnxe456$',
                'email' => 'ilie@yahoo.com',
                'id_rol' => 'J01',
                'id_categorie' => 103
            ],
            [
                'nume' => 'Badelita',
                'prenume' => 'Viorel',
                'username' => 'Viorel',
                'password' => 'ghTy009',
                'email' => 'viorel@gmail.com',
                'id_rol' => 'E01',
                'id_categorie' => NULL
            ],
            [
                'nume' => 'Avram',
                'prenume' => 'Ioana',
                'username' => 'IoanaA',
                'password' => 'Scara92?',
                'email' => 'ioana@gmail.com',
                'id_rol' => 'J01',
                'id_categorie' => 102
            ],
            [
                'nume' => 'Pop',
                'prenume' => 'Iulian',
                'username' => 'IuliPop',
                'password' => 'Gdmo1232',
                'email' => 'iulian@yahoo.com',
                'id_rol' => 'J01',
                'id_categorie' => 101
            ],
        ];

        foreach ($users as $key => $value){
            User::create($value);
        }
    }
}
