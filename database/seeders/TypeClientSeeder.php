<?php

namespace Database\Seeders;

use App\Models\TypeClient;
use Illuminate\Database\Seeder;

class TypeClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeClient::create([
            'type_client' => 'Pessoa Física',
        ]);

        TypeClient::create([
            'type_client' => 'Pessoa Jurídica'
        ]);
    }
}
