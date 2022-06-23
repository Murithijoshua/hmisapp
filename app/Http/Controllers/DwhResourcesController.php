<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DwhResources;

class DwhResourcesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dwhData = DwhResources::all();
        return view('index', compact('dwhData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('resources.Dwh.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $storeData = $request->validate([
            'Title' => 'required|max:255',
            'Description' => 'required|max:255',
            'url' => 'required|max:255',
        ]);
        $dwhData = DwhResources::create($storeData);
        return redirect('/')->with('completed', 'Entry has been saved!');
   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data = DwhResources::findOrFail($id);
        return view('resources.Dwh.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $updateData = $request->validate([
            'Title' => 'required|max:255',
            'Description' => 'required|max:255',
            'url' => 'required|max:255',
        ]);
        DwhResources::whereId($id)->update($updateData);
        return redirect('/')->with('completed', 'Entry has  has been updated');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $dwhdata = DwhResources::findOrFail($id);
        $dwhdata->delete();
        return redirect('/')->with('completed', 'Entry has been deleted');
  
    }
}
