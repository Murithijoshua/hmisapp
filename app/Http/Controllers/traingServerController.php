<?php

namespace App\Http\Controllers;
use App\trainingservers;
use Illuminate\Http\Request;

class traingServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('resources.training.create');
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
            'ServerName' => 'required|max:255',
            'Description' => 'required|max:255',
            'LoginUsername' => 'nullable|string|max:255',
            'LoginPass' => 'nullable|string|max:255',
            'link'=>'required|max:255',
            'github' => 'required|max:255'
        ]);
        $prodData = trainingservers::create($storeData);
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
        $data = trainingservers::findOrFail($id);
        return view('resources.training.edit', compact('data'));
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
            'ServerName' => 'required|max:255',
            'Description' => 'required|max:255',
            'LoginUsername' => 'max:255',
            'LoginPass' => 'max:255',
            'link'=>'required|max:255',
            'github' => 'required|max:255'
        ]);
        trainingservers::whereId($id)->update($updateData);
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
        $trainingData = trainingservers::findOrFail($id);
        $trainingData->delete();
        return redirect('/')->with('completed', 'Entry has been deleted');
    }
}
