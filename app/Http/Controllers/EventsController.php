<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Ramsey\Uuid\Uuid;

class EventsController extends Controller
{

    public function index()
    {
        $events = [];
        $data = Event::all();
        if ($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date . ' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#ff0000',
                        'url' => 'pass here url and any route',
                    ]
                );
            }
        }
        $calendar = Calendar::addEvents($events);

        return view('full-calendar', compact('calendar'));
    }


    public function getEvents()
    {
        $events = Event::all();
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
