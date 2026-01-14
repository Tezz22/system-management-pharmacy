<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::updateOrCreate(
        ['email' => 'admin@apotek.com'],
        [
            'name' => 'Admin',
            'password' => Hash::make('123'),
            'role' => 'admin',
        ]
    );

    User::updateOrCreate(
        ['email' => 'kasir@apotek.com'],
        [
            'name' => 'Kasir',
            'password' => Hash::make('123'),
            'role' => 'cashier',
        ]
    );

    User::updateOrCreate(
        ['email' => 'gudang@apotek.com'],
        [
            'name' => 'Gudang',
            'password' => Hash::make('123'),
            'role' => 'warehouse',
        ]
    );
    }
}
