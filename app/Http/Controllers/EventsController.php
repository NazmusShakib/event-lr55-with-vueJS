<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventsController extends Controller
{

    public function index()
    {
        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
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
        /*$events = [
                [
                'title' => 'All Day Event',
                'start' =>  date('Y-m-d H:i:s')
                ], [
                    'title' => 'Long Event',
                    'start' => date('Y-m-d H:i:s'),
                    'end' => date("Y-m-d H:i:s", strtotime("+1 day"))
                ], [
                    'title' => 'Click for Google',
                    'start' => date('Y-m-d H:i:s'),
                    'end' => date('Y-m-d H:i:s'),
                    'url' => 'http://google.com/'
                ]
        ];*/

        $events = Event::all();

        return $events;
    }

    public function addEvent(Request $request)
    {
        return $request->all();
    }

}
