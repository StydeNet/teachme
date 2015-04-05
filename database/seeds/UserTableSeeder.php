<?php

use Faker\Generator;
use TeachMe\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends BaseSeeder {

    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'name' => $faker->name,
            'email' => $faker->email,
            'password'  => bcrypt('secret')
        ];
    }

    public function run()
    {
        $this->createAdmin();
        $this->createMultiple(50);
    }

    private function createAdmin()
    {
        $this->create([
            'name' => 'Duilio Palacios',
            'email' => 'i@duilio.me',
            'password' => bcrypt('admin')
        ]);
    }

}