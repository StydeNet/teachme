<?php


use Styde\Seeder\Seeder;
use TeachMe\Entities\TicketVote;

class TicketVoteTableSeeder extends Seeder
{
    protected $total = 250;

    public function getModel()
    {
        return new TicketVote();
    }

    public function getDummyData(\Faker\Generator $faker, array $customValues = array())
    {
        return [
            'user_id'   => $this->random('User')->id,
            'ticket_id' => $this->random('Ticket')->id,
        ];
    }
}
