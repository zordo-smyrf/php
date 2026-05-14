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
                'email' => 'marklin2gmail.com',
                'age' => '25',
                'salary' => '70000',
                'created_at' => '2000-04-03',
                'updated_at' => '2004-05-04',
            ]
        );
        DB::table('userssss')->insert(
            [
                'name' => 'Jonh',
                'email' => 'Jonhggl3gmail.com',
                'age' => '18',
                'salary' => '50000',
                'created_at' => '2000-05-04',
                'updated_at' => '2004-06-04',
            ]
        );
        DB::table('userssss')->insert(
            [
                'name' => 'Artem',
                'email' => 'artemdsll4gmail.com',
                'age' => '29',
                'salary' => '90000',
                'created_at' => '2000-06-05',
                'updated_at' => '2004-07-05',
            ]
        );
        DB::table('userssss')->insert(
            [
                'name' => 'Egor',
                'email' => 'egor231gmail.com',
                'age' => '20',
                'salary' => '60000',
                'created_at' => '2000-07-06',
                'updated_at' => '2004-08-06',
            ]
        );
        DB::table('userssss')->insert(
            [
                'name' => 'Alex',
                'email' => 'alex44gmail.com',
                'age' => '22',
                'salary' => '30000',
                'created_at' => '2000-07-06',
                'updated_at' => '2004-08-06',
            ]
        );

        DB::table('postssss')->insert(
            [
                'title' => 'Hello',
                'slug' => 'World',
                'likes' => '100',
                'created_at' => '2000-08-07',
                'updated_at' => '2004-09-07',
            ]
        );
        DB::table('postssss')->insert(
            [
                'title' => 'Hello',
                'slug' => 'World',
                'likes' => '200',
                'created_at' => '2000-08-07',
                'updated_at' => '2004-09-07',
            ]
        );
        DB::table('postssss')->insert(
            [
                'title' => 'Hello',
                'slug' => 'World',
                'likes' => '50',
                'created_at' => '2000-08-07',
                'updated_at' => '2004-09-07',
            ]
        );
        DB::table('postssss')->insert(
            [
                'title' => 'Hello',
                'slug' => 'World',
                'likes' => '150',
                'created_at' => '2000-08-07',
                'updated_at' => '2004-09-07',
            ]
        );
        DB::table('postssss')->insert(
            [
                'title' => 'Hello',
                'slug' => 'World',
                'likes' => '300',
                'created_at' => '2000-08-07',
                'updated_at' => '2004-09-07',
            ]
        );
        DB::table('postes')->insert(
            [
                'title' => 'Почему стоит учиться каждый день',
                'decs' => 'Маленькие шаги ежедневно ведут к большим результатам.',
                'text' => 'Ежедневное обучение помогает мозгу оставаться активным, а вам — быть конкурентоспособным. Даже 10 минут в день, посвященные новому навыку, со временем складываются в значительный результат.',
                'date' => '2024-05-10',
            ]
        );
        DB::table('postes')->insert(
            [
                'title' => 'Как утро влияет на наш день',
                'decs' => 'Утренние привычки задают тон всему дню.',
                'text' => 'Первый час после пробуждения — самый важный. Если начать утро с зарядки, полезного завтрака и планирования, настроение и продуктивность будут выше.',
                'date' => '2024-04-28',
            ]
        );
        DB::table('postes')->insert(
            [
                'title' => ' Топ-3 способа снизить стресс',
                'decs' => 'Простые лайфхаки для спокойствия каждый день.',
                'text' => 'Стресс — часть жизни, но с ним можно справляться. Попробуйте дыхательные упражнения, короткие перерывы в работе и физическую активность. Найдите приятные занятия: читайте, слушайте музыку или рисуйте.',
                'date' => '2024-05-01',
            ]
        );
        DB::table('postes')->insert(
            [
                'title' => 'Почему важно пить воду',
                'decs' => 'Гидратация влияет на все системы организма.',
                'text' => 'Вода участвует во всех обменных процессах. Недостаток жидкости может привести к усталости, головным болям и снижению работоспособности.',
                'date' => '2024-05-08',
            ]
        );
        DB::table('postes')->insert(
            [
                'title' => 'Мобильные приложения для саморазвития',
                'decs' => 'Лучшие помощники для прокачки себя в телефоне.',
                'text' => 'Сегодня смартфон может стать отличным инструментом для освоения языков, ведения дневника или тренировки памяти.',
                'date' => '2024-05-12',
            ]
        );
    }
}
