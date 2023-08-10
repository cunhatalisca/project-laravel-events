<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class SiteController extends Controller
{
    public function index()
    {
        $events = Event::paginate(3); //serve para a paginação
        
        return view('site.home', compact('events'));
    }

    public function details ($id) {

        $event = Event::where('id', $id);

        return view('site.details', compact('event'));

    }
}
