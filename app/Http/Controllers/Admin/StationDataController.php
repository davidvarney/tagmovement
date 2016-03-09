<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Event;
use App\StationData;
use App\Station;

class StationDataController extends Controller
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
     * Our index page listing all stations
     *
     * @author David Varney
     */
    public function index(Request $request)
    {
        $default_event = Event::first();
        $event_id = $request->input('event_id', $default_event->id);
        $event = Event::find($event_id);
        $stations = $event->stations()->get();

        return view('admin.station_data.index', array(
            'title' => 'Admin: Station Data',
            'stations' => $stations,
            'event_id' => $event_id
        ));
    }

    public function create(Request $request)
    {
        $station_id = $request->input('station_id');
        $station = Station::find($station_id);

        return view('admin.station_data.create', array(
            'title' => 'Admin: Station Data Create - ' . $station->name . ' (Event: ' . $station->event->name . ')',
            'station_id' => $station_id
        ));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $station_data = StationData::create($data);

        return redirect()->back();
    }

    public function update($station_data_id, Request $request)
    {
        $station_data = StationData::find($station_data_id);

        $data = $request->all();

        $station_data->update($data);

        return redirect()->back();
    }

    public function edit($station_data_id)
    {
        $station_data = StationData::find($station_data_id);

        return view('admin.station_data.edit', array(
            'title' => 'Admin: Station Data Edit - ' . $station_data->station->name . ' (Event: ' . $station_data->station->event->name . ')',
            'station_data'  => $station_data,
        ));
    }

    public function destroy($station_data_id)
    {
        $station_data = StationData::find($station_data_id);
        $station_data->delete();
        return redirect()->back();
    }
}
