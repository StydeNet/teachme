<?php namespace TeachMe\Http\Controllers;

use TeachMe\Http\Requests;
use TeachMe\Http\Controllers\Controller;

use Illuminate\Http\Request;

class VotesController extends Controller {

    public function submit($id)
    {
        dd('Votando por el ticket: ' . $id);
	}

    public function destroy($id)
    {
        dd('Quitando el voto al ticket: ' . $id);
    }

}
