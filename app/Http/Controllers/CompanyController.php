<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $companies = Company::paginate(config('pageination.count'));
        return view('admin.companies.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('admin.companies.create',get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $validatedData = $request->validated();
        $image = $request->image;

        $NewImageName = time() . '-' .$image->getClientOriginalName();

        $image->storeAs('companies',$NewImageName, 'public');

        $validatedData['image'] = $NewImageName;


        Company::create($validatedData);

        return to_route('admin.companies.index')->with('success',__('keywords.create_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
      return view('admin.companies.show',get_defined_vars());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
                return view('admin.companies.edit',get_defined_vars());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
         $validatedData = $request->validated();
         if ($request->hasFile('image')) {
            Storage::delete("public/companies/$company->image");

            $image =$request->image;

            $NewImageName = time() . '-' .$image->getClientOriginalName();

            $image->storeAs('testmonials',$NewImageName, 'public');
    
            $validatedData['image'] = $NewImageName;


         }
        $company->update($validatedData);
        return to_route('admin.companies.index')->with('success',__('keywords.updatede_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return to_route('admin.companies.index')->with('success',__('keywords.record_deleted'));
    }
}
