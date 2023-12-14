<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $events = Event::all();

        return view('welcome',
        [
         'events' => $events
        ]);
    }

    public function create(){
        return view ('events.create');
    }

    public function login()
    {
        return view('events.login');
    }

    public function store(Request $request){

        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();
         
        return redirect('/')->with('msg', 'Evento Criado com sucesso!');

    }
}


