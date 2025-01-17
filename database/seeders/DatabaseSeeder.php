<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(RoleSeeder::class);
        $this->call(TaulaSeeder::class);
        $this->call(SedeSeeder::class);
        $this->call(CicloSeeder::class);
        $this->call(TurnoSeeder::class);
        $this->call(ModalidadSeeder::class);
        $this->call(AulaSeeder::class);
        $this->call(CgrupoSeeder::class);
        $this->call(CstandarSeeder::class);
        $this->call(GrupoSeeder::class);
        $this->call(UserSeeder::class);
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'ap_paterno' => 'Jadem',
            'direccion' => 'direccion',
            'password' => bcrypt('12345678'),
            'ap_materno' => 'Learning',
            'f_tipo_documento_id' => 'dni',
            'nro_documento' => '12345678',
            'estado' => '1',
            'locked' => '1',
        ]);

        $user->assignRole(['Administrador', 'Super_Administrador']);

        $this->call(TapoderadoSeeder::class);
        $this->call(ApoderadoSeeder::class);
        $this->call(UserApoderadoSeeder::class);
        $this->call(FTipoComprobanteSeeder::class);
        $this->call(FTipoDocumentoSeeder::class);
        $this->call(FTipoAfectacionSeeder::class);
        $this->call(FEmpresaSeeder::class);
        $this->call(FSedeSeeder::class);
        $this->call(FSerieSeeder::class);
        $this->call(TempresaSeeder::class);
        $this->call(CuentaSeeder::class);
        $this->call(MetodoPagoSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(CarreraSeeder::class);
        $this->call(MatriculaSeeder::class);
        $this->call(ProductoSeeder::class);
    }
}
