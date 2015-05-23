<?php

namespace TeachMe\Http\Controllers;

use Illuminate\Http\Request;

class CommentsController extends Controller {

    public function submit(Request $request)
    {
        dd($request->all());
    }

}