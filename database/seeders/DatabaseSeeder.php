<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Seeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = [
            [
                'name' => 'putri',
                'jabatan' => 'admin',
                'password' => bcrypt('12345678'),
                'email' => 'putri@gmail.com',
                'gambar' => 'null'
                
            ],
        ];
        foreach ($user as $key => $value){
            User::create($value);
        }
    }
}
