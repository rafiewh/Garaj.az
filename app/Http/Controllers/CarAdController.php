<?php

namespace App\Http\Controllers;

use App\Models\CarAd;
use Illuminate\Http\Request;

class CarAdController extends Controller
{
    public function index(Request $request)
    {
        $ads = CarAd::query()
        ->when($request->brand, fn($q) => $q->where('brand', $request->brand))
        ->when($request->model, fn($q) => $q->where('model', $request->model))
        ->when($request->city, fn($q) => $q->where('city', $request->city))
        ->when($request->engine_type, fn($q) => $q->where('engine_type', $request->engine_type))
        ->when($request->body_type, fn($q) => $q->where('body_type', $request->body_type))
        ->when($request->price_min, fn($q) => $q->where('price', '>=', $request->price_min))
        ->when($request->price_max, fn($q) => $q->where('price', '<=', $request->price_max))
        ->when($request->year_min, fn($q) => $q->where('year', '>=', $request->year_min))
        ->when($request->year_max, fn($q) => $q->where('year', '<=', $request->year_max))
        ->when($request->mileage_max, fn($q) => $q->where('mileage', '<=', $request->mileage_max))
        ->when($request->condition, fn($q) => $q->where('condition', $request->condition))
        ->when($request->market, fn($q) => $q->where('market', $request->market))
        ->when($request->color, fn($q) => $q->where('color', $request->color))
        ->latest()
        ->get();

        return view('car_ads.index', compact('ads'));
    }

    public function show(CarAd $carAd)
    {
        return view('car_ads.show', compact('carAd'));
    
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
