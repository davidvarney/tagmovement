<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Athlete;

class AthletesController extends Controller
{
    public function index()
    {
        $athletes = Athlete::get();

        return view('admin.athletes.index', array(
            'title' => 'Admin: Athletes',
            'athletes' => $athletes
        ));
    }
    public function store(Request $request)
    {
        $data = $request->all();
        $athlete = Athlete::create($data);

        return redirect()->back();
    }
}
