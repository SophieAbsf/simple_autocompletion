<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TypeaheadController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function autocompleteSearch(Request $request)
    {
          $query = $request->get('query');
          $filterResult = User::where('name', 'LIKE', '%'. $query. '%')->get();
          return response()->json($filterResult);
    }
}
