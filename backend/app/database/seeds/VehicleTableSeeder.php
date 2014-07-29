<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class VehicleTableSeeder extends Seeder {

    public function run() {
        Vehicle::create(array(
            'id' => 1,
            'plate' => 'GNM504',
            'color' => 'Rojo',
            'brand' => 'Renault',
            'model' => 'Twingo 2007',
            'capacity' => 4,
            'status' => 1,
            'type' => 1,
            'users_id' => 1
        ));
        Vehicle::create(array(
            'id' => 2,
            'plate' => 'FKJ324',
            'color' => 'Azul',
            'brand' => 'Renault',
            'model' => 'Clio 2008',
            'capacity' => 2,
            'status' => 1,
            'type' => 1,
            'users_id' => 2
        ));
        Vehicle::create(array(
            'id' => 3,
            'plate' => 'HJJ832',
            'color' => 'Verde',
            'brand' => 'Renault',
            'model' => 'Sandero 2010',
            'capacity' => 2,
            'status' => 1,
            'type' => 1,
            'users_id' => 3
        ));
        Vehicle::create(array(
            'id' => 4,
            'plate' => 'FMJ313',
            'color' => 'Negro',
            'brand' => 'Ford',
            'model' => 'Fordsito 2014',
            'capacity' => 3,
            'status' => 1,
            'type' => 1,
            'users_id' => 4
        ));
    }

}
