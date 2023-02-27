<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('MiTabla')->insert([
           'titulo' => Str::random(10),
           'descripcion' => Str::random(10).'@gmail.com',
           'created_at' => date('Y-m-d'),
           'updated_at' => date('Y-m-d')]);
        }
    }
}
