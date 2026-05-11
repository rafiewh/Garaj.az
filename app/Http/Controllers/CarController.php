<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('home', compact('cars'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        Car::create($request->all());
        return redirect('/');
    }

    public function destroy($id)
    {
        Car::find($id)->delete();
        return redirect('/');
    }
}