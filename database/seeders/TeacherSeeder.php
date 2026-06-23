<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class TeacherSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Maria Santos',
            'username' => 'teacher',
            'password' => 'password',
        ]);
    }
}
