<?php

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();

        User::create(array(
            'name' => 'Usuario',
            'lastname' => 'Apellido',
            'username' => 'user',
            'password' => Hash::make('pass'),
            'email' => 'email@gmail.com'
        ));

        User::create(array(
            'name' => 'Usuario2',
            'lastname' => 'Apellido2',
            'username' => 'user2',
            'password' => Hash::make('pass2'),
            'email' => 'email2@gmail.com'
        ));
    }

}
