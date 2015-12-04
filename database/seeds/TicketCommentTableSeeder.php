<?php

use Styde\Seeder\Seeder;
use TeachMe\Entities\TicketComment;

class TicketCommentTableSeeder extends Seeder
{
    protected $total = 250;

    public function getModel()
    {
        return new TicketComment();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'user_id'   => $this->random('User')->id,
            'ticket_id' => $this->random('Ticket')->id,
            'comment'   => $faker->paragraph(),
            'link'      => $faker->randomElement(['', '', $faker->url]),
        ];
    }
}
