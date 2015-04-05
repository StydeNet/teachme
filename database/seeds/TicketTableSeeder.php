<?php


use TeachMe\Entities\Ticket;

class TicketTableSeeder extends BaseSeeder {

    public function getModel()
    {
        return new Ticket();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'title'   => $faker->sentence(),
            'status'  => $faker->randomElement(['open', 'open', 'closed']),
            'user_id' => 1
        ];
    }

    public function run()
    {
        $this->createMultiple(50);
    }
}