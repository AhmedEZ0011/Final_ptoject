<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Proposals_viewController extends Controller
{
    //
    public function index()
    {
        return view('Proposals_view');
    }
}
