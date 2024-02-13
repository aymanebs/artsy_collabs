<?php

namespace App\Http\Controllers;

use App\Models\Art_project;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Http\Request;

class Art_projectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $artists=User::get();
        $partners=Partner::get();
        $projects=Art_project::get();
        return view('art_project.index',compact('projects','partners','artists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $project=Art_project::create($request->all());
        $project->users()->sync($request->input('artists'));
        $project->addMediaFromRequest('image')->toMediaCollection('images');
        return redirect()->route('projects.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $project=Art_project::findOrFail($id);

        return view('art_project.details',compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Art_project $project)
    {
        $project->clearMediaCollection('images');
        $project->update($request->all());
        $project->addMediaFromRequest('image')->toMediaCollection('images');
        $project->users()->sync($request->input('artists'));
        return redirect()->route('projects.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Art_project $project)
    {
       
        $project->users()->detach();
        $project->delete();
        return redirect()->route('projects.index');
    }

    // view archive page 

    public function archive(){
        
        $projects= Art_project::onlyTrashed()->get();
        return view('art_project.archive',compact('projects'));
    }

    // restore project

    public function restore(Art_project $project){

      
        $project->restore();
        return redirect()->route('projects.archive');
    }
}
