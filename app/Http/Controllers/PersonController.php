<?php

namespace App\Http\Controllers;

use App\Models\Administration;
use App\Models\Department;
use App\Models\Person;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $people = Person::with('administration', 'department')->paginate(10);
        return view('people.index', compact('people'));
    }


    public function create()
    {
        $departments = Department::all();
        $administrations = Administration::all();
        return view('people.create', compact('departments', 'administrations'));
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'administration' => 'required|string|max:255',
        ]);

        $personData = [
            'name' => $validated['name'],
            'administration_id' => $validated['administration'],
            'department_id' => $validated['department'],
            'present' => true,
        ];
        Person::create($personData);

        return redirect()->route('people.index')->with('success', 'Pessoa adicionada com sucesso!');
    }


    public function markPresent($id)
    {
        $person = Person::find($id);
        $person->present = true;
        $person->save();

        return redirect()->route('people.index')->with('success', 'Presença marcada com sucesso!');
    }

    public function generateReport()
    {
        $people = Person::with('administration', 'department')->get();

        $totalsByAdministration = $people->groupBy('administration.name')
            ->map->count();

        $totalsByDepartment = $people->groupBy('department.name')
            ->map->count();

        $totalOverall = $people->count();

        $pdf = PDF::loadView('people.report', compact('people', 'totalsByAdministration', 'totalsByDepartment', 'totalOverall'));
        return $pdf->download('report.pdf');
    }
}
