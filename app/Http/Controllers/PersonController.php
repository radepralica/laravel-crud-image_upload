<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function index()
    {
        $persons = Person::orderBy('birthYear', 'asc')->get();

        return view('/index', ['persons' => $persons]);
    }

    public function create()
    {
        return view('/create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'firstName' => ['required', 'min:3'],
            'lastName' => ['required', 'min:3'],
            'birthYear' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
            'streetAddress' => ['required'],
            'countryImage' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']

        ]);
        $imageName = time() . '.' . $request->countryImage->extension();
        $request->countryImage->move(public_path('images'), $imageName);
        $data['countryImage'] = $imageName;
        Person::create($data);
        return redirect(route('person.index'))->with('success-create', 'Korisnik je uspješno kreiran');
    }

    public function edit(Person $person)
    {
        return view('/edit', ['person' => $person]);
    }

    public function update(Request $request, Person $person)
    {
        $data = $request->validate([
            'firstName' => ['required', 'min:3'],
            'lastName' => ['required', 'min:3'],
            'birthYear' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
            'streetAddress' => ['required'],
            'countryImage' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048']
        ]);
        if ($request->hasFile('countryImage')) {
            $imageName = time() . '.' . $request->countryImage->extension();
            $request->countryImage->move(public_path('images'), $imageName);
            $data['countryImage'] = $imageName;
        }
        $person->update($data);
        return redirect(route('person.index'));
    }

    public function delete(Person $person)
    {
        $person->delete();
        return redirect(route('person.index'));
    }
}
