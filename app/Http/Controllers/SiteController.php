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

        $uniqueEvent = Event::where('id', $id)->first(); //first() retorna apenas um registro

        return view('site.details', compact('uniqueEvent'));

    }

    public function createEvent(Request $request) {

        $eventsData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required',
            'image' => 'required',
        ]);
    
        $cadEvt = new Event();
        $cadEvt->name = $eventsData['name'];
        $cadEvt->description = $eventsData['description'];
        $cadEvt->image = $eventsData['image'];
    
        $cadEvt->save();
    
        return view('site.eventsPost', compact('cadEvt'));
    }

}
