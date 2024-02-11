<?php

namespace App\Http\Controllers;

use App\Models\Art_project;
use App\Models\Artist;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects=Art_project::get();
        $artists=User::get();
        return view('artist.index',compact('artists','projects'));
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
        $data=$request->all();
        $data['password'] = Hash::make($request->password); 
        $user=User::create($data);
        $user->projects()->sync($request->input('projects'));
        return redirect()->route('artists.index');
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
       
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $user=User::findorfail($id);
        $user->update($request->all());
        $user->projects()->sync($request->input('projects'));
        return redirect()->route('artists.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $user=User::findorfail($id);
        $user->projects()->detach();
        $user->delete();
        return redirect()->route('artists.index');
    }
}
