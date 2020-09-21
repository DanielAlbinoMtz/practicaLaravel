<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Monse',
            'email'=>'monse@gmail.com',
            'password'=>bcrypt('12345678'),
        ]);

        factory(User::class, 10)->create();
    }
}
