<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        	DB::table('usersss')->insert([
				'name' => 'Mark',
				'email'  => 'marklin2gmail.com',
				'age'  => '67',
                'salary'  => '70000',
                'created_at'  => '2000-04-03',
                'updated_at'  => '2004-04-03',
			]);

    }
}
