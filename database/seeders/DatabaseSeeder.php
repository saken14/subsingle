<?php

namespace Database\Seeders;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(3)->create([
            'bdate' => '1983-03-21',
            'u_gender' => 'Женский',
            'phone_num' => '+7(777)777-77-77',
        ]);

        AdminUser::factory(1)->create([
            'fname' => 'Admin',
            'lname' => 'Adminov',
            'email' => 'laravel@laravel.com',
            'password' => bcrypt('12345'),
        ]);
    }
}
