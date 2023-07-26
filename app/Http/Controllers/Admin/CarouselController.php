<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carousel;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $fileNameImage = $request->image->getClientOriginalName();
        $filePathImage = 'images/carousel' . $fileNameImage;
        $request->image->move(public_path('images/carousel'), $fileNameImage);
        Carousel::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $request->image->getClientOriginalName()
        ]);
        return redirect()->back()->with('success', 'Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carousel $carousel)
    {
        $carousel->delete();
        return redirect()->back()->with('delete', 'Deleted Successfully');
    }
}
