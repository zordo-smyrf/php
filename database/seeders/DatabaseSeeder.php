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
        	DB::table('usersss')->insert(
            [
				'name' => 'Mark',
				'email'  => 'marklin2gmail.com',
				'age'  => '25',
                'salary'  => '70000',
                'created_at'  => '2000-04-03',
                'updated_at'  => '2004-05-04',
			],
            [
				'name' => 'Jonh',
				'email'  => 'Jonhggl3gmail.com',
				'age'  => '18',
                'salary'  => '50000',
                'created_at'  => '2000-05-04',
                'updated_at'  => '2004-06-04',
			],
            [
				'name' => 'Artem',
				'email'  => 'artemdsll4gmail.com',
				'age'  => '29',
                'salary'  => '90000',
                'created_at'  => '2000-06-05',
                'updated_at'  => '2004-07-05',
			],
            
            );

    }
}
