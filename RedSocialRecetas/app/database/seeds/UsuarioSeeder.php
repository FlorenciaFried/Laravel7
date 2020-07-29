<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user0 = User::create([
            'name' => 'Nombre0',
            'email' => 'correo0@correo.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://codigoconflor.com',
        ]);

        $user0->perfil()->create();

        $user1 = User::create([
            'name' => 'Nombre1',
            'email' => 'correo1@correo.com',
            'password' => Hash::make('12345678'),
            'url' => 'http://codigoconflor.com',
        ]);

        $user1->perfil()->create();
    }
}
