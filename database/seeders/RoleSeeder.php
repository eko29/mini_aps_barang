<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\contoh;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contoh = [
            [
                'nama' => 'John Doe',
            ],
            [
                'nama' => 'John',
            ]
        ];
        contoh::insert($contoh);
        //     'nama' => 'John Doe',
        // ]);
    }
}
