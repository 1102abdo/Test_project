<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreMemberRequest;
use App\Http\Requests\UpdateMemberRequest;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = Member::paginate(config('pageination.count'));
        return view('admin.members.index',get_defined_vars());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    return view('admin.members.create',get_defined_vars());

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMemberRequest $request)
    {
        $validatedData = $request->validated();
        $image = $request->image;

        $NewImageName = time() . '-' .$image->getClientOriginalName();

        $image->storeAs('members',$NewImageName, 'public');

        $validatedData['image'] = $NewImageName;

        Member::create($validatedData);
        return to_route('admin.members.index')->with('success',__('keywords.create_successfully'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Member $member)
    {
      return view('admin.members.show',get_defined_vars());

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Member $member)
    {
                return view('admin.members.edit',get_defined_vars());

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMemberRequest $request, Member $member)
    {
         $validatedData = $request->validated();
         if ($request->hasFile('image')) {
            Storage::delete("public/members/$member->image");

            $image =$request->image;

            $NewImageName = time() . '-' .$image->getClientOriginalName();

            $image->storeAs('members',$NewImageName, 'public');
    
            $validatedData['image'] = $NewImageName;


         }
        $member->update($validatedData);
        return to_route('admin.members.index')->with('success',__('keywords.updatede_successfully'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Member $member)
    {
        $member->delete();
        return to_route('admin.members.index')->with('success',__('keywords.record_deleted'));
    }
}
