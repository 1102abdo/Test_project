<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\StoreServiceRequest;
use App\Http\Requests\UpdateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Service::paginate(config('pageination.count'));
        return view('admin.services.index',get_defined_vars());
        // dd($services);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('hello from create');
        return view('admin.services.create',get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRequest $request)
    {
        $validatedData = $request->validated();
        // dd($validatedData);
        Service::create($validatedData);
        return to_route('admin.services.index')->with('success',__('keywords.create_successfully'));
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        return view('admin.services.show',get_defined_vars());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        // dd($service);
        return view('admin.services.edit',get_defined_vars());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRequest $request, Service $service)
    {
        $validatedData = $request->validated();
        $service->update($validatedData);
        // dd($service);
        return to_route('admin.services.index')->with('success',__('keywords.updatede_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        $service->delete();
        return to_route('admin.services.index')->with('success',__('keywords.record_deleted'));
        // dd('hello from destroy');

    }
}
