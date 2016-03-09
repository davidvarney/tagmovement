<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;

class EventsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Our index page listing all users
     *
     * @author David Varney
     */
    public function index()
    {
        $events = Event::get();

        return view('admin.events.index', array(
            'title' => 'Admin: Events',
            'events' => $events
        ));
    }

    public function create()
    {
        return view('admin.events.create', array(
            'title' => 'Admin: Events Create'
        ));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $event = Event::create([
            'name' => $data['name'],
        ]);

        return redirect()->route('admin_events_index');


    }

    public function update($event_id, Request $request)
    {
        $event = Event::find($event_id);

        $data = $request->all();

        $event->update($data);

        return redirect()->back();
    }

    public function edit($event_id)
    {
        $event = Event::find($event_id);

        return view('admin.events.edit', array(
            'title' => 'Admin: Event Edit - ' . $event->name,
            'event'  => $event
        ));
    }

    public function destroy($event_id)
    {
        $event = Event::find($event_id);
        $event->delete();
        return redirect()->back();
    }
}
