<?php

use Illuminate\Support\Facades\Gate;
use TeachMe\Policies\TicketPolicy;

class TicketPolicyTest extends TestCase
{

    public function test_author_can_select_resource()
    {
        $user = seed('User');
        $ticket = seed('Ticket', [
            'user_id' => $user->id
        ]);

        $policy = new TicketPolicy();

        $this->assertTrue($policy->selectResource($user, $ticket));
    }

    public function test_other_users_cannot_select_resource()
    {
        $user = seed('User');
        $ticket = seed('Ticket', [
            'user_id' => $user->id
        ]);

        $otherUser = seed('User');

        $policy = new TicketPolicy();

        $this->assertFalse($policy->selectResource($otherUser, $ticket));
    }

    public function test_administrators_can_select_resource()
    {
        $user = seed('User');
        $ticket = seed('Ticket', [
            'user_id' => $user->id
        ]);

        $admin = seed('User', [
            'role' => 'admin'
        ]);

        $this->assertTrue($admin->can('selectResource', $ticket));
        //$this->assertTrue(Gate::forUser($admin)->allows('selectResource', $ticket));
    }

}
