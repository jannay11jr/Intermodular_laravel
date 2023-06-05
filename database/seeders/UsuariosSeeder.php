<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Usuario;


class UsuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = new Usuario();
        $usuario->login = 'admin';
        $usuario->password = bcrypt('admin');
        $usuario->save();

        $usuario = new Usuario();
        $usuario->login = 'invitado';
        $usuario->password = bcrypt('invitado');
        $usuario->save();
    }
}
