<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_list = [
            [
                'id' => 1,
                'lname' => 'Calopes',
                'fname' => 'Jhoame',
                'address' => 'Bohol',
                'phone' => '09245125',
                'email' => 'Jhoame@email.com',
                'password' => bcrypt('Jhoame')
            ],
            [
                'id' => 2,
                'lname' => 'Kitty',
                'fname' => 'Mouse',
                'address' => 'Cadana',
                'phone' => '02144124',
                'email' => 'Mouse@email.com',
                'password' => bcrypt('Mouse')
            ],
            [
                'id' => 3,
                'lname' => 'Hello',
                'fname' => 'Mitty',
                'address' => 'USA',
                'phone' => '12515',
                'email' => 'Mitty@email.com',
                'password' => bcrypt('Mitty')
            ],
        ];
        foreach ($user_list as $user) {
            \App\User::create($user);

        }
    }
}
