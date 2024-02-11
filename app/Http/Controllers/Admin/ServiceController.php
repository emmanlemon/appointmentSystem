<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\ServiceChild;

class ServiceController extends Controller
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
        $filePathImage = 'images/services' . $fileNameImage;
        $request->image->move(public_path('images/services'), $fileNameImage);
        Service::create([
            'name' => $request->name,
            'description' => $request->description,
            'prescription' => $request->prescription,
            'image' => $request->image->getClientOriginalName()
        ]);
        return redirect()->back()->with('success', 'Service Created Successfully!');
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
        $fileNameImage = $request->image->getClientOriginalName();
        $request->image->move(public_path('images/doctor'), $fileNameImage);
        $service = Service::findorFail($id);
        $service->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'prescription' => $request->input('prescription'),
            'image' => $request->image->getClientOriginalName()
        ]);
        return redirect()->back()->with('success', 'Service Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return redirect()->back()->with('delete', 'Service Deleted Successfully');
    }

    public function store_serviceChild(Request $request){
        if($request->service_id == "null") {
            return redirect()->back()->with('error', 'Service Child Created Not Successfully!');
        }else{
            ServiceChild::create($request->all());
        return redirect()->back()->with('success', 'Service Child Created Successfully!');
        }
    }
    
    public function delete_serviceChild(ServiceChild $serviceChild){
        $serviceChild->delete();
        return redirect()->back()->with('delete', 'Deleted Service Child Successfully');
    }
}
