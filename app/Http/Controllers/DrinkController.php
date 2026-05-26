<?php


namespace App\Http\Controllers;

use App\Models\Drink;
use Illuminate\Http\Request;

class DrinkController extends Controller
{
    public function index()
    {
        $drinks = Drink::paginate(5);
        return view('drinks.index', compact('drinks'));
    }

    public function create()
    {
        return view('drinks.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'amount' => 'required|integer',
            'calories' => 'required|integer',
            'date' => 'required|date'
        ]);

        Drink::create($request->all());

        return redirect()->route('drinks.index')->with('success', 'Drink added!');
    }

    public function show(Drink $drink)
    {
        return view('drinks.show', compact('drink'));
    }

    public function edit(Drink $drink)
    {
        return view('drinks.edit', compact('drink'));
    }

    public function update(Request $request, Drink $drink)
    {
        $request->validate([
            'name' => 'required',
            'type' => 'required',
            'amount' => 'required|integer',
            'calories' => 'required|integer',
            'date' => 'required|date'
        ]);

        $drink->update($request->all());

        return redirect()->route('drinks.index')->with('success', 'Updated!');
    }

    public function destroy(Drink $drink)
    {
        $drink->delete();
        return redirect()->route('drinks.index')->with('success', 'Deleted!');
    }
}