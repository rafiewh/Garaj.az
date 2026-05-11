<?php

namespace App\Http\Controllers;

use App\Models\CarAd;
use Illuminate\Http\Request;

class CarAdController extends Controller
{
    public function index()
    {
        $ads = CarAd::latest()->get();

        return view('car_ads.index', compact('ads'));
    }

    public function create()
    {
        return view('car_ads.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'year' => 'required|integer|min:1900|max:' . date('Y'),
            'price' => 'required|numeric|min:0',
            'city' => 'required|string|max:255',
            'phone' => 'required|string|max:30',
            'description' => 'nullable|string',
            
            'engine_type' => 'nullable|string|max:255',
            'engine_volume' => 'nullable|string|max:255',
            'body_type' => 'nullable|string|max:255',
            'mileage' => 'nullable|integer|min:0',
            'color' => 'nullable|string|max:255',
            'market' => 'nullable|string|max:255',
            'condition' => 'nullable|string|max:255',
            
            'images' => 'nullable|array|max:20',
            'images.*' => 'image|mimes:jpg,jpeg,png,webp|max:4096',


        ]);

        $imagePaths = [];

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $imagePaths[] = $image->store('car_ads', 'public');
            }
        }

        $validated['images'] = $imagePaths;
    

        CarAd::create($validated);

        return redirect()
            ->route('car-ads.index')
            ->with('success', 'Elan əlavə edildi.');
    }

    public function destroy(CarAd $carAd)
    {
        $carAd->delete();

        return redirect()
            ->route('car-ads.index')
            ->with('success', 'Elan silindi.');
    }
}
