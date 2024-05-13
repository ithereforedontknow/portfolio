<?php

namespace App\Http\Controllers;

use App\Models\MyModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::find(1);

        if ($user) {
            return view('index', compact('user'));
        } else {
            // Handle the case where user with id 1 is not found
            return view('index', compact('user')); // Pass an empty variable or handle error
        }
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
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
    public function show(MyModel $myModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MyModel $myModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MyModel $myModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MyModel $myModel)
    {
        //
    }
}
