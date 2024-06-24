<?php

namespace App\Http\Controllers;

use App\Models\Administration;
use Illuminate\Http\Request;

class AdministrationController extends Controller
{
    public function index()
    {
        $administrations = Administration::all();
        return view('administrations.index', compact('administrations'));
    }

    public function create()
    {
        return view('administrations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Administration::create($request->all());
        return redirect()->route('administrations.index')->with('success', 'Administração adicionada com sucesso!');
    }
}
