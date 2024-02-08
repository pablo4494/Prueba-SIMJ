<?php

namespace App\Http\Controllers;

use App\Models\Holiday;
use Illuminate\Http\Request;

class HolidayController extends Controller
{
    public function index()
    {
        $holidays = Holiday::all();
        return view('holidays.index', compact('holidays'));
    }

    public function create()
    {
        return view('holidays.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:7', // Asegúrate de validar el formato del color
            // Otros campos...
        ]);
    
        $holiday = new Holiday();
        $holiday->name = $validatedData['name'];
        $holiday->color = $validatedData['color'];
        // Otros campos...
        $holiday->save();
    
        return redirect()->route('holidays.index')->with('success', '¡Día festivo creado correctamente!');
    }

    public function show($id)
    {
        $holiday = Holiday::findOrFail($id);
        return view('holidays.show', compact('holiday'));
    }

    public function edit($id)
    {
        $holiday = Holiday::findOrFail($id);
        return view('holidays.edit', compact('holiday'));
    }

    public function update(Request $request, $id)
    {
        // Validar y actualizar los datos del formulario
    }

    public function destroy($id)
    {
        $holiday = Holiday::findOrFail($id);
        $holiday->delete();
        return redirect()->route('holidays.index')->with('success', 'Día festivo eliminado correctamente');
    }

    public function getHolidaysForYear(Request $request)
{
    $year = $request->input('year');
    $holidays = Holiday::whereYear('created_at', $year)->get();
    return response()->json($holidays);
}
}