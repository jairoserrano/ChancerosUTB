<?php

class UserTableSeeder extends Seeder {

    public function run() {
        DB::table('users')->delete();

        User::create(array(
            'name' => 'Santiago',
            'lastname' => 'Mendoza Ramirez',
            'email' => 'santiagomendozar@gmail.com',
            'password' => Hash::make('sanmen'),
            'status' => true,
            'confirmemail' => 'santiagomendozar@gmail.com'
        ));

        User::create(array(
            'name' => 'Christian',
            'lastname' => 'Dachiardi Oliveros',
            'email' => 'cristianoliveros_27@hotmail.com',
            'password' => Hash::make('colombia12345'),
            'status' => true,
            'confirmemail' => 'cristianoliveros_27@hotmail.com'
        ));
        
        User::create(array(
            'name' => 'Belkis',
            'lastname' => 'Buelvas Castillo',
            'email' => 'belkis_buelvas06@hotmail.com',
            'password' => Hash::make('thomas4'),
            'status' => true,
            'confirmemail' => 'belkis_buelvas06@hotmail.com'
        ));
        
        User::create(array(
            'name' => 'Jorge',
            'lastname' => 'Llamas Olivero',
            'email' => 'jotallamas@gmail.com',
            'password' => Hash::make('12345'),
            'status' => true,
            'confirmemail' => 'jotallamas@gmail.com'
        ));
    }

}
