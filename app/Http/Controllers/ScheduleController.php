<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\View\View;

class ScheduleController extends Controller
{
    //
    public function index(): View
    {
        $schedule = Schedule::latest()->paginate(10);

        return view('schedule.index', compact('schedule'));
    }
}
