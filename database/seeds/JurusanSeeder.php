<?php

use Illuminate\Database\Seeder;
use App\Jurusan;

class JurusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          $listJurusan = ['Teknologi Informasi', 'Administrasi', 'Public Relation'];

          foreach ($listJurusan as $jurusan) {
            Jurusan::create(['name' => $jurusan]);
    }
  }
}
