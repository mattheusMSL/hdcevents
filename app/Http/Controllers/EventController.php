<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){

        $events = Event::all();

        return view('welcome', ['events' => $events]);
    }

    public function create(){
        return view ('events.create');
    }

    // public function login() {
    //     return view('events.login');
    // }

    public function store(Request $request){

        $event = new Event;
        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;
        $event->items = $request->items;
        $event->date = $request->date;

        // image upload 
        
        if($request->hasfile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now") . "." . $extension);

            $request->image->move(public_path('img/events'), $imageName);

            $event->image = $imageName;
        }

        $event->save();
         
        return redirect('/')->with('msg', 'Evento Criado com sucesso!');

    }

    public function show($id){

        $event = Event::findOrFail($id);

        return view ('events.show', ['event' => $event]);

    }
}


