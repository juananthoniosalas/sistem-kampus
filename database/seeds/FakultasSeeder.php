<?php

use Illuminate\Database\Seeder;
use App\Fakultas;

class FakultasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run(){
             Factory(App\Fakultas::class,11)->create();
         }
  }
