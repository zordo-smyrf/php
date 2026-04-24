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
        	DB::table('userssss')->insert(
            [
				'name' => 'Mark',
				'email'  => 'marklin2gmail.com',
				'age'  => '25',
                'salary'  => '70000',
                'created_at'  => '2000-04-03',
                'updated_at'  => '2004-05-04',
			]);
            DB::table('userssss')->insert(
            [
				'name' => 'Jonh',
				'email'  => 'Jonhggl3gmail.com',
				'age'  => '18',
                'salary'  => '50000',
                'created_at'  => '2000-05-04',
                'updated_at'  => '2004-06-04',
			]);
            DB::table('userssss')->insert(
            [
				'name' => 'Artem',
				'email'  => 'artemdsll4gmail.com',
				'age'  => '29',
                'salary'  => '90000',
                'created_at'  => '2000-06-05',
                'updated_at'  => '2004-07-05',
			]);
            DB::table('userssss')->insert(
            [
				'name' => 'Egor',
				'email'  => 'egor231gmail.com',
				'age'  => '20',
                'salary'  => '60000',
                'created_at'  => '2000-07-06',
                'updated_at'  => '2004-08-06',
			]);
            DB::table('userssss')->insert(
            [
				'name' => 'Alex',
				'email'  => 'alex44gmail.com',
				'age'  => '22',
                'salary'  => '30000',
                'created_at'  => '2000-07-06',
                'updated_at'  => '2004-08-06',
			]);

            DB::table('postssss')->insert(
            [
				'title' => 'Hello',
				'slug'  => 'World',
				'likes'  => '100',
                'created_at'  => '2000-08-07',
                'updated_at'  => '2004-09-07',
			]);
            DB::table('postssss')->insert(
            [
				'title' => 'Hello',
				'slug'  => 'World',
				'likes'  => '200',
                'created_at'  => '2000-08-07',
                'updated_at'  => '2004-09-07',
			]);
            DB::table('postssss')->insert(
            [
				'title' => 'Hello',
				'slug'  => 'World',
				'likes'  => '50',
                'created_at'  => '2000-08-07',
                'updated_at'  => '2004-09-07',
			]);
            DB::table('postssss')->insert(
            [
				'title' => 'Hello',
				'slug'  => 'World',
				'likes'  => '150',
                'created_at'  => '2000-08-07',
                'updated_at'  => '2004-09-07',
			]);
            DB::table('postssss')->insert(
            [
				'title' => 'Hello',
				'slug'  => 'World',
				'likes'  => '300',
                'created_at'  => '2000-08-07',
                'updated_at'  => '2004-09-07',
			]);
    }
}
