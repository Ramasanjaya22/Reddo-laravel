<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

use File;
use Auth;

use App\Models\User;
use App\Models\Character;

class LeaderboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $characters = Character::orderBy('level', 'desc')->get();
        $crowns[] = ['gold-crown.png', 'silver-crown.png', 'bronze-crown.png'];

        return view('pages.dashboard.leaderboard.index', ['characters' => $characters, 'crowns' => $crowns]);
    }

    public function show($id)
    {
        return abort(404);
    }

    public function destroy($id)
    {
        return abort(404);
    }
}
