<?php

namespace App\Http\Controllers;

use App\Models\Testmonial;
use App\Http\Requests\StoreTestmonialRequest;
use App\Http\Requests\UpdateTestmonialRequest;
use Illuminate\Support\Facades\Storage;

class TestmonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testmonials = Testmonial::paginate(config('pageination.count'));
        return view('admin.testmonials.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('admin.testmonials.create',get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTestmonialRequest $request)
    {
        $validatedData = $request->validated();

        $image = $request->image;

        $NewImageName = time() . '-' .$image->getClientOriginalName();

        $image->storeAs('testmonials',$NewImageName, 'public');

        $validatedData['image'] = $NewImageName;

        Testmonial::create($validatedData);

        return to_route('admin.testmonials.index')->with('success',__('keywords.create_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Testmonial $testmonial)
    {
      return view('admin.testmonials.show',get_defined_vars());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Testmonial $testmonial)
    {
                return view('admin.testmonials.edit',get_defined_vars());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTestmonialRequest $request, Testmonial $testmonial)
    {
         $validatedData = $request->validated();
         if ($request->hasFile('image')) {
            Storage::delete("public/testmonials/$testmonial->image");

            $image =$request->image;

            $NewImageName = time() . '-' .$image->getClientOriginalName();

            $image->storeAs('testmonials',$NewImageName, 'public');
    
            $validatedData['image'] = $NewImageName;


         }
        $testmonial->update($validatedData);
        return to_route('admin.testmonials.index')->with('success',__('keywords.updatede_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testmonial $testmonial)
    {
        $testmonial->delete();
        return to_route('admin.testmonials.index')->with('success',__('keywords.record_deleted'));
    }
}
