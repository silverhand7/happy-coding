<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Game;

class GameController extends Controller
{
    public function search(Request $request)
    {
        $games = [];

        if (!empty($request->q)) {
            $games = Game::fuzzySearch(
                // fields to search in
                [
                    'name',
                    'involved_companies.company.name', // you can search for nested values as well
                ],
                // the query to search for
                $request->q,
                // enable/disable case sensitivity (disabled by default)
                false,
            )->get();
        }

        return $games;
    }
}
