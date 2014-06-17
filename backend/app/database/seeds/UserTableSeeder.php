<?php

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();

        User::create(array(
            'username' => 'firstuser',
            'password' => Hash::make('firstpassword'),
            'email' => 'email@gmail.com'
        ));

        User::create(array(
            'username' => 'seconduser',
            'password' => Hash::make('secondpassword'),
            'email' => 'email2@gmail.com'
        ));
    }

}
