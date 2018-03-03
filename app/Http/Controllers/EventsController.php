<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Event;
use Ramsey\Uuid\Uuid;

class EventsController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    public function index()
    {
        return view('calendar');
    }

    public function getEvents()
    {
        $events = Event::with('user')->get();
        return $events;
    }

    public function addEvent(Request $request)
    {
        $request->id ? $eventID = $request->id : $eventID = Uuid::uuid4()->toString();

        $event = Event::updateOrCreate(
            [
                'id' => $eventID
            ],
            [
                'description' => $request->description,
                'title' => $request->title,
                'start' => date('Y-m-d H:i:s', $request->start / 1000),
                'end' => date('Y-m-d H:i:s', $request->end / 1000),
            ]
        );

        if ($event) {
            return $event;
        } else {
            return 'false';
        }
    }

}
