<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;
class HolidayController extends Controller
{
    public function index()
    {
        $holidays = Holiday::all();
        return view('admin.holidays.index', compact('holidays'));
    }

    public function create()
    {
        return view('admin.holidays.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'holiday' => 'required|string|max:255',
            'is_booking' => 'nullable|boolean',
        ]);

        Holiday::create($request->all());

        return redirect('admin/holidays')->with('success', 'Holiday added successfully.');
    }

    public function edit(Holiday $holiday)
    {
        return view('admin.holidays.edit', compact('holiday'));
    }

    public function update(Request $request, Holiday $holiday)
    {
        $request->validate([
            'date' => 'required|date',
            'holiday' => 'required|string|max:255',
            'is_booking' => 'nullable|boolean',
        ]);

        $holiday->update($request->all());

        return redirect('admin/holidays')->with('success', 'Holiday updated successfully.');
    }

    public function destroy(Holiday $holiday)
    {
        $holiday->delete();
        return redirect('admin/holidays')->with('success', 'Holiday deleted successfully.');
    }
}
