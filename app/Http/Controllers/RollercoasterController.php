<?php

namespace App\Http\Controllers;
use App\Models\Rollercoaster;

use Illuminate\Http\Request;

class RollercoasterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $Rollercoaster = Rollercoaster::latest()->paginate(99);

        return view("Rollercoaster.index", compact('Rollercoaster'))
        ->with('i', (request()->input('page',1) - 1) * 99);
    }

    /**
     * Store a newly created resource in storage.
     */

     public function create(Request $request)
    {
            return view("Rollercoaster.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Maker' => 'required',
            'Lengte' => 'required',
            'Hoogte' => 'required',
        ]);
        
        Rollercoaster::create($request->all());
         
        return redirect()->route('Rollercoaster.index')
                        ->with('success','Rollercoaster created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rollercoaster $Rollercoaster)
    {
        return view('Rollercoaster.show',compact('Rollercoaster'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit(Rollercoaster $Rollercoaster)
    {
        
        return view('Rollercoaster.edit', ['Rollercoaster' => $Rollercoaster]);
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rollercoaster $Rollercoaster)
    {
        $request->validate([
            'Maker' => 'required',
            'Lengte' => 'required',
            'Hoogte' => 'required',
        ]);
        
        $Rollercoaster->update($request->all());
        
        return redirect()->route('Rollercoaster.index')
                        ->with('success','Rollercoaster updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rollercoaster $Rollercoaster)
    {
        $Rollercoaster->delete();
         
        return redirect()->route('Rollercoaster.index')
                        ->with('success','Rollercoaster deleted successfully');
    }
}
