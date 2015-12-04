<?php


use Styde\Seeder\Seeder;
use TeachMe\Entities\Ticket;

class TicketTableSeeder extends Seeder
{
    public function getModel()
    {
        return new Ticket();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'title'   => $faker->sentence(),
            'status'  => $faker->randomElement(['open', 'open', 'closed']),
            'user_id' => $this->random('User')->id,
        ];
    }
}
