<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empresa;
use App\Models\Usuario;
use Illuminate\Support\Facades\DB;


class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('ALTER TABLE empresas AUTO_INCREMENT = 0');
        $empresa = new Empresa();
        $empresa -> cif = "V12685970";
        $empresa -> nombre_empresa = "NTT Data";
        $empresa -> descripcion = "Empresa creada a nivel nacional desde más de veinte años";
        $empresa -> notas = "?";
        $empresa -> email = "nttdata@gmail.com";
        $empresa -> email_verified_at = null;
        $empresa -> direccion = "Avd. Comunidad Valenciana, 7";
        $empresa -> provincia = "Alicante";
        $empresa -> poblacion = "Alicante";
        $empresa -> save();

        $empresa = new Empresa();
        $empresa -> cif = "V51189843";
        $empresa -> nombre_empresa = "SIME";
        $empresa -> descripcion = "Loreeeeeeeem";
        $empresa -> notas = "?";
        $empresa -> email = "sime@gmail.com";
        $empresa -> email_verified_at = null;
        $empresa -> direccion = "Avd. Suecia, 10";
        $empresa -> provincia = "Alicante";
        $empresa -> poblacion = "Benidorm";
        $empresa -> save();

        $empresa = new Empresa();
        $empresa -> cif = "B34932160";
        $empresa -> nombre_empresa = "Centauro";
        $empresa -> descripcion = "Loreeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeeem";
        $empresa -> notas = "?";
        $empresa -> email = "centauro@gmail.com";
        $empresa -> email_verified_at = null;
        $empresa -> direccion = "Avd. Estocolmo";
        $empresa -> provincia = "Alicante";
        $empresa -> poblacion = "Alicante";
        $empresa -> save();

        $empresa = new Empresa();
        $empresa -> cif = "A36954204";
        $empresa -> nombre_empresa = "Accenture";
        $empresa -> descripcion = "Loreeeeeeeeem";
        $empresa -> notas = "?";
        $empresa -> email = "accenture@gmail.com";
        $empresa -> email_verified_at = null;
        $empresa -> direccion = "Avd. Poligono industrial, 3";
        $empresa -> provincia = "Alicante";
        $empresa -> poblacion = "Alicante";
        $empresa -> save();

        $empresa = new Empresa();
        $empresa -> cif = "S2567411J";
        $empresa -> nombre_empresa = "Telefonica";
        $empresa -> descripcion = "Loreeeeeeeeeeeeeeem";
        $empresa -> notas = "?";
        $empresa -> email = "telefonica@gmail.com";
        $empresa -> email_verified_at = null;
        $empresa -> direccion = "Avd. Rotonda, 1";
        $empresa -> provincia = "Alicante";
        $empresa -> poblacion = "Nucia";
        $empresa -> save();

        $empresa = new Empresa();
        $empresa -> cif = "G15167125";
        $empresa -> nombre_empresa = "Apple";
        $empresa -> descripcion = "Empresa creada a nivel nacional desde más de veinte años";
        $empresa -> notas = "?";
        $empresa -> email = "apple@gmail.com";
        $empresa -> email_verified_at = null;
        $empresa -> direccion = "Pinar de Garaita, 22";
        $empresa -> provincia = "Alicante";
        $empresa -> poblacion = "Nucia";
        $empresa -> save();


        $empresa = new Empresa();
        $empresa -> cif = "U61595740";
        $empresa -> nombre_empresa = "Microsoft";
        $empresa -> descripcion = "Empresa creada a nivel nacional desde más de veinte años";
        $empresa -> notas = "?";
        $empresa -> email = "microsoft@gmail.com";
        $empresa -> email_verified_at = null;
        $empresa -> direccion = "Avd. Pi";
        $empresa -> provincia = "Alicante";
        $empresa -> poblacion = "Alfaz del Pi";
        $empresa -> save();

        $empresa = new Empresa();
        $empresa -> cif = "E35617463";
        $empresa -> nombre_empresa = "Google";
        $empresa -> descripcion = "Empresa creada a nivel nacional desde más de veinte años";
        $empresa -> notas = "?";
        $empresa -> email = "google@gmail.com";
        $empresa -> email_verified_at = null;
        $empresa -> direccion = "Avd. Poligono industrial, 2";
        $empresa -> provincia = "Alicante";
        $empresa -> poblacion = "Alicante";
        $empresa -> save();



    }

}
