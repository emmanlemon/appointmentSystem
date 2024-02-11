<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;


class EventController extends Controller
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
        $images = $request->file('image');

$uploadedImages = [];

foreach ($images as $image) {
    $fileName = $image->getClientOriginalName();

    $image->move('images/events', $fileName);

    $uploadedImages[] = [
        'fileName' => $fileName,
    ];
}

$jsonData = json_encode($uploadedImages);

    Event::create([
        'title' => $request->title,
        'event_date' => $request->event_date,
        'file_name' => $jsonData
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
    public function destroy(string $id)
    {
        $events = Event::FindorFail($id);
        $events->delete();
        return redirect()->back()->with('delete', 'Deleted Successfully');
    }
}
