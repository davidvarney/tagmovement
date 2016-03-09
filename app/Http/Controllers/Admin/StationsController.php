<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Station;
use App\Event;

class StationsController extends Controller
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
    public function index()
    {
        $stations = Station::get();

        return view('admin.stations.index', array(
            'title' => 'Admin: Stations',
            'stations' => $stations
        ));
    }

    public function create()
    {
        return view('admin.stations.create', array(
            'title' => 'Admin: Stations Create',
            'events' => Event::lists('name', 'id')
        ));
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $station = Station::create($data);

        return redirect()->route('admin_stations_index');


    }

    public function update($station_id, Request $request)
    {
        $station = Station::find($station_id);

        $data = $request->all();

        $station->update($data);

        return redirect()->back();
    }

    public function edit($station_id)
    {
        $station = Station::find($station_id);

        $events = Event::lists('name', 'id');

        return view('admin.stations.edit', array(
            'title' => 'Admin: station Edit - ' . $station->name,
            'station'  => $station,
            'events' => $events
        ));
    }

    public function destroy($station_id)
    {
        $station = Station::find($station_id);
        $station->delete();
        return redirect()->back();
    }
}
