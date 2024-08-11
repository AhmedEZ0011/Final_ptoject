<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchResultsController extends Controller
{

      public function index()
      {
          return view('Search_Results');
      }


}
