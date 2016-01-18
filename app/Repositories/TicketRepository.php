<?php

namespace TeachMe\Repositories;

use TeachMe\Entities\Ticket;

class TicketRepository extends BaseRepository {

    public function getModel()
    {
        return new Ticket();
    }

    protected function getCountTicketCommentsQuery()
    {
        return '( SELECT COUNT(*) FROM ticket_comments WHERE ticket_comments.ticket_id = tickets.id )';
    }

    protected function getCountTicketVotesQuery()
    {
        return '( SELECT COUNT(*) FROM ticket_votes WHERE ticket_votes.ticket_id = tickets.id )';
    }

    protected function selectTicketsList()
    {
        return $this->newQuery()->selectRaw(
            'tickets.*, '
            . $this->getCountTicketCommentsQuery() . ' as num_comments,'
            . $this->getCountTicketVotesQuery() . ' as num_votes'
        )->with('author');
    }

    public function paginateLatest()
    {
        return $this->selectTicketsList()
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
    }

    public function paginatePopular()
    {
        return $this->selectTicketsList()
            ->orderBy('num_votes', 'DESC')
            ->whereRaw($this->getCountTicketVotesQuery() . ' >= 10')
            ->paginate(20);
    }

    public function paginateOpen()
    {
        return $this->selectTicketsList()
            ->where('status', 'open')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
    }

    public function paginateClosed()
    {
        return $this->selectTicketsList()
            ->where('status', 'closed')
            ->orderBy('created_at', 'DESC')
            ->paginate(20);
    }

    public function openNew($user, $title, $link = '')
    {
        return $user->tickets()->create([
            'title'  => $title,
            'link'   => $link,
            'status' => empty($link) ? 'open' : 'closed'
        ]);
    }

}