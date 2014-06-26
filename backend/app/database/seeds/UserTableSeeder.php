<?php

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();

        User::create(array(
            'name' => 'Santiago',
            'lastname' => 'Mendoza Ramirez',
            'username' => 'sanmen23',
            'password' => Hash::make('sanmen'),
            'status' => true,
            'email' => 'santiagomendozar@gmail.com'
        ));

        User::create(array(
            'name' => 'Christian',
            'lastname' => 'Dachiardi Oliveros',
            'username' => 'ingchristian27',
            'password' => Hash::make('colombia12345'),
            'status' => true,
            'email' => 'cristianoliveros_27@hotmail.com'
        ));
        
        User::create(array(
            'name' => 'Belkis',
            'lastname' => 'Buelvas Castillo',
            'username' => 'thebelk',
            'password' => Hash::make('thomas4'),
            'status' => true,
            'email' => 'belkis_buelvas06@hotmail.com'
        ));
        
        User::create(array(
            'name' => 'Jorge',
            'lastname' => 'Llamas Olivero',
            'username' => 'jdllamas',
            'password' => Hash::make('12345'),
            'status' => true,
            'email' => 'jotallamas@gmail.com'
        ));
    }

}
