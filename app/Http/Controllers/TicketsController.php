<?php namespace TeachMe\Http\Controllers;

use Illuminate\Auth\Guard;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

use TeachMe\Repositories\CommentRepository;
use TeachMe\Repositories\TicketRepository;

class TicketsController extends Controller {

    private $ticketRepository;
    private $commentRepository;

    public function __construct(
        TicketRepository $ticketRepository,
        CommentRepository $commentRepository
    )
    {
        $this->ticketRepository = $ticketRepository;
        $this->commentRepository = $commentRepository;
    }

	public function latest()
    {
        $tickets = $this->ticketRepository->paginateLatest();

        return view('tickets/list', compact('tickets'));
    }

    public function popular()
    {
        return view('tickets/list');
    }

    public function open()
    {
        $tickets = $this->ticketRepository->paginateOpen();
        return view('tickets/list', compact('tickets'));
    }

    public function closed()
    {
        $tickets = $this->ticketRepository->paginateClosed();
        return view('tickets/list', compact('tickets'));
    }

    public function details($id)
    {
        $ticket = $this->ticketRepository->findOrFail($id);
        return view('tickets/details', compact('ticket'));
    }

    public function create()
    {
        return view('tickets.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:120',
            'link'  => 'url',
        ]);

        $ticket = $this->ticketRepository->openNew(
            currentUser(),
            $request->get('title'),
            $request->get('link')
        );

        return Redirect::route('tickets.details', $ticket->id);
    }

    public function close(Request $reques, $id)
    {
        $link = $reques->get('link');
        $comment_id = $reques->get('comment_id');

        $ticket = $this->ticketRepository->closeTicket($id, $link);

        $comment = $this->commentRepository->selected($comment_id);

        return Redirect::route('tickets.details', $ticket->id);
    }

}
