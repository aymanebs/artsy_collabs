<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerStoreRequest;
use App\Http\Requests\PartnerUpdateRequest;
use App\Models\Art_project;
use App\Models\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      $projects=Art_project::get();
      $partners=Partner::get();
      return view('partner.index',compact('partners','projects'));
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
    public function store(PartnerStoreRequest $request)
    {
        $partner=Partner::create($request->all());
        $projects=$request->input('projects');
        
        return redirect()->route('partners.index');
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
    public function update(PartnerUpdateRequest $request, int $id)
    {
        $project=Partner::findorfail($id);
        $project->update($request->all());
        return redirect()->route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $user=Partner::findorfail($id);
        $user->delete();
        return redirect()->route('partners.index');
    }
}
