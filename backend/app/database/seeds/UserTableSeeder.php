<?php

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();

        User::create(array(
            'username' => 'firstuser',
            'password' => Hash::make('firstpassword'),
            'email' => 'email'
        ));

        User::create(array(
            'username' => 'seconduser',
            'password' => Hash::make('secondpassword'),
            'email' => 'email2'
        ));
    }

}
