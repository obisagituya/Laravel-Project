<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ninja; // Import the Ninja model

class NinjaController extends Controller
{
    // The index method to show all ninjas
    public function index() {
        $ninjas = Ninja::latest()->get(); // Using latest() to order by creation date

        return view('ninjas.index', [
            'ninjas' => $ninjas,
        ]);
    }

    // The show method to display details for a single ninja
    // Now using Route Model Binding: Laravel automatically finds the Ninja by ID
    public function show(Ninja $ninja) {
        return view('ninjas.show', ['ninja' => $ninja]);
    }

    // The create method to show the ninja creation form
    public function create() {
        return view('ninjas.create');
    }

    // The store method to save a new ninja to the database
    public function store() {
        $ninja = new Ninja();

        $ninja->name = request('name');
        $ninja->weapon = request('weapon');
        $ninja->age = request('age');

        $ninja->save();

        return redirect('/ninjas')->with('mssg', 'Ninja Added Successfully!');
    }

    // The destroy method to delete a ninja
    public function destroy(Ninja $ninja) {
        $ninja->delete();

        return redirect('/ninjas')->with('mssg', 'Ninja Mission Completed (Deleted)!');
    }
}

