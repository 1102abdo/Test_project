<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;

class SubscriberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Subscribers = Subscriber::paginate(config('pageination.count'));
        return view('admin.Subscribers.index',get_defined_vars());
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscriber $subscriber)
    {
        $subscriber->delete();
        return to_route('admin.Subscribers.index')->with('success',__('keywords.record_deleted'));
    }
}
