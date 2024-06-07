<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.user.index', [
            'users' => User::paginate(10)
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User successfully deleted!');
    }

    public function sub_type(){
        $user = Auth::user();
        $user->Subscription_type = 'Premium';
        $user->save();

        return view('subscription_success');
    }

    // app/Http/Controllers/UserController.php

    public function analytics()
    {
        // Assuming you have a column 'subscription_type' in your users table
        $freeUsersCount = User::where('subscription_type', 'Free')->count();
        $premiumUsersCount = User::where('subscription_type', 'Premium')->count();

        return view('profile.analytics', compact('freeUsersCount', 'premiumUsersCount'));
    }

}
