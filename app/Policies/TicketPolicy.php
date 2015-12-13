<?php

namespace TeachMe\Policies;

use TeachMe\Entities\Ticket;
use TeachMe\Entities\User;

class TicketPolicy
{

    public function selectResource(User $user, Ticket $ticket)
    {
        return $user->id === $ticket->user_id && $ticket->status == 'open';
    }

}