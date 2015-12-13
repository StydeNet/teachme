<?php

use Faker\Generator;
use Styde\Seeder\Seeder;
use TeachMe\Entities\User;

class UserTableSeeder extends Seeder
{
    public function getModel()
    {
        return new User();
    }

    public function getDummyData(Generator $faker, array $customValues = array())
    {
        return [
            'name' => $faker->name,
            'email' => $faker->email,
            'password'  => bcrypt('secret'),
            'role' => 'user'
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
            'password' => bcrypt('admin'),
            'role' => 'admin'
        ]);
    }
}