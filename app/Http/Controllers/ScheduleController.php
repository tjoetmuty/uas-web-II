<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ScheduleController extends Controller
{
    //
    public function index(): View
    {
        $schedule = Schedule::latest()->paginate(10);

        return view('schedule.index', compact('schedule'));
    }

    public function store(Request $request): RedirectResponse
    {
        // validate form
        $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'task'          => 'required',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date',
            'notes'         => 'required',
            'priority'      => 'required',
            'status'        => 'required',
            'asignee'       => 'required',
            'category_task' => 'required',
        ]);


        Schedule::create([
            'title'           => $request->title,
            'description'          => $request->description,
            'task'  => $request->task,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'notes'         => $request->notes,
            'priority'       => $request->priority,
            'status'       => $request->status,
            'asignee'       => $request->asignee,
            'category_task'       => $request->category_task,
            ]);

        //redirect to index
        return redirect()->route('schedule.index')->with(['success' => 'Your data successfully saved!']);
    }

    public function destroy($id): RedirectResponse
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();

        //redirect to index
        return redirect()->route('schedule.index')->with(['success' => 'Your data has been deleted!']);
    }

    public function edit(string $id): View
    {
        $schedule = Schedule::findOrFail($id);

        return view('schedule.edit', compact('schedule'));
    }

    public function update(Request $request, $id): RedirectResponse
    {
       //validate form
       $request->validate([
            'title'         => 'required',
            'description'   => 'required',
            'task'          => 'required',
            'start_date'    => 'required|date',
            'end_date'      => 'required|date',
            'notes'         => 'required',
            'priority'      => 'required',
            'status'        => 'required',
            'asignee'       => 'required',
            'category_task' => 'required',
       ]);

       $schedule = Schedule::findOrFail($id);

       $schedule->update([
            'title'           => $request->title,
            'description'          => $request->description,
            'task'  => $request->task,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'notes'         => $request->notes,
            'priority'       => $request->priority,
            'status'       => $request->status,
            'asignee'       => $request->asignee,
            'category_task'       => $request->category_task,
       ]);

       //redirect to index
       return redirect()->route('schedule.index')->with(['success' => 'Your data has been updated!']);
    }
}
