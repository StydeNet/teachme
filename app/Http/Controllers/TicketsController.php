<?php namespace TeachMe\Http\Controllers;

use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TicketsController extends Controller {

	public function latest()
    {
        return view('tickets/list');
    }

    public function popular()
    {
        return view('tickets/list');
    }

    public function open()
    {
        return view('tickets/list');
    }

    public function closed()
    {
        return view('tickets/list');
    }

    public function details($id)
    {
        return view('tickets/details');
    }

}
