<?php namespace TeachMe\Http\Controllers;

use TeachMe\Entities\Ticket;
use TeachMe\Repositories\TicketRepository;
use TeachMe\Repositories\VoteRepository;

class VotesController extends Controller {

    private $ticketRepository;
    private $voteRepository;

    public function __construct(
        TicketRepository $ticketRepository,
        VoteRepository $voteRepository
    )
    {
        $this->ticketRepository = $ticketRepository;
        $this->voteRepository = $voteRepository;
    }

    public function submit($id)
    {
        $ticket = $this->ticketRepository->findOrFail($id);
        $this->voteRepository->vote(currentUser(), $ticket);

        return redirect()->back();
	}

    public function destroy($id)
    {
        $ticket = $this->ticketRepository->findOrFail($id);
        $this->voteRepository->unvote(currentUser(), $ticket);

        return redirect()->back();
    }

}
